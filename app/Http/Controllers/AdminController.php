<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $apps = Application::orderBy('status')->orderByDesc('created_at')->get();
        return view('admin.index', compact('apps'));
    }
}
