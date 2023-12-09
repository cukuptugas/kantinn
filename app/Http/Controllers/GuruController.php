<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        return view('guru_tampil');
    }

    public function create()
    {
        return 'ini tambah data guru';
    }
}
