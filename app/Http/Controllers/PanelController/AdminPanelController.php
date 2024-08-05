<?php

namespace App\Http\Controllers\PanelController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
