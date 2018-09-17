@extends('layouts.app')
@include('admin.layouts.nav')
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{ str_limit($item->title, 35)}}</td>
                <td>{{ str_limit($item->description, 35) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

