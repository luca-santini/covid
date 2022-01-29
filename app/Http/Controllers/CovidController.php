<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Covid;

class CovidController extends Controller
{
    public function index()
    {
        $covids = Covid::all();
        return view('covids.index', compact('covids'));
    }
    public function show($id)
    {
        $covid = Covid::find($id);
        return view('covids.show', compact('covid'));
    }

}
