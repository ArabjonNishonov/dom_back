@props([
    'type' => 'text',
])

<input type="{{ $type }}"
    {{ $attributes->merge([
        'class' => 'rounded-md border border-[#DDE2E4] px-3 py-2 text-sm placeholder-gray-500',
    ]) }} />
