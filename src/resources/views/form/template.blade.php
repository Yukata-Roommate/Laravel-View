<form {{ $attributes->merge($merge) }}>
    @csrf

    @if (!$isMethodCompatible)
        @method($method)
    @endif

    {{ $slot }}
</form>
