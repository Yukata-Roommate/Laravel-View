<div {{ $attributes->merge($merge) }}>
    <p class="h4">
        {{ $title }}
    </p>

    <p class="d-flex flex-wrap m-0">
        {{ $slot }}
    </p>
</div>
