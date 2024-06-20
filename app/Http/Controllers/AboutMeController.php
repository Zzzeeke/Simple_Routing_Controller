<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        $data =array (
            'title' => 'About Me',
            'greetings' => 'Nice to meet you I am',
            'name' => 'Ezekiel Cagas',
            'age' => 21
        );

        return view('components.about-me', $data);
    }
}
