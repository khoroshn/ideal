@section('styless')
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="{{asset('css/multiselect.css')}}" rel="stylesheet">
@show


@extends('layouts.app')
@include('admin.layouts.nav')
@section('content')

    <div class="container">
        <div class="py-5 text-center">
            <h2>Add new products</h2>
            <p class="lead">
                Any text for this page, comments or anything like that if needed.
            </p>
        </div>




        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            <div class="col-lg-12">

            {!! Form::open(['url' => 'admin/products', 'method' => 'post', 'files' => true]) !!}

                <div class="form-group">
                    {{ Form::label('name', null, ['class' => 'control-label']) }}
                    {{ Form::text('name', old('name'), array_merge(['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control'])) }}
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    {{ Form::label('title', null, ['class' => 'control-label']) }}
                    {{ Form::text('title', old('title'), array_merge(['class' => $errors->has('title') ? 'form-control is-invalid' : 'form-control'])) }}
                    @if ($errors->has('title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    {{ Form::label('description', null, ['class' => 'control-label']) }}
                    {{ Form::textarea('description', old('description'), array_merge(['class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control', 'rows'=>3])) }}
                    @if ($errors->has('description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('description') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    {{ Form::label('categories', null, ['class' => 'control-label']) }}

                    <input  type="text" id="catMultiSelectTree" placeholder="Select categories" class="form-control">

                </div>



                {{ Form::hidden('article', 'article') }}

                <div class="form-group">
                    {{ Form::label('images', null, ['class' => 'control-label']) }}

                    {{ Form::file('images[]', ['class' => $errors->has('images*') ? 'form-control is-invalid' : 'form-control', 'multiple' => 'multiple', 'value'=>old('images[]')]) }}
                    @if ($errors->has('images'))
                        <div class="invalid-feedback">
                            {{ $errors->first('images') }}
                        </div>
                    @endif
                    @if($errors->has('images.*'))
                        <div class="invalid-feedback">
                            {{ $errors->first('images.*') }}
                        </div>
                    @endif

                </div>

                <hr class="mb-4 mt-4">

                <div class="form-group">
                    {{ Form::button('Add', ['type' => 'submit', 'class' => 'btn btn-primary btn-lg btn-block'])}}

                </div>

            {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
    <script src="{{asset('js/icontains.js')}}"></script>
    <script src="{{asset('js/comboTreePlugin.js')}}"></script>
    <script>
        var SampleJSONData = [
            @include('admin.products.recdata', ['categories' => $categories])
        ];
    </script>
    <script>
        var comboTree1;
        jQuery(document).ready(function($) {

            comboTree1 = $('#catMultiSelectTree').comboTree({
                source : SampleJSONData,
                isMultiple: true
            });
        });
    </script>
@show








