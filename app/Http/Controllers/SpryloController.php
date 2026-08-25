<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SpryloController extends Controller
{
    public function index(){
        return view('website-Sprylo.index');
    }

    public function cart(){
        return view('website-Sprylo.cart');
    }

    public function contact(){
        return view('website-Sprylo.contact');
    }

    public function product(){
        return view('website-Sprylo.product');
    }



}
