<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bio;

class DashboardController extends Controller
{

    public function index()
    {
        $posts = auth()->user()->posts;
        $bio = auth()->user()->bios;
        // $bio = Bio::with('author')->get();

        return view('dashboard', compact('bio', 'posts'));
    }
}
