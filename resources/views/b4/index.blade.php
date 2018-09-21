@extends(env('THEME').'.layouts.app')

@section('top')
    @parent
	
	@include(env('THEME').'.layouts.top')

@endsection

@section('navbar')
    @parent

	@include(env('THEME').'.layouts.navbar', $categories)

@endsection

@section('hot_products')
    @parent
	
	@include(env('THEME').'.products.hot', $grouped)

@endsection

@section('hot_products')
    @parent
	
	@include(env('THEME').'.products.hot', $grouped)

@endsection

@section('footer')
    @parent
	
	@include(env('THEME').'.layouts.footer')

@endsection