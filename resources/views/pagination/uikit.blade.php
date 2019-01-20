<!--view/pagination/uikit.blade.php-->
@if ($paginator->lastPage() > 1)
    <div class="pagination">
        <ul class="uk-pagination">
            @if($paginator->productsPaginated->currentPage() != 1)
                <li><a href="{{ $paginator->url(1) }}"
                       class="item{{ ($paginator->currentPage() == 1) ? ' uk-disabled' : '' }}">
                        <i class="icon left arrow"></i> ← Предыдущая </a>
                </li>
            @endif

            @for ($i = 1; $i <= $paginator->productsPaginated->lastPage(); $i++)
                <li><a href="{{ $paginator->url($i) }}"
                       class="item{{ ($paginator->currentPage() == $i) ? ' uk-active' : '' }}">{{ $i }}</a></li>
            @endfor

            @if($paginator->currentPage() != $paginator->productsPaginated->lastPage())
                <li><a href="{{ $paginator->url($paginator->currentPage()+1) }}"
                       class="item{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' uk-disabled' : '' }}">
                        Следующая → <i class="icon right arrow"></i></a></li>
            @endif
        </ul>
    </div>
@endif