<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function home(){

        return view('homepage',['css' => '../css/homepage.css', 'title' => 'Homepage']);
    }
}
