<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tweet;

class UserIndexController extends Controller
{
    
    public function __invoke(Request $request)
    {
        $userId = $request->route('userId');
        $tweets = Tweet::where('user_id', $userId)->orderBy('created_at', 'DESC')->get();
        $tweet = Tweet::where('user_id', $userId)->first();
        $userName = $tweet->user->name;
        
        return view('tweet.userIndex')
            ->with('tweets', $tweets)
            ->with('userName', $userName);
    }
}
