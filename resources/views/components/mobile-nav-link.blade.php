@props(['route'])

@php
    $active = request()->routeIs($route);
@endphp

<a
    href="{{ route($route) }}"
    @if($active) aria-current="page" @endif
    class="
        relative text-2xl font-serif font-medium transition-all
        after:absolute after:bottom-0 after:left-0 after:h-[2px]
        after:bg-primary after:transition-all
        {{ $active
            ? 'after:w-full text-primary translate-x-2'
            : 'after:w-0 text-gray-800 dark:text-gray-200 hover:after:w-full hover:text-primary hover:translate-x-2'
        }}
    "
>
    {{ $slot }}
</a>
