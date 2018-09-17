@extends(env('THEME').'.layouts.front')
@section('topbar')
    {!! $topbar !!}
@endsection

@section('nav')
    {!! $nav !!}
@endsection

@section('slider')
    {!! $sliders !!}
@endsection

@section('sale')
    {!! $sale !!}
@endsection

@section('footer')
    {!! $footer !!}
@endsection
