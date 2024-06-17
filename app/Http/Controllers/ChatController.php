<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function dashboard()
    {
        $users = User::where('id','!=',auth()->id())->get();
        return view('dashboard',compact('users'));
    }

    public function chat($id)
    {
    return view('chat', compact('id'));
    }
}
