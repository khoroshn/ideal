@extends(env('THEME').'.layouts.front')
@section('topbar')

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



