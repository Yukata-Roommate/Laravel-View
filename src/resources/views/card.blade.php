<div class="row mb-3">
    <div class="col-12">
        <div {{ $attributes->merge($merge) }}>
            <div class="card-header">
                @isset($title)
                    <p class="card-title h2 m-0">
                        {{ $title }}
                    </p>
                @endisset

                @isset($header)
                    {{ $header }}
                @endisset
            </div>

            <div class="card-body">
                {{ $slot }}
            </div>

            @isset($footer)
                <div class="card-footer">
                    {{ $footer }}
                </div>
            @endisset
        </div>
    </div>
</div>
