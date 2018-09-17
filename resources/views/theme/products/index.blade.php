@extends(env('THEME').'.layouts.front')
@section('topbar')
    {!! $topbar !!}
@endsection

@section('nav')
    {!! $nav !!}
@endsection

@section('content')
    {!! $content !!}
@endsection

@section('footer')
    {!! $footer !!}
@endsection

