<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class JobController extends Controller
{
    public function jobpost()
    {
        $authUserId = auth()->id();
    
        // Dump and die for debugging
        //dd($authUserId);
    
        return Inertia::render('Jobs/Jobpost', [
            'authUserId' => $authUserId,
        ]);
    }

}
