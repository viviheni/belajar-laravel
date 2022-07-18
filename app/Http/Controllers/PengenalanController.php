<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengenalanController extends Controller
{
    //
    public function pengenalan()
    {
        $nama = "Vivi Heni Rohaeni";
        $umur = "17";
        return view('pages1.pengenalan', compact('nama', 'umur'));
    }

    public function intro($nama, $alamat, $umur)
    {
        return view('pages1.intro', compact('nama', 'alamat', 'umur'));
        // tampilan output
        // localhost.8000/bay/bandung/23
    }

    public function siswa()
    {
        $a = [
            array('id' => 1, 'nama' =>'vivi', 'umur'=> 16, 'kelas' => 'XII RPL 1', 'mapel' => ['B.Indonesia', 'B.Inggris']),
            array('id' => 2, 'nama' =>'silva', 'umur'=> 17, 'kelas' => 'XII RPL 1', 'mapel' => ['MTK', 'IPA']),
            array('id' => 3, 'nama' =>'safitri', 'umur'=> 17, 'kelas' => 'XII RPL 1', 'mapel' => ['SIMDIG', 'B.SUNDA']),
            array('id' => 4, 'nama' =>'sifa', 'umur'=> 17, 'kelas' => 'XII RPL 1', 'mapel' => ['FISIKA', 'KWU']),
            array('id' => 5, 'nama' =>'rafey', 'umur'=> 16, 'kelas' => 'XII RPL 1', 'mapel' => ['PAI', 'AL-QURAN']),
        ];
        // melihat data dumy basis json
        // dd($a);
        // melakukan passing data looping conditional dari controller ke view
        return view('/pages1.siswa', ['siswa' => $a]);
    }
}

 