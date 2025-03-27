<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        // Display a listing of the resource
        return view('services'); // Example: returning a view
    }
}
