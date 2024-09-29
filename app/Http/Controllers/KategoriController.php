<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function(){
    return view('welcome');
});
class KategoriController extends Controller
{
    public function index()
    {
        /*$data = [
            'kategori_kode' => 'SNK',
            'kategori_nama' => 'Snack / Makanan Ringan',
            'created_at' => Now()
        ];
        DB::table('m_kategori')->insert($data);
        return 'Insert data baru berhasil';
        */

        /*$row = DB::Table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
        return 'Update data berhasil. Jumlah data yang diupdate: ' .$row. 'baris';
        */

        /*$data = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
        return 'Delete data berhasil. Jumlah data yang dihapus : ' .$data. 'baris';
        */

        $data = DB::table('m_kategori')->get();
        return view('kategori', ['data'=> $data]);
        
    }
}
