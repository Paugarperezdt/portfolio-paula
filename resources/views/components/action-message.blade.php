@props(['on' => null, 'class' => ''])
<span {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</span>
