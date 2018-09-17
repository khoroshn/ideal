@foreach($categories  as $category)
    <li class="list-group-item node-treeview-selectable search-result" data-nodeid="{{$category->id}}" style="color:undefined;background-color:undefined;">
        @if($category->depth>0)
            @for($i = 0; $i < $category->depth; $i++)
                <span class="indent"></span>
            @endfor
        @endif
    @if(count($category->children)>0)
        <span class="icon expand-icon glyphicon glyphicon-minus"></span>
        <span class="icon node-icon"></span>{{$category->name}}</li>
       @include('admin.categories.rectree', ['categories' => $category->children])
    @else
        <span class="icon node-icon"></span>{{$category->name}}</li>
    @endif
@endforeach