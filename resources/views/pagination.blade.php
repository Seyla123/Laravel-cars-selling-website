@if($paginator->hasPages())
<div class="bg-white  flex justify-center items-center py-2 md:py-4 rounded-lg">
    <nav aria-label="Page navigation example">
        <ul class="flex items-center -space-x-px h-10 text-base">
            <li @class(['hidden' => $paginator->onFirstPage()])>
                <a href="{{$paginator->previousPageUrl()}}" class=" flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 ">
                <span class="sr-only">Previous</span>
                <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                </a>
            </li>
            @foreach ($elements as $element)
                @if(is_string($element))
                    <li>
                        <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">
                            {{$element}}
                        </a>
                    </li>
                @else
                    @foreach ($element as $page=>$url)
                        @if ($page == $paginator->currentPage())
                            <li>
                                <span aria-current="page" class="z-10 flex items-center justify-center px-4 h-10 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 ">
                                    {{$page}}
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{$url}}" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">
                                    {{$page}}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            <li @class(['hidden' => !$paginator->hasMorePages()])>
                <a href="{{$paginator->nextPageUrl()}}" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 ">
                <span class="sr-only">Next</span>
                <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                </a>
            </li>
        </ul>
    </nav>
</div>
@endif
