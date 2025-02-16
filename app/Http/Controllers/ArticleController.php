<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    public function articles($id)
    {
        return "Ini adalah halaman artikel dengan ID: $id";
    }
}
