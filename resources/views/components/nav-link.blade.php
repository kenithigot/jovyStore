@props(['href' => '#'])
<div>
    <a {{ $attributes->merge(['class' => 'inline-block text-black hover:text-orange-400 hover:border-b-2 hover:border-orange-400 focus:outline-hidden focus:text-gray-600']) }} href="{{ $href }}">{{ $slot }}</a>
</div>