<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
      $univ = DB::table('universitas')->get();


            echo "1";
      return view('welcome', ['univ'=>$univ]);
     }

    public function input(Request $request)
    {
      $nama_depan = $_POST['namadepanmhs'];
      $nama_belakang = $POST['namabelakangmhs'];
      $email = $POST['emailmahasiswa'];
      $hp = $POST['hpmahasiswa'];
      $username = $POST['usernamemahasiswa'];
      $password = $POST['namadepanmhs'];
      $tgl = $POST['tanggallahirmahasiswa'];
      $iduniv = $POST['iduniv'];
      DB::table('mahasiswa')->insert(
        ['nama_depan' => $nama_depan,
         'nama_belakang' =>$nama_belakang,
         'username' => $username,
         'password' => $password,
         'email' => $email,
         'no_hp' => $hp,
         'tanggal_lahir' => $tgl,
         'id_univ' => $iduniv
       ]
      );

      echo "1";
    }
}
