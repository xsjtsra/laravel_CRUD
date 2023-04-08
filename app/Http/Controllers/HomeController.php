<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function showDataPengguna()
    {
        $data['users'] = User::all();

        return view('data_pengguna',$data);
    }

}
