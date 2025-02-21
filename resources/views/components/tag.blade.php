@props(['tag', 'size' => 'base'])




@php
    $classes = 'bg-white/10 hover:bg-white/25 transition-all duration-150  rounded ';
    if ($size === 'base') {
        $classes .= ' px-5 py-1 text-sm';
    }

    if ($size === 'small') {
        $classes .= ' px-3 py-1 text-xs';
    }
@endphp
<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>
