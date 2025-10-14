@props(['href' => '#'])

<li
    class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:content-['/'] before:text-gray-900">
    <a class="inline-flex gap-x-2 text-black hover:text-orange-400 focus:outline-hidden focus:text-gray-600"
        href="{{ $href ?? '#' }}">
        {{ $slot }}
    </a>
</li>