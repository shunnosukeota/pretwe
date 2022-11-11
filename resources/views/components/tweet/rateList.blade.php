@props([
    'ratings' => []
])

<h4 class="text-center mt-3 ml-3 font-bold text-gray-500">
    〜みんなの評価〜
</h4>
<div class="bg-white relative rounded-md shadow-lg mt-2 mb-5">
    <ul>
        @foreach($ratings as $rating)
        <div class=" border-b last:border-b-0 border-gray-200 pt-2 px-4 flex">
            <div>
                <div class="absolute right-2 pt-1 text-xs text-gray-400">
                    {{ $rating->created_at }}
                </div>
                <div class="px-1">
                    @for($i = 1; $i <= $rating->raterRate; $i++)
                        <div class="inline-flex text-yellow-400">★</div>
                    @endfor
                    <div class="inline-flex">            
                        <span class="inline-block ml-2 rounded-full text-gray-600 bg-gray-100 px-2 py-1 text-xs">
                            {{ $rating->raterSex }}
                        </span>
                        <span class="inline-block ml-2 rounded-full text-gray-600 bg-gray-100 px-2 py-1 text-xs">
                            {{ $rating->raterAge }}歳
                        </span>
                    </div>
                </div>
                <p class="px-2 py-1 text-gray-600 text-xs">{!! nl2br(e($rating->comment)) !!}</p>
            </div>
        </div>
        @endforeach
    </ul>
</div>