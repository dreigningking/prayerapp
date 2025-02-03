<!-- PAGE PAGINATION
			============================================= -->
<div class="pb-100 page-pagination theme-pagination">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination ico-20 justify-content-center">
                        @if ($data->onFirstPage())
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><span class="flaticon-back"></span></a></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $data->previousPageUrl() }}" tabindex="-1"><span class="flaticon-back"></span></a></li>
                        @endif

                        @foreach ($data as $page => $item)
                            <li class="page-item {{ $data->currentPage() == $page + 1 ? 'active' : '' }}" aria-current="page">
                                <a class="page-link" href="{{ $data->url($page + 1) }}">{{ $page + 1 }}</a>
                            </li>
                        @endforeach

                        @if ($data->hasMorePages())
                            <li class="page-item"><a class="page-link" href="{{ $data->nextPageUrl() }}" aria-label="Next"><span class="flaticon-next"></span></a></li>
                        @else
                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Next"><span class="flaticon-next"></span></a></li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END PAGE PAGINATION -->

