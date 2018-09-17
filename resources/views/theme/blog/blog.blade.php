@extends(env('THEME').'.layouts.front')
@section('topbar')

@endsection

@section('nav')
    {{--@include('theme.layouts.nav')--}}
@endsection

<div class="container-fluid limited mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="title"><span>Latest Blog</span></div>
            <div class="row">
                <div class="col-12 posts">
                    @include('theme.blog.posts')
                </div>
{{--                <div class="col-12">
                    <nav aria-label="Product Listing Page" class="d-flex justify-content-center mt-3">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">&laquo;</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">&lsaquo;</a></li>
                            <li class="page-item active"><span class="page-link">1</span></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&rsaquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </nav>
                </div>--}}
            </div>
        </div>
    </div>
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>
    $(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            } else {
                getPosts(page);
            }
        }
    });
    $(document).ready(function() {
        $(document).on('click', '.pagination a', function (e) {
            getPosts($(this).attr('href').split('page=')[1]);
            e.preventDefault();
        });
    });
    function getPosts(page) {
        $.ajax({
            headers: {
                'X-CSRF-Token':{{ csrf_token() }}
            },
            url : '?page=' + page,
            dataType: 'json',
        }).done(function (data) {
            $('.posts').html($('.posts').html()+data);
            location.hash = page;
        }).fail(function () {
            alert('Posts could not be loaded.');
        });
    }
</script>
@section('footer')
    @include('theme.layouts.footer')
@endsection