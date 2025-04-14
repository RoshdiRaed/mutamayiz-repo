<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $works = Work::latest()->take(6)->get();
        $services = Service::latest()->take(6)->get();
        return view('pages.home', compact('works', 'services'));
    }
}
