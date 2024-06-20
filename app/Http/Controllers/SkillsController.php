<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $data =array (
            'skills'=>'Knowledgable in Digital Art',
            'skills1'=>'Basic knowledge in Photoshop'
        );

        return view('components.skills',$data);
    }
}
