<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        return view('home', ['users' => $users]);
    }

    public function showConversation($userID){
        $messages = Auth::user()->getMessagesWithUser($userID);
        return view('conversation', ['messages' => $messages, 'user' => User::find($userID), 'authUser' => Auth::user()]);

    }
}
