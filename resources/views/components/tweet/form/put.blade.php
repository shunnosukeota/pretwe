@props([
    'tweet'
])
<div class="p-4">
    <form action="{{ route('tweet.update.put', ['tweetId' => $tweet->id]) }}" method="post">
        @method('PUT')
        @csrf
        @if (session('feedback.success'))
        <x-alert.success>{{ session('feedback.success') }}</x-alert.success>
        @endif
        <div class="mt-1">
            <textarea
                name="detail"
                rows="3"
                class="focus:ring-yellow-400 focus:border-yellow-400 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md p-2"
                placeholder="説明を入力">{{ $tweet->detail }}</textarea>
        </div>
        <p class="mt-2 text-sm text-gray-500">
            140文字まで
        </p>

        @error('tweet')
        <x-alert.error>{{ $message }}</x-alert.error>
        @enderror

        <div class="flex flex-wrap justify-end">
            <x-element.button>
                編集
            </x-element.button>
        </div>
    </form>
</div>

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