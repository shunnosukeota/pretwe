@auth
@error('present')
    <x-alert.error>{{ $message }}</x-alert.error>
@enderror

@error('detail')
    <x-alert.error>{{ $message }}</x-alert.error>
@enderror
<details class="tweets-option relative text-gray-500 bg-white">
    <summary class="py-2 px-4 border border-gray shadow-sm font-bold rounded-md hover:bg-gray-50">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-5 absolute right-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 inline-flex mb-1">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
        </svg>
        <p class="inline-flex">投稿する</p>
    </summary>
    <div class="post p-4 shadow-sm rounded-md border border-gray">
    <form action="{{ route('tweet.create') }}" method="post"
    enctype="multipart/form-data">
        @csrf
        <div class="mt-3">
            <div class="inline-flex text-md text-gray-600 font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3.75v16.5M2.25 12h19.5M6.375 17.25a4.875 4.875 0 004.875-4.875V12m6.375 5.25a4.875 4.875 0 01-4.875-4.875V12m-9 8.25h16.5a1.5 1.5 0 001.5-1.5V5.25a1.5 1.5 0 00-1.5-1.5H3.75a1.5 1.5 0 00-1.5 1.5v13.5a1.5 1.5 0 001.5 1.5zm12.621-9.44c-1.409 1.41-4.242 1.061-4.242 1.061s-.349-2.833 1.06-4.242a2.25 2.25 0 013.182 3.182zM10.773 7.63c1.409 1.409 1.06 4.242 1.06 4.242S9 12.22 7.592 10.811a2.25 2.25 0 113.182-3.182z" />
                </svg>
                <p class="ml-1">おくりもの ⇆ もらいもの<span class="text-gray-600 font-bold">（必須）</span></p>
            </div>
            <select name="gift"
                    class="w-full text-center focus:ring-yellow-400 focus:border-yellow-400 mt-1 block sm:text-sm border border-gray-300 rounded-md text-gray-500 font-bold text-center">
                <option value="おくりもの">おくりもの</option>
                <option value="もらいもの">もらいもの</option>
            </select>
        </div>
        <div class="mt-3">
            <div class="inline-flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                </svg>
                <p class="ml-1 text-gray-600 font-bold">プレゼント(必須)</p>
            </div>
            <textarea
                name="present"
                class="focus:ring-yellow-400 focus:border-yellow-400 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md p-2"
                placeholder="プレゼントを入力"></textarea>
        </div>

        <x-element.select></x-element.select>
        
        <div class="mt-3">
            <div class="inline-flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                </svg>
                <p class="ml-1">説明（任意）</p>
            </div>
                <textarea
                name="detail"
                rows="3"
                class="focus:ring-yellow-400 focus:border-yellow-400 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md p-2"
                placeholder="説明を入力"></textarea>
        </div>
        <p class="mt-2 text-sm text-gray-500">
            140文字まで
        </p>
        <x-tweet.form.images></x-tweet.form.images>

        <div class="flex flex-wrap justify-end">
            <x-element.button>
                投稿
            </x-element.button>
        </div>
    </form>
    </div>
</details>
@endauth
@guest
<div class="flex flex-wrap justify-center">
    <div class="w-1/2 p-4 flex flex-wrap justify-evenly">
        <x-element.button-a :href="route('login')">ログイン</x-element.button-a>
        <x-element.button-a :href="route('register')" theme="secondary">ユーザー登録</x-element.button-a>
    </div>
</div>
@endguest
@once
@push('css')
    <style>
        .tweets-option > summary {
            display: list-item;
            list-style: none;
            cursor: pointer;
        }
        
        .tweets-option[open] > summary {
            border-bottom: none;
            border-bottom-left-radius: 0%;
            border-bottom-right-radius: 0%;
            box-shadow:none;
        }
        .tweets-option[open] > .post {
            border-top: none;
            border-top-left-radius: 0%;
            border-top-right-radius: 0%;
        }
    </style>
@endpush
@endonce