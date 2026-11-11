<?php

namespace Ahmedelpopown\LaravelLogger\Controllers;

use Ahmedelpopown\LaravelLogger\Models\LaravelLogger;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {

        return view('logger::home')->with(['data'=>LaravelLogger::all()]);
    }
}
