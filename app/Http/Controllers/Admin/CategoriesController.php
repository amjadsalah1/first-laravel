<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CategoriesController extends Controller
{

    public function index ()
    {
        // this data will come from database
        $categories = [
            [
                'id' => 1,
                'name' => 'Sport'
            ],
            [
                'id' => 2,
                'name' => 'Health'
            ],
            [
                'id' => 3,
                'name' => 'War'
            ],
            [
                'id' => 4,
                'name' => 'Drama'
            ],
            [
                'id' => 5,
                'name' => 'a'
            ]
        ];

            $dev_name = 'Amjad Salah';

        return view('admin.categories.index', compact("categories", "dev_name"));

    }
}
