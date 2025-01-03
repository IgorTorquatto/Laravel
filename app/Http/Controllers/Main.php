<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function index()
    {
        $data =[
            "title" => "Título",
            "description" => "Descrição"
        ];

        return view('view1',$data);
    }
}
