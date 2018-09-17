@section('nav-underline')


    <div class="nav-scroller bg-white box-shadow mt-5">
        <nav class="nav nav-underline">
            <a class="nav-link active" href="{{route('admin.index')}}">Dashboard</a>
            <a class="nav-link" href="{{route('admin.products.index')}}">Product</a>
            <a class="nav-link" href="{{route('admin.products.create')}}">Add Product</a>
            <a class="nav-link" href="{{route('admin.categories.index')}}">Categories</a>
            <a class="nav-link" href="{{route('admin.categories.create')}}">Add Categories</a>
            <a class="nav-link" href="{{route('admin.pages.index')}}">Pages</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
        </nav>
    </div>

@endsection


