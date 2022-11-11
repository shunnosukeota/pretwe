@props([
    'tweets' => [],
    'countTweets',
    'keyword' => "",
    'keyword_g',
    'keyword_r',
    'keyword_a',
    'keyword_s'
])
<a id="search" class="anchor"></a>
<div class="text-gray-500 bg-white mt-4 mb-6 py-2 px-4 border border-gray shadow-sm rounded-md">
    
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 inline-flex mb-1">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>
        <p class="font-bold inline-flex">検索する</p>
            

    <x-element.search></x-element.search>
</div>

@forelse ($tweets as $tweet)
    @if(!($keyword == " "))
        @once
        <div class="py-2 text-center text-gray-500 font-bold">
            検索結果：{{ $countTweets }}件
        </div>
            @if(!($keyword_g == "未選択" && $keyword_r == "未選択" && empty($keyword_a) && $keyword_a != 0 && $keyword_s == "未選択" && empty($keyword)))
                <div class="bg-white rounded-md shadow-lg text-sm my-5">
                    <div class="px-4 pt-4 pb-3">
                        @if(!($keyword_g == "未選択"))
                        <div class="inline-flex mb-1 mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -2 24 23" stroke-width="0.5" stroke="currentColor" class="w-4 h-4 inline-flex">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3.75v16.5M2.25 12h19.5M6.375 17.25a4.875 4.875 0 004.875-4.875V12m6.375 5.25a4.875 4.875 0 01-4.875-4.875V12m-9 8.25h16.5a1.5 1.5 0 001.5-1.5V5.25a1.5 1.5 0 00-1.5-1.5H3.75a1.5 1.5 0 00-1.5 1.5v13.5a1.5 1.5 0 001.5 1.5zm12.621-9.44c-1.409 1.41-4.242 1.061-4.242 1.061s-.349-2.833 1.06-4.242a2.25 2.25 0 013.182 3.182zM10.773 7.63c1.409 1.409 1.06 4.242 1.06 4.242S9 12.22 7.592 10.811a2.25 2.25 0 113.182-3.182z" />
                            </svg>
                            <div class="inline-flex text-gray-500">：<span class="font-bold">{{ $keyword_g }}</span></div>
                        </div>
                        @endif
                        @if(!($keyword_r == "未選択"))
                        <div class="inline-flex mb-1 mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -1 24 23" stroke-width="1" stroke="currentColor" class="w-4 h-4 inline-flex">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                            <div class="inline-flex ml-1 text-gray-500">お相手：<span class="font-bold">{{$keyword_r}}</span></div>
                        </div>
                        @endif
                        @if(!(empty($keyword_a)) || $keyword_a ==0)
                        <div class="inline-flex mb-1 mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -3 24 24" stroke-width="1" stroke="currentColor" class="w-4 h-4 inline-flex">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                            </svg>
                            <span class="inline-flex ml-1 text-gray-500">お相手の年齢：<span class="font-bold">{{$keyword_a}}歳</span></span>
                        </div>
                        @endif
                        @if(!($keyword_s == "未選択"))
                        <div class="inline-flex mb-1 mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"     viewBox="0 -2 24 24" stroke-width="1" stroke="currentColor" class="w-4 h-4 inline-flex">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>      
                            <div class="inline-flex ml-1 text-gray-500">シチュエーション：<span class="font-bold">{{$keyword_s}}</span></div>
                        </div>
                        @endif
                        @if(!empty($keyword))
                        <div class="inline-flex mb-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -2 24 24" stroke-width="1" stroke="currentColor" class="w-4 h-4 inline-flex">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                            </svg>
                            <div class="inline-flex ml-1 text-gray-500">キーワード：<span class="font-bold">{{$keyword}}</span></div>
                        </div>
                        @endif
                    </div>
                </div>
            @endif
        @endonce
    @endif
