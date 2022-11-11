@props([
    'rate' => " "
])
<span class="tweet-rate" ></span>

@once
@push('css')
    <style>
        :root{
            --rate: {{ $rate }};
        }
        .tweet-rate{
            font-size: 16px;
            position: relative;
        }
        .tweet-rate::before{
            content: "★★★★★";
            color: #e1e1e1;
            top: 0;
            left: 0;
            }
        .tweet-rate::after{
            content: "★★★★★";
            position: absolute;
            left: 0;
            color: #ffcc00;
            overflow: hidden;
            width: calc(var(--rate) * 20%);
        }
    </style>
@endpush
@endonce
