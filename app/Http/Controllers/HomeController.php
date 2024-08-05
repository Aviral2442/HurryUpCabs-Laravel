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
        $whyChooseUs = DB::table('whychoosehurryup')->get();
        return view('index',compact('heroSection','serviceSection','whyChooseUs'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function register()
    {
        return view('pages.registration');
    }

    public function login()
    {
        return view('pages.login');
    }

}
// dd($data);