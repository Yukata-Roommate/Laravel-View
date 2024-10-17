<x-yukata-rm::layout.master :body-class="$bodyClass">
    <x-form.template method="post" :action="$action">
        <div class="login-box" style="width: 360px;">
            <div class="card">
                <div class="card-header bg-info">
                    <h1 class="mb-0 text-center text-light">
                        {{ $cardTitle }}
                    </h1>
                </div>

                <div class="card-body login-card-body">
                    <x-form.errors />

                    {{ $slot }}
                </div>

                <div class="card-footer login-card-footer">
                    {{ $footer }}
                </div>
            </div>
        </div>
    </x-form.template>
</x-yukata-rm::layout.master>
