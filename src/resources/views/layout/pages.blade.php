<x-yukata-rm::layout.master :title="$pageTitle" class="layout-fixed sidebar-expand-lg bg-body-tertiary app-loaded">
    <div {{ $attributes->merge($merge) }}>
        <x-yukata-rm::layout.pages.header>
            {{ $header }}
        </x-yukata-rm::layout.pages.header>

        <x-yukata-rm::layout.pages.sidebar>
            {{ $sidebar }}
        </x-yukata-rm::layout.pages.sidebar>

        <main class="app-main">
            <div class="app-content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="mb-0">
                                {{ $pageTitle }}
                            </h1>
                        </div>

                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                {{ $breadcrumb }}
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="app-content">
                <div class="container-fluid">
                    <x-yukata-rm::layout.pages.alerts />

                    {{ $slot }}
                </div>
            </div>
        </main>

        <x-yukata-rm::layout.pages.footer>
            {{ $footer }}
        </x-yukata-rm::layout.pages.footer>
    </div>

    <x-yukata-rm::layout.pages.modal-area>
        {{ $modal }}
    </x-yukata-rm::layout.pages.modal-area>
</x-yukata-rm::layout.master>
