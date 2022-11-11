@props([
    'ratings' => []
])

@error('ratedata')
    <x-alert.error>{{ $message }}</x-alert.error>
@enderror
@error('raterSEX')
    <x-alert.error>{{ $message }}</x-alert.error>
@enderror
@error('raterAge')
    <x-alert.error>{{ $message }}</x-alert.error>
@enderror
@error('comment')
    <x-alert.error>{{ $message }}</x-alert.error>
@enderror

@auth
    @if($otherTweet)
        <details class="rating-option relative text-gray-500 bg-white">
            <summary class="py-2 px-4 border border-gray shadow-sm font-bold rounded-md hover:bg-gray-50">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-5 absolute right-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 inline-flex mb-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                </svg>
                <p class="inline-flex">評価する</p>
            </summary>
            <div class="post p-4 shadow-sm rounded-md border border-gray">
                <form action="{{ route('tweet.rating.put', ['tweetId' => $tweetId]) }}" method="post" >
                    @method('PUT')
                    @csrf
                    <div class="relative text-gray-500">
                            <div class="rate-form flex items-center pt-1 pb-1">
                                <input id="star5" type="radio" name="ratedata" value="5">
                                <label for="star5">★</label>
                                <input id="star4" type="radio" name="ratedata" value="4">
                                <label for="star4">★</label>
                                <input id="star3" type="radio" name="ratedata" value="3">
                                <label for="star3">★</label>
                                <input id="star2" type="radio" name="ratedata" value="2">
                                <label for="star2">★</label>
                                <input id="star1" type="radio" name="ratedata" value="1">
                                <label for="star1">★</label>
                            </div>
                            <div class="mt-3">
                                <div class="inline-flex text-md text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg>
                                        <p class="ml-1">あなたの性別<span class="text-gray-600 font-bold">（必須）</span></p>
                                </div>
                                <select name="raterSex"
                                        class="w-full text-center focus:ring-yellow-400 focus:border-yellow-400 mt-1 block sm:text-sm border border-gray-300 rounded-md text-gray-500 text-center">
                                    <option value="女性">女性</option>
                                    <option value="男性">男性</option>
                                </select>
                            </div>
                            <div class="mt-3">
                                <div class="inline-flex text-md text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                                    </svg>
                                    <p class="ml-1">あなたの年齢<span class="text-gray-600 font-bold">（必須）</span></p>
                                </div>
                                <input type="number" name="raterAge" min="0"
                                        class="w-full text-center focus:ring-yellow-400 focus:border-yellow-400 mt-1 block sm:text-sm border border-gray-300 rounded-md text-gray-500"
                                        placeholder="あなたの年齢を入力">
                            </div>
                            <div class="mt-3">
                                <div class="inline-flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                    </svg>
                                        <p class="ml-1">コメント（任意）</p>
                                </div>
                                    <textarea
                                    name="comment"
                                    rows="3"
                                    class="focus:ring-yellow-400 focus:border-yellow-400 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md p-2"
                                    placeholder="コメントを入力"></textarea>
                            </div>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">
                        140文字まで
                    </p>
                    <div class="flex flex-wrap justify-end">
                        <x-element.button>
                            評価する
                        </x-element.button>
                    </div>
                </form>
            </div>
        </details>
    @endif
@endauth

@once
@push('css')
    <style>
        .rating-option > summary {
            display: list-item;
            list-style: none;
            cursor: pointer;
        }
        .rating-option[open] > summary::before {
            
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 10;
            display: block;
            content: "";
            background: transparent;
        }
        .rating-option[open] > summary {
            border-bottom: none;
            border-bottom-left-radius: 0%;
            border-bottom-right-radius: 0%;
            box-shadow:none;
        }
        .rating-option[open] > .post {
            border-top: none;
            border-top-left-radius: 0%;
            border-top-right-radius: 0%;
        }

        .rate-form {
        display: flex;
        flex-direction: row-reverse;
        justify-content: flex-end;
        
        }
        .rate-form input {
        display: none;
        }
        .rate-form label {
        position: relative;
        color: #e1e1e1;
        cursor: pointer;
        font-size: 24px;
        }
        .rate-form label:hover {
        color: #ffcc00;
        }
        .rate-form label:hover ~ label {
        color: #ffcc00;
        }
        .rate-form input[type=radio]:checked ~ label {
        color: #ffcc00;
        }

    </style>
@endpush
@endonce
