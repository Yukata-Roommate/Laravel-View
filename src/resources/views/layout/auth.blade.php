<x-yukata-rm::layout.master class="login-page bg-body-secondary app-loaded">
    <x-yukata-rm::form method="post" :action="$action">
        <div {{ $attributes->merge($merge) }}>
            <div class="card">
                <div class="card-header bg-info">
                    <h1 class="mb-0 text-center text-light">
                        {{ $cardTitle }}
                    </h1>
                </div>

                <div class="card-body login-card-body">
                    <x-yukata-rm::form.errors />

                    {{ $slot }}
                </div>

                <div class="card-footer login-card-footer">
                    {{ $footer }}
                </div>
            </div>
        </div>
    </x-yukata-rm::form>
</x-yukata-rm::layout.master>
