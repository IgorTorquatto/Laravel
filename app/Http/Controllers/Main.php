<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function users()
    {
        // $users = DB::select('SELECT * FROM users');
        // dd($users);

        $users = DB::table('users')->get()->toArray();
        dd($users);
    }
}
