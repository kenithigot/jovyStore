@props(['src'])

<div>
    <img src="{{ $src }}" {{ $attributes->merge([
    'class' => 'py-3 lg:p-2 w-12 h-auto md:w-20 lg:w-28 mx-auto sm:mx-0
    drop-shadow-2xl drop-shadow-slate-500/50'
]) }}>
</div>