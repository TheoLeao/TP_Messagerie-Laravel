<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;
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
        if(User::find($userID)){
            $messages = Auth::user()->getMessagesWithUser($userID);
            return view('conversation', ['messages' => $messages, 'user' => User::find($userID), 'authUser' => Auth::user()]);
        }
        else{
            abort(403, 'Une erreur est survenue. L\'utilisateur que vous cherchez est introuvable. ');
        }
       
    }

    public function postSendMessage(Request $request, $userID){
        $this->validate($request, [
            'message' => 'required'
        ]);
        DB::table('messages')->insert([
            'content' => $request->input('message'),
            'sender_id' => Auth::user()->id,
            'receiver_id' => $userID,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        $messages = Auth::user()->getMessagesWithUser($userID);

        return redirect()->back();
    }
}
