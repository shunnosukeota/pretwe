<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? 'プレツイ' }}</title>
    @stack('css')
</head>
<body class="bg-gray-50 mb-20">
    <header class="fixed w-full opacity-90 bg-gray-50 border-b border-yellow-500 z-20">
        <a href="{{ route('tweet.index') }}#top"  class="text-yellow-500 text-4xl py-2 pl-3 float-left">
            プレツイ
        </a>
        @auth
        @csrf
        <a href="{{ route('tweet.my.index') }}" class="text-gray-600 float-right p-4 justify-end hover:bg-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
        </a>
        @endauth
    </header>
    {{ $slot }}
    <footer class="footer w-full opacity-90 bg-gray-50 border-t border-yellow-500 z-20">
        @auth
        <a href="{{ route('tweet.index') }}#post" class="text-gray-600 float-right p-4 justify-end hover:bg-gray-200">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 inline-flex mb-1">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
        </svg>
        </a>
        
        <a href="{{ route('tweet.index') }}#search" class="text-gray-600 float-left p-4 justify-end hover:bg-gray-200">
            
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 inline-flex mb-1">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>
            
        </a>
        @endauth
        @guest
        <div class="">
            <div class="text-gray-600 float-right p-4 justify-end hover:bg-gray-200">
                <x-element.button-b :href="route('login')"><span class="border-b border-gray-500">ログイン</span></x-element.button-b>
            </div>
            <div class="text-yellow-600 float-left p-4 justify-end hover:bg-gray-200">
                <x-element.button-b :href="route('register')" theme="secondary"><span class="border-b border-yellow-600">ユーザー登録</span></x-element.button-b>
            </div>
        </div>
        @endguest
    </footer>
</body>
</html>

