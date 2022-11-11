@props([
    'tweet'
])

<div class="text-center">
    <div class="inline-block text-center">
    <a href="{{ route('tweet.user.index', ['userId' => $tweet->user->id]) }}">
        <span class="text-center hover:bg-gray-200 text-gray-600 text-center rounded-full bg-gray-100 px-2 py-1 text-xl mb-2">
            <span class="border-b border-gray-400">
            {{$tweet->user->name}}
            </span>
        </span>
    </a>
    </div>
</div>

@if($tweet->gift == 'おくりもの')
<div class="bg-white relative rounded-md shadow-lg mt-5 mb-5 border-b border-b-yellow-600">
@else
<div class="bg-white relative rounded-md shadow-lg mt-5 mb-5 border-b border-b-yellow-300">
@endif
    <ul>
        
        <div class="absolute right-1 py-2">
                <x-tweet.options :tweetId="$tweet->id" :userId="$tweet->user_id"></x-tweet.options>
            </div>
        <div class="border-b last:border-b-0 border-gray-200 p-4 flex">
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
                <x-tweet.rating :userId="$tweet->user_id" :rate="$tweet->rate"></x-tweet.rating>
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
                <x-tweet.images :images="$tweet->images" :im="0"/>
                
                <p class="px-2 py-1 text-gray-600 text-xs">{!! nl2br(e($tweet->detail)) !!}</p>
            </div>
        </div>
    </ul>
</div>
@if (session('feedback.success'))
    <x-alert.success>{{ session('feedback.success') }}</x-alert.success>
@endif
@if (session('feedback.error'))
    <x-alert.error>{{ session('feedback.error') }}</x-alert.error>
@endif

@once
@push('css')

<style>
    footer{
        position:fixed;
        left: 0;
        bottom: 0;
        width: 100%;
    }
</style>

@endpush
@endonce