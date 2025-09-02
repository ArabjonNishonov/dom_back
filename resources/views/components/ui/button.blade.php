@props([
    'type' => 'button',
])

<button type="{{ $type }}"
    {{ $attributes->merge([
        'class' =>
            'px-4 py-2 rounded-md bg-blue-600 text-white text-sm font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1',
    ]) }}>
    {{ $slot }}
</button>
