@foreach($categories  as $category)



    <option value="{{$category->id}}" class="">{{$category->name}}</option>
    @if(count($category->children)>0)
        <optgroup label="{{$category->depth}}">
                @include('admin.categories.recoption', ['categories' => $category->children])

        </optgroup>
    @endif

@endforeach