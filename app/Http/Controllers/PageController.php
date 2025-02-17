<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Menampilkan pesan "Selamat Datang"
    public function index()
    {
        return 'Selamat Datang';
    }

    // Menampilkan Nama dan NIM
    public function about()
    {
        return 'Nama: Veren Regina Tirsya - NIM: 2341760127';
    }

    // Menampilkan halaman artikel dinamis berdasarkan ID
    public function articles($id)
    {
        return 'Halaman Artikel dengan ID ' . $id;
    }
}
