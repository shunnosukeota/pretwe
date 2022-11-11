@props([
    'href' => '',
    'theme' => 'primary',
])
@php
    if(!function_exists('getThemeClassForButtonA')){
      function getThemeClassForButtonA($theme) {
          return match ($theme) {
              'primary' => 'text-white shadow-sm opacity-60 bg-gray-500  hover:bg-gray-600 focus:ring-gray-500',
              'secondary' => 'text-white shadow-sm bg-yellow-500 opacity-90 hover:bg-yellow-600 focus:ring-yellow-500',
              default => '',
          };
        }
    }
@endphp
<a href="{{ $href }}" class="
    mb-3
    inline-flex justify-center
    py-2 px-4
    border border-transparent
    shadow-sm
    text-sm
    font-medium
    rounded-md
    focus:outline-none focus:ring-2 focus:ring-offset-2 {{ getThemeClassForButtonA($theme) }}">
    {{ $slot }}
</a>
