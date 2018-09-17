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
        @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td>{{ str_limit($product->title, 35)}}</td>
                <td>{{ str_limit($product->description, 35) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

