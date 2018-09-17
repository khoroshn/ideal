@foreach($categories  as $category)
    <li>
        {{$category->name}}
    </li>
    @if($category->children)
    <ul>
        @include('admin.categories.recursive', ['categories' => $category->children])
    </ul>
    @endif
@endforeach