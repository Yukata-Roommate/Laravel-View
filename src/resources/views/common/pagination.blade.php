<nav class="d-flex justify-items-center justify-content-between align-items-center">
    <ul class="pagination mb-0">
        @if ($data->onFirstPage())
            <li class="page-item disabled" aria-disabled="true" aria-label="Previous">
                <span class="page-link" aria-hidden="true">
                    &lsaquo;
                </span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $data->previousPageUrl() }}" rel="prev" aria-label="Previous">
                    &lsaquo;
                </a>
            </li>
        @endif

        @foreach ($data->linkCollection() as $link)
            @continue($loop->first || $loop->last)

            <li class="page-item {{ $link['active'] ? 'active' : '' }}">
                @if ($link['url'])
                    <a class="page-link" href="{{ $link['url'] }}">{{ $link['label'] }}</a>
                @else
                    <a class="page-link">{{ $link['label'] }}</a>
                @endif
            </li>
        @endforeach

        @if ($data->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $data->nextPageUrl() }}" rel="next" aria-label="Next">
                    &rsaquo;
                </a>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true" aria-label="Next">
                <span class="page-link" aria-hidden="true">
                    &rsaquo;
                </span>
            </li>
        @endif
    </ul>

    <div class="d-none d-sm-block">
        <p class="small text-muted">
            <span class="fw-semibold">{{ $data->firstItem() }}</span>
            -
            <span class="fw-semibold">{{ $data->lastItem() }}</span>
            of
            <span class="fw-semibold">{{ $data->total() }}</span>
        </p>
    </div>
</nav>
