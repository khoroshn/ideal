@extends('layouts.app')
@include('admin.layouts.nav')
@section('content')

    <div class="container">
        <div class="py-5 text-center">
            <h2>Edit page {{$page->name}}</h2>
            <p class="lead">
                Some text
            </p>
        </div>


        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            <div class="col-lg-12">

            {!! Form::open(['url' => 'admin/pages/'.$page->id.'', 'method' => 'post']) !!}
                {{method_field('PATCH')}}

                <div class="form-group">
                    {{ Form::label('name', null, ['class' => 'control-label']) }}
                    {{ Form::text('name', $page->name, array_merge(['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control'])) }}
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
{{--                <div class="form-group">
                    {{ Form::label('title', null, ['class' => 'control-label']) }}
                    {{ Form::text('title', old('title'), array_merge(['class' => $errors->has('title') ? 'form-control is-invalid' : 'form-control'])) }}
                    @if ($errors->has('title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                        </div>
                    @endif
                </div>--}}

                <div class="form-group">
                    {{ Form::label('content', null, ['class' => 'control-label']) }}
                    {{ Form::textarea('content', $page->content , array_merge(['class' => $errors->has('content') ? 'form-control is-invalid' : 'form-control', 'rows'=>3])) }}
                    @if ($errors->has('content'))
                        <div class="invalid-feedback">
                            {{ $errors->first('content') }}
                        </div>
                    @endif
                </div>

                {{ Form::hidden('alias', 'alias') }}



                <hr class="mb-4 mt-4">

                <div class="form-group">
                    {{ Form::button('Update', ['type' => 'submit', 'class' => 'btn btn-primary btn-lg btn-block'])}}

                </div>

            {!! Form::close() !!}

            </div>
        </div>
    </div>




@endsection








