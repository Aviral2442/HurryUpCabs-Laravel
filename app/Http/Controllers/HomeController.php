<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // Selext * from website
        // $data = DB::table('website')->get();
        // return view('index',compact('data'));

        $heroSection = DB::table('hero_section')->get();
        $serviceSection = DB::table('service_section')->get();
        return view('index',compact('heroSection','serviceSection'));
    }

}
// dd($data);