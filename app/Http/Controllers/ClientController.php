<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index(){
        $user = User::where('id', Auth::id())->first();

        $apps = Application::where('user_id', Auth::id())->orderByDesc('created_at')->get();

        return view('client.index', compact('user', 'apps'));
    }
}
