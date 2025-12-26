@if ($paginator->hasPages())
    <nav>
        <ul class="pagination" style="display:flex; justify-content:center; gap:8px; list-style:none; padding:0;">
            
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li><span class="btn btn-export" style="opacity:0.5; cursor:not-allowed;">⟨ Prev</span></li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-export">⟨ Prev</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- Dots --}}
                @if (is_string($element))
                    <li><span class="btn btn-export" style="opacity:0.6; cursor:default;">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><span class="btn btn-add" style="background:#345075; color:white;">{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}" class="btn btn-export">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" class="btn btn-export">Next ⟩</a></li>
            @else
                <li><span class="btn btn-export" style="opacity:0.5; cursor:not-allowed;">Next ⟩</span></li>
            @endif
        </ul>
    </nav>
@endif
