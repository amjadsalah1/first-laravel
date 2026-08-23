<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PersonalController extends Controller
{
    public function index ()
    {
        return view('personal.index');
    }

    function resume() {
        return view('personal.resume');
    }

    function projects()  {
        return view('personal.projects');
    }

    function contact() {
        return view('personal.contact');
    }
}
