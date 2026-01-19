@props(['route'])

@php
    $active = request()->routeIs($route);
@endphp

<a
    href="{{ route($route) }}"
    @if($active) aria-current="page" @endif
    class="
        relative px-3 py-2 text-sm font-medium transition-colors
        after:absolute after:bottom-0 after:left-0 after:h-[1px]
        after:bg-primary after:transition-all
        {{ $active
            ? 'after:w-full text-primary'
            : 'after:w-0 hover:after:w-full hover:text-primary/80'
        }}
    "
>
    {{ $slot }}
</a>
