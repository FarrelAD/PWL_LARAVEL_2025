<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat datang!';
    }

    public function about()
    {
        return '
        <h1>About me:</h1>
        <ul>
            <li>Name: Farrel Augusta Dinata</li>
            <li>NIM: 2341720081</li>';
    }

    public function articles($id)
    {
        return "Ini adalah halaman artikel dengan ID: $id";
    }
}
