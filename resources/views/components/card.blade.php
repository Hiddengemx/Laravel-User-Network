@props(["highlight" => false])

<div @class(["highlight" => $highlight , 'card'])>
    {{ $slot }}
    <a href="{{ $attributes->get("link") }}">View details</a>
</div>