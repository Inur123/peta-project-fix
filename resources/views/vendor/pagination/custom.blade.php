@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-center space-x-2 mt-4">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="px-4 py-2 text-gray-400 bg-gray-200 rounded-lg cursor-not-allowed">
                &laquo; Previous
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="px-4 py-2 text-white bg-red-600 hover:bg-red-700 rounded-lg transition-all">
                &laquo; Previous
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <span class="px-4 py-2 text-gray-500">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="px-4 py-2 text-white bg-red-600 rounded-lg shadow-md">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="px-4 py-2 text-red-600 bg-white border border-red-600 hover:bg-red-500 hover:text-white rounded-lg transition-all">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="px-4 py-2 text-white bg-red-600 hover:bg-red-700 rounded-lg transition-all">
                Next &raquo;
            </a>
        @else
            <span class="px-4 py-2 text-gray-400 bg-gray-200 rounded-lg cursor-not-allowed">
                Next &raquo;
            </span>
        @endif
    </nav>
@endif
