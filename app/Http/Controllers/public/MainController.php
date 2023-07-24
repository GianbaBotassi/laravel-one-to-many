<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;

class MainController extends Controller
{
    public function index()
    {

        $projects = Project::all();

        return view('public.index', compact('projects'));
    }
}
