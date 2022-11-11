<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\Request;

class MyIndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $userId = $request->user()->id;
        $userName = $request->user()->name;
        $tweets = Tweet::where('user_id', $userId)->orderBy('created_at', 'DESC')->get();

        return view('tweet.userIndex')
            ->with('tweets', $tweets)
            ->with('userName', $userName);
    }
}
