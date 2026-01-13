<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index(Request $request) {

        return view('resume', ['test' => 'test123']);
    }
    public function projects(Request $request) {
        return view('projects', ['test' => '11']);
    }
}