@extends(env('THEME').'.layouts.front')
@section('topbar')

@endsection

@section('nav')
    {{--@include('theme.layouts.nav')--}}
@endsection
<div class="container-fluid limited mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="title"><span>Shop</span></div>
                <div class="row compact items">
                    @include('theme.products.items')
                </div>
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
                getProducts(page);
            }
        }
    });
    $(document).ready(function() {
        $(document).on('click', '.pagination a', function (e) {
            getProducts($(this).attr('href').split('page=')[1]);
            e.preventDefault();
        });
    });
    function getProducts(page) {
        $.ajax({
            headers: {
                'X-CSRF-Token':{{ csrf_token() }}
            },
            url : '?page=' + page,
            dataType: 'json'
        }).done(function (data) {
            $('.items').html().appendChild(data);
            location.hash = page;
        }).fail(function () {
            alert('Posts could not be loaded.');
        });
    }
</script>
@section('footer')
    @include('theme.layouts.footer')
@endsection