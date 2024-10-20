<div class="row mb-3">
    <div class="col-12">
        <div {{ $attributes->merge($merge) }}>
            <div class="card-header">
                @isset($cardTitle)
                    <p class="card-title h2 m-0">
                        {{ $cardTitle }}
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
