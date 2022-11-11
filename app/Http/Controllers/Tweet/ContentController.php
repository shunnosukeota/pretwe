<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Tweet\RatingRequest;
use App\Models\Rating;
use App\Services\TweetService;
use App\Models\Tweet;
use App\Models\TweetRating;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class ContentController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, TweetService $tweetService)
    {
        $tweetId = (int) $request->route('tweetId');
        
        $tweet = Tweet::where('id', $tweetId)->firstOrFail();
        $ratings = $tweet->ratings()->orderBy('created_at', 'DESC')->get();
        
        return view('tweet.contentIndex')
            ->with('tweet', $tweet)
            ->with('ratings', $ratings);
    }
}
