<?php

namespace App\View\Components\Tweet;

use App\Services\TweetService;
use Illuminate\View\Component;

class Rate extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    
    private int $userId;
    private $rate;
    private int $tweetId;

    public function __construct(int $userId, $rate, int $tweetId)
    {
        $this->userId = $userId;
        $this->rate = $rate;
        $this->tweetId = $tweetId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tweet.form.rating')
                ->with('ratings', $this->rate)
                ->with('otherTweet', \Illuminate\Support\Facades\Auth::id() != $this->userId)
                ->with('tweetId', $this->tweetId);
    }
}
