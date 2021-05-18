<?php

namespace App\Http\Controllers;

use App\Models\TravelPackages;
use Illuminate\Http\Request;

class HomeController extends Controller
{
 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $travel = TravelPackages::with(['galleries'])->get();
        return view('pages.user.dashboard',['travel'=>$travel]);
    }
}
