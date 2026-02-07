@props(['route'])

@php
    $active = request()->routeIs($route);
@endphp





<a href="{{ route($route) }}" @if ($active) aria-current="page" @endif class="
flex items-center gap-3 px-4 py-3 rounded-lg text-white/70 hover:bg-white/5 hover:text-white transition-all group

{{ $active
    ? 'bg-white/10 text-white shadow-sm border border-white/5'
    : ''
}}

">
    {{ $slot }}
</a>
