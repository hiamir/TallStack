@props(['href'])
<a {{ $attributes->merge(['class' => 'w-full btn btn-sm text-gray-800 active:text-blue-900 hover:text-blue-900 sm:w-auto'])->merge(['href' => $href]) }} >
    {{ $slot }}
</a>
