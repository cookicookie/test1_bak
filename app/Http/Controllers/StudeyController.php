<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\study;


class StudeyController extends Controller
{
    //
    public function index($request Request){
        $items = study::all;
        return view('index', ['item'=> $items]);
    }

}
