<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DevController extends Controller
{
    function info()
    {
        $dev = [
            'name' => 'amjad salah',
            'email' => 'amjadsalah04@gmail.com',
            'phone' => '+970111111111',
            'age' => 22
        ];

        return $dev;
    }
}
