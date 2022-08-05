<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Works;


class HomeController extends Controller
{
    public function index()
    {
        $count = Works::count();
        return view('backend.home', compact('count'));
    }
}
