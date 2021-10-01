@if ($paginator->hasPages())

    <div class="pagination-bl">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            <li class="page-item prev">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                   aria-label="@lang('pagination.previous')">
                    <span class="tx">Предыдущая</span>
                    <span class="arrow">
                            <img src="{{ asset('assets/images/svg/arrow2.svg') }}" alt="">
                        </span>
                </a>
            </li>

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($paginator->currentPage() > 4 && $page === 2)
                            <li class="page-item" aria-disabled="true"><span class="page-link">...</span></li>
                        @endif

                        @if ($page == $paginator->currentPage())
                            <li class="page-item active"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @elseif ($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() + 2 || $page === $paginator->currentPage() - 1 || $page === $paginator->currentPage() - 2 || $page === $paginator->lastPage() || $page === 1)
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif

                        @if ($paginator->currentPage() < $paginator->lastPage() - 3 && $page === $paginator->lastPage() - 1)
                            <li class="page-item"><span class="page-link">...</span></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            <li class="page-item next">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"
                   aria-label="@lang('pagination.next')">
                    <span class="tx">следующая</span>
                    <span class="arrow">
                        <img src="{{ asset('assets/images/svg/arrow2.svg') }}" alt="">
                    </span>
                </a>
            </li>
        </ul>
    </div>
@endif
