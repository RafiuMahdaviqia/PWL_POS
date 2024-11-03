<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        // JOBSHEET 3   
        // tambah data
        // $data=[
        //     'username' => 'customer 1',
        //     'nama' => 'pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 5
        // ];
        // UserModel::insert($data);

        //tambah data dengan Eloquent
        // $data = [
        //     'nama' => 'Pelanggan pertama',
        // ];
        // UserModel::where('username', 'customer 1')->update($data); //update data user

        // // coba akses model UserModel
        // $user = UserModel::all(); //ambil semua data m_user
        // return view('user', ['data' => $user]);

        // JOBSHEET 4
        // no 2
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_dua',
        //     'nama' => 'Manager 2',
        //     'password' => Hash::make('12345')   
        // ];
        // UserModel::create($data);
        // $user = UserModel::all();
        // return view('user', ['data' => $user]);

        // no 5
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data);
        // $user = UserModel::all();
        // return view('user', ['data' => $user]);

        //Prak 2.1
        // no 1
        // $user = UserModel::find(1);
        // return view('user', ['data' => $user]);
        // no 4
        // $user = UserModel::where('level_id', 1)->first();
        // return view('user', ['data' => $user]);
        // no 6
        // $user = UserModel::firstWhere('level_id', 1);
        // return view('user', ['data' => $user]);
        // no 8
        // $user = UserModel::findOr(1, ['username', 'nama'], function(){
        //     abort(404);
        // });
        // return view('user', ['data' => $user]);
        // no 10
        // $user = UserModel::findOr(20, ['username', 'nama'], function(){
        //     abort(404);
        // });
        // return view('user', ['data' => $user]);

        // prak 2.2
        // no 2
        // $user = UserModel::findOrFail(1);
        // return view('user', ['data' => $user]);

        // no 3
        // $user = UserModel::where('username', 'manager9')->firstOrFail();

        // prak 2.3
        // $user = UserModel::where('level_id', 2)->count();
        // // dd($user);
        // return view('user',['data' => $user]);

        // prak 2.4
        // no 2
        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager',
        //         'nama' => 'Manager',
        //     ],
        // );
        // return view('user', ['data' => $user]);

        // no 4
        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager22',
        //         'nama' => 'Manager Dua Dua',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ],
        // );
        // return view('user', ['data' => $user]);
        
        // no 6
        // $user = UserModel::firstOrNew(
        //     [
        //         'username' => 'manager',
        //         'nama' => 'Manager',
        //     ],
        // );
        // return view('user', ['data' => $user]);

        // no 8
        // $user = UserModel::firstOrNew(
        //     [
        //         'username' => 'manager33',
        //         'nama' => 'Manager Tiga Tiga',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ],
        // );
        // $user->save();
        // return view('user', ['data' => $user]);

        // prak 2.5
        // $user = UserModel::create(
        //     [
        //         'username' => 'manager55',
        //         'nama' => 'Manager55',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2,
        //     ]
        // );
        // $user -> username = 'manager56';

        // $user->isDirty(); //true
        // $user->isDirty('username'); //true
        // $user->isDirty('nama'); //false
        // $user->isDirty(['nama', 'username']); //true

        // $user->isClean(); //false
        // $user->isClean('username'); //false
        // $user->isClean('nama'); //true
        // $user->isClean(['nama', 'username']); //false

        // $user->save();

        // $user->isDirty(); //false
        // $user->isClean(); //true
        // dd($user->isDirty());

        // no 3
        // $user = UserModel::create(
        //     [
        //         'username' => 'manager11',
        //         'nama' => 'Manager11',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2,
        //     ]
        // );
        // $user -> username = 'manager12';
        // $user->save();
        // $user->wasChanged(); //true
        // $user->wasChanged('username'); //true
        // $user->wasChanged(['username', 'level_id']); //true
        // $user->wasChanged('nama'); //false
        // dd($user->wasChanged(['nama', 'username'])); //true

        // prak 2.6
        // $user = UserModel::all();
        // return view('user', ['data' => $user]);

        // prak 2.7
        $user = UserModel::with('level')->get();
        // dd($user);
        return view ('user', ['data' => $user]);
    }
    
    public function tambah(){
        return view('user_tambah');
    }

    public function tambah_simpan(Request $request){
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make('$request->password'),
            'level_id' => $request->level_id
        ]);
        return redirect('/user');
    }

    public function ubah($id){
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
    }

    public function ubah_simpan($id, Request $request){
        $user = UserModel::find($id);
        $user -> username = $request->username;
        $user -> nama = $request->nama;
        $user -> password = Hash::make('$request->password');
        $user -> level_id = $request->level_id;
        $user->save();

        return redirect('/user');
    }

    public function hapus ($id){
        $user = UserModel::find($id);
        $user -> delete();

        return redirect('/user');
    }
}