<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nnewdashboardcontroller extends Controller
{
    public function index()
    {
        $newuser = [
            [
                "name"=> "Vivek",
                "email"=> "viveklondhe9@gmail.com",
            ],
            [
                "name"=> "Kothmini",
                "email"=> "Kothmini@gmail.com",
            ]
        ];
        return view(
            'nnewdashboard',
            [
                "users"=> $newuser
            ]
        );
    }
}
