<div class="container">
    <div class="py-5 text-center">
        <h2>Add new category</h2>
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

            {!! Form::open(['url' => 'admin/categories', 'method' => 'post']) !!}

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
                {{ Form::label('path', null, ['class' => 'control-label']) }}
                {{ Form::text('path', old('path'), array_merge(['class' => $errors->has('path') ? 'form-control is-invalid' : 'form-control'])) }}
                @if ($errors->has('path'))
                    <div class="invalid-feedback">
                        {{ $errors->first('path') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Select parent</label>
                <select class="form-control" id="parent" name="parent">
                    @include('admin.categories.recoption', ['categories' => $categories])
                </select>
            </div>

            <hr class="mb-4 mt-4">

            <div class="form-group">
                {{ Form::button('Add', ['type' => 'submit', 'class' => 'btn btn-primary btn-lg btn-block'])}}
            </div>

            {!! Form::close() !!}

        </div>
    </div>
</div>


