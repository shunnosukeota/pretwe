<x-layout title="詳細 | プレツイ">
    <x-layout.single>
        <div class="px-2 pt-20">
            
            @php
                $breadcrumbs = [
                    ['href' => route('tweet.index'), 'label' => 'TOP'],
                    ['href' => '#', 'label' => '詳細']
                ];
            @endphp
            <x-element.breadcrumbs :breadcrumbs="$breadcrumbs"></x-element.breadcrumbs>
            <x-tweet.content :tweet="$tweet"></x-tweet.content>
            <x-tweet.rate :userId="$tweet->user_id" :rate="$tweet->rate" :tweetId="$tweet->id"></x-tweet.rate>
            <x-tweet.rateList :ratings="$ratings" :userId="$tweet->user_id" :tweetId="$tweet->id"></x-tweet.rateList>
        </div>
        @auth
        <form method="post" action="{{ route('logout') }}" class="float-right pt-4">
            @csrf
            <div class="justify-end pb-2 px-4">
                <button
                        class="text-sm text-gray-500 hover:text-gray-800"
                        onclick="event.preventDefault(); this.closest('form').submit();"
                >ログアウト</button>
            </div>
        </form>
        @endauth
    </x-layout.single>
</x-layout>