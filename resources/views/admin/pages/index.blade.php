@extends('layouts.app')
@include('admin.layouts.nav')
@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <h2>Static pages list</h2>
            <p class="lead">
                Any text for this page, comments or anything like that if needed.
            </p>
        </div>

        <div class="row">
            <div class="col-md-12">
                @if(!empty($pages))
                    <ul class="list-group">
                        @foreach($pages as $page)
                            <li class="list-group-item">{{$page->name}}   <a class="mr-0" href="pages/{{$page->id}}/edit">Edit</a></li>

                                {{--<a href="pages/{{$page->id}}/edit">{{$page->name}}</a>--}}

                        @endforeach
                    </ul>
                @else
                    no data found
                @endif
            </div>
        </div>
    </div>
@endsection

