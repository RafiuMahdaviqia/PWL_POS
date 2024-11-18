<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username'  => 'required',
            'nama'      => 'required',
            'password'  => 'required|min:5|confirmed',
            'level_id'  => 'required',
            'foto'      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $foto  = $request->foto;
        $user = UserModel::create([
            'username'  => $request->username,
            'nama'      => $request->nama,
            'password'  => bcrypt($request->password),
            'level_id'  => $request->level_id,
            'foto'      => $foto->hashName(),
        ]);

        if ($user) {
            return response()->json([
                'success'   => true,
                'user'      => $user,
            ],201);
        }

        return response()->json([
            'success'   => false,
        ],409);
    }
}