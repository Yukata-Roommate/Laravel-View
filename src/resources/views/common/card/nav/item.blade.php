<li class="nav-item" role="presentation">
    <button id="{{ $id }}" class="{{ $class }}" type="button" aria-controls="{{ $ariaControls }}"
        aria-selected="{{ $ariaSelected }}" data-bs-target="#{{ $ariaControls }}" data-bs-toggle="tab" role="tab">
        {{ $slot }}
    </button>
</li>
