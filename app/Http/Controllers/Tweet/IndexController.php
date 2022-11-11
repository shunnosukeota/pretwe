<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Services\TweetService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, TweetService $tweetService)
    {
        $tweets = $tweetService->getTweets();
        return view('tweet.index')
        ->with('tweets', $tweets)
        ->with('keyword', " ")
        ->with('keyword_g', "未選択")
        ->with('keyword_r', "未選択")
        ->with('keyword_a')
        ->with('keyword_s', "未選択");
    }
}
