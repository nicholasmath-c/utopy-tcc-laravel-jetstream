@props(['value'])

<link rel="stylesheet" href="{{asset("style.css")}}">

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-200']) }}>
    {{ $value ?? $slot }}
</label>