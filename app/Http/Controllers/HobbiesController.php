<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index()
    {
        $data =array (
            'intro' => 'My hobbies are:',
            'hobby' => 'Playing Video Games',
            'hobby1' => 'Reading Manhwa & Manga',
            'hobby2' => 'Drawing',
            'hobby3' => 'Watching Movies'
        );

        return view('components.hobbies', $data);
    }
}
