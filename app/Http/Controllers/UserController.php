<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        /*$data = [
            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' => 'Manager 3',
            'password' => Hash::make('12345'),
            
        ];
        UserModel::create($data);
        */

        /*$user = UserModel::where('level_id',2)->count();
        return view('user', ['data' => $user]);
        */

        $user = UserModel::create(
            [
                'username' => 'manager55',
                'nama' => 'Manager 55',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ],
            );
            $user -> username = 'manager12';
            $user -> save();

            $user -> wasChanged();
            $user -> wasChanged('username');
            $user -> wasChanged(['username', 'level_id']);
            $user -> wasChanged('nama');
            dd($user->wasChanged(['nama','username']));

    }
}
