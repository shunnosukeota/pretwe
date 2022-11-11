<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tweet;

class SearchController extends Controller
{

    /**
     * ユーザー一覧
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function __invoke(Request $request)
    {
        $keyword = $request->input('keyword');
        $keyword_g = $request->input('keyword_g');
        $keyword_r = $request->input('keyword_r');
        $keyword_a = $request->input('keyword_a');
        $keyword_s = $request->input('keyword_s');

        $query = Tweet::query();

        if(!($keyword_g == "未選択")) {
            $query->where('gift', 'LIKE', "%{$keyword_g}%");
        }

        if(!($keyword_r == "未選択")) {
            $query->where('relation', 'LIKE', "%{$keyword_r}%");
        }

        if(!empty($keyword_a)) {
            $query->where('age', 'LIKE', "{$keyword_a}");
        }

        if(!($keyword_s == "未選択")) {
            $query->where('situation', 'LIKE', "%{$keyword_s}%");
        }

        if(!empty($keyword)) {
            $query->where('present', 'LIKE', "%{$keyword}%")
                ->orWhere('detail', 'LIKE', "%{$keyword}%")
                ->orWhere('relation', 'LIKE', "%{$keyword}%")
                ->orWhere('age', 'LIKE', "%{$keyword}%")
                ->orWhere('situation', 'LIKE', "%{$keyword}%");
        }

        $countTweets = count($query->get());
        $tweets = $query->orderBy('created_at', 'DESC')->Paginate(15);
        


        return view('tweet.index')
                ->with('tweets', $tweets)
                ->with('countTweets', $countTweets)
                ->with('keyword', $keyword)
                ->with('keyword_g', $keyword_g)
                ->with('keyword_r', $keyword_r)
                ->with('keyword_a', $keyword_a)
                ->with('keyword_s', $keyword_s);
    }
}