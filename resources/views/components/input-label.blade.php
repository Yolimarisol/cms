@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium m-auto text-sm text-gray-700 dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</label>
