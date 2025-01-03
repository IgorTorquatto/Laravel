<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserModel;

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

        // $users = DB::table('users')->get()->toArray();
        // dd($users);

        //ORM
        $model = new UserModel();
        $users = $model->all();

        dd($users);
    }

    public function view()
    {
        $data = [
            'title' => 'Título da página'
        ];

        return view('home',$data);
    }
}
