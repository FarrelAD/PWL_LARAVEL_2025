<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function about()
    {
        return '
        <h1>About me:</h1>
        <ul>
            <li>Name: Farrel Augusta Dinata</li>
            <li>NIM: 2341720081</li>';
    }
}