@empty
<div class="mt-10 text-center text-gray-500 font-bold">一致する検索結果はありません</div>
<div class="bg-white rounded-md shadow-lg text-sm mt-5 mb-10">
    <div class="px-4 pt-4 pb-3">
        @if(!($keyword_g == "未選択"))
        <div class="inline-flex mb-1 mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -2 24 23" stroke-width="0.5" stroke="currentColor" class="w-4 h-4 inline-flex">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3.75v16.5M2.25 12h19.5M6.375 17.25a4.875 4.875 0 004.875-4.875V12m6.375 5.25a4.875 4.875 0 01-4.875-4.875V12m-9 8.25h16.5a1.5 1.5 0 001.5-1.5V5.25a1.5 1.5 0 00-1.5-1.5H3.75a1.5 1.5 0 00-1.5 1.5v13.5a1.5 1.5 0 001.5 1.5zm12.621-9.44c-1.409 1.41-4.242 1.061-4.242 1.061s-.349-2.833 1.06-4.242a2.25 2.25 0 013.182 3.182zM10.773 7.63c1.409 1.409 1.06 4.242 1.06 4.242S9 12.22 7.592 10.811a2.25 2.25 0 113.182-3.182z" />
            </svg>
            <div class="inline-flex text-gray-500">：<span class="font-bold">{{$keyword_g}}</span></div>
        </div>
        @endif
        @if(!($keyword_r == "未選択"))
        <div class="inline-flex mb-1 mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -1 24 23" stroke-width="1" stroke="currentColor" class="w-4 h-4 inline-flex">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>
            <div class="inline-flex ml-1 text-gray-500">お相手：<span class="font-bold">{{$keyword_r}}</span></div>
        </div>
        @endif
        @if(!empty($keyword_a))
        <div class="inline-flex mb-1 mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -3 24 24" stroke-width="1" stroke="currentColor" class="w-4 h-4 inline-flex">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
            </svg>
            <span class="inline-flex ml-1 text-gray-500">お相手の年齢：<span class="font-bold">{{$keyword_a}}歳</span></span>
        </div>
        @endif
        @if(!($keyword_s == "未選択"))
        <div class="inline-flex mb-1 mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none"     viewBox="0 -2 24 24" stroke-width="1" stroke="currentColor" class="w-4 h-4 inline-flex">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>      
            <div class="inline-flex ml-1 text-gray-500">シチュエーション：<span class="font-bold">{{$keyword_s}}</span></div>
        </div>
        @endif
        @if(!empty($keyword))
        <div class="inline-flex mb-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -2 24 24" stroke-width="1" stroke="currentColor" class="w-4 h-4 inline-flex">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
            </svg>
            <div class="inline-flex ml-1 text-gray-500">キーワード：<span class="font-bold">{{$keyword}}</span></div>
        </div>
        @endif
    </div>
</div>
@endforelse


<div class="">{{ $tweets->links() }}</div>


@foreach($tweets as $tweet)
    <div class="bg-white relative rounded-md shadow-lg mt-5 mb-5 last:mb-30">
        <ul>
            <div class="absolute right-1 py-2">
                    <x-tweet.options :tweetId="$tweet->id" :userId="$tweet->user_id"></x-tweet.options>
            </div>
            @if($tweet->gift == 'おくりもの')
            <a href="{{ route('tweet.content.index', ['tweetId' => $tweet->id]) }}" class="rounded-md mt-3 border-b border-b-yellow-600 p-4 flex items-start hover:bg-gray-50">
            @else
            <a href="{{ route('tweet.content.index', ['tweetId' => $tweet->id]) }}" class="rounded-md mt-3 border-b border-b-yellow-300 p-4 flex items-start hover:bg-gray-50">
            @endif
                <div>
                    <span class="inline-block rounded-full text-gray-600 bg-gray-100 px-2 py-1 text-xs mb-2">
                        {{ $tweet->user->name }}
                    </span>

                    <span class="ml-2">
                        @if($tweet->gift == 'おくりもの')
                        <span class="border border-yellow-600 inline-block rounded-full font-bold text-gray-500 px-2 py-1 text-xs mb-2">
                            {{ $tweet->gift }}
                        </span>
                        @else
                        <span class="border border-yellow-300 inline-block rounded-full font-bold text-gray-500 px-2 py-1 text-xs mb-2">
                            {{ $tweet->gift }}
                        </span>
                        @endif
                    </span>

                    <div class="px-1">
                        @if($tweet->rate == 0)
                            <div class="inline-flex text-gray-300">★</div>
                        @endif
                        @for($i = 1; $i <= $tweet->rate; $i++)
                            <div class="inline-flex text-yellow-400">★</div>
                        @endfor
                        <div class="inline-flex text-sm text-gray-500">{{ round($tweet->rate,1) }}</div>
                    </div>
                    <div>
                        @if($tweet->gift == 'おくりもの')
                        <div class="inline-flex py-1 ml-1 mb-2 text-gray-600 border-b border-yellow-600">
                        @else
                        <div class="inline-flex py-1 ml-1 mb-2 text-gray-600 border-b border-yellow-300">
                        @endif
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                            </svg><p class="ml-1">{!! $tweet->present !!}</p>
                        </div>
                        <div class="flex">
                            @if($tweet->relation != '未選択')
                                <div class="flex px-1 py-1 text-s mb-2 mr-2 text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                    </svg><p class="ml-1">{!! $tweet->relation !!}</p>
                                </div>
                            @endif
                            @if ($tweet->age >= 0)
                                <div class="flex px-1 py-1 text-s mb-2 mr-2 text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                                    </svg><p class="ml-1">{!! $tweet->age !!}歳</p>
                                </div>
                            @endif
                            @if($tweet->situation != '未選択')
                                <div class="flex px-1 py-1 text-s mb-2 text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg><p class="ml-1">{!! $tweet->situation !!}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    
                    <x-tweet.images :images="$tweet->images" :im="1"/>
                    
                    <p class="flex px-2 py-1 text-gray-600 text-xs">{!! nl2br(e($tweet->detail)) !!}</p>
                </div>
            </a>
        </ul>
    </div>
@endforeach


<div class="">{{ $tweets->links() }}</div>


@once
@push('css')

<style>
    footer{
        position:fixed;
        left: 0;
        bottom: 0;
        width: 100%;
    }
    a.anchor{
        display: block;
        padding-top: 70px;
        margin-top: -70px;
    }
</style>

@endpush
@endonce