<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    //
    public function menu()
    {
        $a = [
            array('beranda' => "Beranda",
            'berita' => "Berita",
            'Berita' =>['Politik','Manca Negara'],
            'Olahraga' => "Olahraga",
            'olahraga' => ['Sepak Bola','Bulu Tangkis'],
            'tentang' => "Tentang",)
        ];
        return view('pages1.menu',['menu' => $a]);
    }
    public function kampus()
    {
        $dosen = [
        
            ['nama' => 'Yusuf Bachtiar','mata_kuliah' => 'Pemrograman Mobile', 'mahasiswa' => [
                ['nama' => 'Muhammad Sholeh', 'nilai' =>78],
                ['nama' => 'Jujun Junaedi', 'nilai' => 85],
                ['nama' => 'Mamat Alkatiri', 'nilai' => 90],
                ['nama' => 'Ubay holin', 'nilai' => 87],
                ['nama' => 'Fadillah', 'nilai' => 95],
        ],
        ],
                ['nama' => 'Yaris Riyadi', 'mata_kuliah' => 'Pemrograman Web', 'mahasiswa' => [
                ['nama' => 'Alfred McTomminay', 'nilai' =>67],
                ['nama' => 'Bruno Kasmir', 'nilai' => 90],
                ['nama' => 'Akid Hendra', 'nilai' => 50],
                ['nama' => 'Dany Irawan', 'nilai' => 70],
                ['nama' => 'Chandra Mega Putra', 'nilai' => 60],
        ],
        ],
    
    ];
        return view('pages1.kampus',['kampus' => $dosen]);
    
    }
    public function tv()
    {
        $tv = [

            ['stasiun' => 'TVRI','Siaran' => 'Berita', 'Jam_tayang' => '18:00','tanggal' => '13 july 2022'],
            ['stasiun' => 'NET TV','Siaran' => 'Komedi', 'Jam_tayang' => '17:00','tanggal' => '14 july 2022'],
            ['stasiun' => 'BEINSPORT','Siaran' => 'Olahraga', 'Jam_tayang' => '16:00','tanggal' => '12 july 2022'],
            ['stasiun' => 'Ochannel','Siaran' => 'Berita', 'Jam_tayang' => '15:00','tanggal' => '11 july 2022'],
            ['stasiun' => 'Indosiar','Siaran' => 'Dangdut', 'Jam_tayang' => '14:00','tanggal' => '13 july 2022'],
        ];
        return view('pages1.tv',['tv' => $tv]);
    }    
    public function belanja()
    {
        $barang = [
            ['nama' => 'alfian', 'membeli' =>
            [
                ['beli' => 'sepatu', 'harga' => '250000'],
                ['beli' => 'baju', 'harga' => '100000'],
                ['beli' => 'celana', 'harga' => '150000'],
                ['beli' => 'kupluk', 'harga' => '100000'],
            ],
            ],
            ['nama' => 'dida', 'membeli' =>
            [
                ['beli' => 'topi', 'harga' => '100000'],
                ['beli' => 'baju', 'harga' => '75000'],
                ['beli' => 'celana', 'harga' => '125000'],
            ],
            ],
        ];
        return view('pages1.belanja',['belanja' => $barang]);
    }
}
