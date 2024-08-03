<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $data = DB::table('website')->get(); // Selext * from website
        $heroSection = DB::table('hero_section')->get();
        return view('index',compact('data','heroSection'));
        // return view('index',compact('heroSection'));
    }

}
// dd($data);