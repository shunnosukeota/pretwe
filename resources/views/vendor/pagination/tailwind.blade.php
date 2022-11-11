@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
        <div class="flex">
            @if ($paginator->onFirstPage())
                <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                    <<
                </span>
            @else
            <a href="{{ $paginator->url(1) }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-600 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-400  hover:bg-gray-50 focus:outline-none focus:ring ring-gray-300 focus:border-gray-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                <<
            </a>
            @endif
        </div>
        <div class="flex justify-between">
            @if ($paginator->onFirstPage())
                <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                    <
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-600 bg-white border border-gray-300 leading-5 rounded-md  hover:bg-gray-50 hover:text-gray-400 focus:outline-none focus:ring ring-gray-300 focus:border-gray-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    <
                </a>
            @endif
        </div>
            <div class="inline-flex">
                <p class="text-md text-gray-500 font-bold">
                    @if ($paginator->firstItem())
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        -
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    /
                    <span class="font-medium">{{ $paginator->total() }}</span>
                </p>
            </div>
        <div>
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="relative  hover:bg-gray-50 inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-600 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-gray-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    >
                </a>
            @else
                <span class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-800 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                    >
                </span>
            @endif
        </div>
        <div class="flex justify-between">
            @if ($paginator->hasMorePages())
            <a href="{{ $paginator->url($paginator->lastPage()) }}" class=" hover:bg-gray-50 relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-600 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-gray-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                >>
            </a>
            @else
                <span class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-800 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                    >>
                </span>
            @endif
        </div>
    </nav>
@endif
