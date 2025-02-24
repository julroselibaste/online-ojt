<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    
    public function welcome(): Response
    {

    

        return Inertia::render(
            'Welcome',

            [

                'canLogin' => Route::has('login'),
                'canRegister' => Route::has('register'),
              
            ]
        );
    }
}
