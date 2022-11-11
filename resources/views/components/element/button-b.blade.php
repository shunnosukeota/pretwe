@props([
    'href' => '',
    'theme' => 'primary',
])
@php
    if(!function_exists('getThemeClassForButtonA')){
      function getThemeClassForButtonA($theme) {
          return match ($theme) {
              'primary' => 'text-gray-600 float-right p-4 justify-end hover:bg-gray-200',
              'secondary' => 'text-gray-600 float-right p-4 justify-end hover:bg-gray-200',
              default => '',
          };
        }
    }
@endphp
<a href="{{ $href }}" class="">
    {{ $slot }}
</a>
