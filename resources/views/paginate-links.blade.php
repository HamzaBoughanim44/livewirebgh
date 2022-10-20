<div>
   @if ($paginator->hasPages())
     <ul>
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><a href="javascript:;" wire:click="previousPage" class="page-link">Prev</a></li>
        @else
        <li class="page-item"><a href="javascript:;" wire:click="previousPage" rel="prev" class="page-link">Prev</a></li>
        @endif

        {{-- Pagination Element Here --}}
        @foreach ($elements as $element)
            {{-- Make dots here --}}
            @if (is_string($element))
            <li><a href="#"><a><span>{{ $element }}</span></a></li>
            @endif

            {{-- Links array Here --}}
            @if (is_array($element))
                @foreach ($element as $page=>$url)
                    @if ($page == $paginator->currentPage())
                        <li aria-current="page"><a href="javascript:;" wire:click="gotoPage({{$page}})"><span>{{ $page }}</span></a></li>
                    @else
                    <li><a href="javascript:;" wire:click="gotoPage({{$page}})">{{$page}}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="javascript:;" wire:click="nextPage">Next</a></li>
        @else
          <li><a href="javascript:;">Next</a></li>
        @endif
    </ul>
@endif
</div>
