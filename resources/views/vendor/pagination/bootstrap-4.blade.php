@if ($paginator->hasPages())
    <div class="ft-pagination-item  ul-li">
        {{-- <div class="col-lg-12">
            <div class="ltn__pagination-area text-center">
                <div class="ltn__pagination"> --}}
        <ul>
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li><a href=""><i class="fas fa-angle-double-left"></i></a></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}"><i class="fas fa-angle-double-left"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li><a href="#">{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <li class="{{ $paginator->currentPage() == $page ? 'active' : '' }}"><a
                                href="{{ $url }}">{{ $page }}</a></li>
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}"><i class="fas fa-angle-double-right"></i></a>
                </li>
            @else
                <li><a href=""><i class="fas fa-angle-double-right"></i></a></li>
            @endif
        </ul>
        {{-- </div>
            </div>
        </div> --}}
    </div>

@endif
