
<div>
    <div {{ $attributes->merge(['class' => 'group h-full flex flex-col drop-shadow-lg drop-shadow-blue-400 bg-gradient-to-l from-orange-500 via-orange-300 to-orange-400 border-gray-200 shadow-2xs rounded-xl hover:shadow-md focus:outline-hidden focus:shadow-md transition']) }}>
        {{ $slot }}
    </div>
</div>