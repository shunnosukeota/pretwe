<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Tweet\RatingRequest;
use App\Models\Tweet;
use App\Models\Rating;
use App\Services\TweetService;

class RatingController extends Controller
{
    public function __invoke(Request $request,RatingRequest $request_r, TweetService $tweetService)
    {
        $tweetId = (int) $request->route('tweetId');
        if (!$tweetService->checkRating($request->user()->id, $tweetId)) {
            return redirect()
            ->route('tweet.content.index', ['tweetId' => $tweetId])
            ->with('feedback.error', "あなたはこの投稿に評価済みです");
        }else{
        $tweet = Tweet::where('id', $request_r->id())->firstOrFail();
        $rating = new Rating;
        $tweet->rateParameter++;
        $tweet->ratedata = $tweet->ratedata + $request_r->ratedata();
        $tweet->rate = $tweet->ratedata/$tweet->rateParameter;

        $rating->raterId = $request->user()->id;
        $rating->raterRate = $request_r->ratedata();
        $rating->raterSex = $request_r->raterSex();
        $rating->raterAge = $request_r->raterAge();
        $rating->comment = $request_r->comment();
        $tweet->save();
        $rating->save();
        $tweet->ratings()->attach($rating->id);
        return redirect()
        ->route('tweet.content.index', ['tweetId' => $tweet->id])
        ->with('feedback.success', "評価を投稿しました");
        }
    }
    
}
