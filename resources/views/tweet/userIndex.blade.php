<x-layout title="{{ $userName }} | プレツイ">
    <x-layout.single>
        <div class="px-2 pt-20">
            
            @php
                $breadcrumbs = [
                    ['href' => route('tweet.index'), 'label' => 'TOP'],
                    ['href' => '#', 'label' => " $userName "]
                ];
            @endphp
            <x-element.breadcrumbs :breadcrumbs="$breadcrumbs"></x-element.breadcrumbs>
            <x-tweet.usercontent :tweets="$tweets" :userName="$userName"></x-tweet.usercontent>
        </div>
        @auth
        <form method="post" action="{{ route('logout') }}" class="float-right pt-4">
            @csrf
            <div class="justify-end px-4">
                <button
                        class="text-sm text-gray-600 hover:text-gray-400"
                        onclick="event.preventDefault(); this.closest('form').submit();"
                >ログアウト</button>
            </div>
        </form>
        @endauth
    </x-layout.single>
</x-layout>