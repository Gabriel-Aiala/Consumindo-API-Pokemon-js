<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class pokeController extends Controller
{
    public function buscar(Request $request)
    {
        return view('index');
    }
    public function search(Request $request)
    {
        return view('search');
    }
    public function detail(Request $request)
    {
        return view('search');
    }public function error(Request $request)
    {
        return view('error');
    }

}
