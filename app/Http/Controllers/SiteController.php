<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SiteController extends Controller
{
    public function index ()
    {
        // $name = 'amjad';
        // $age = 22;


        // dump(compact("name", "age"));
        // echo "asdsad";

         return view("front.index", compact("name", "age"));
        // return view('front.index')
        //     ->with('name', $name)
        //     ->with('age', $age);

        // return view('front.index', [
        //     'name' => $name,
        //     'age' => $age
        // ]);

    }



    public function age ($name, $birthyear)
    {
        $years = date('Y') - $birthyear;
        $months = $years * 12;
        $days = $years * 365;
        $hours = $years * 365 * 60;
        $hour = $days * 60;

        return view("front.age", compact("name", "years", "months", "days", "hours"));




    }
}
