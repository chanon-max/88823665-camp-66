<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    function __construct(){
        $user = session()->get('user');

        if(!isset($user->id)){
            echo "login please";
            die;
        }
    }
    function index(){
        return view('home');
    }
}
