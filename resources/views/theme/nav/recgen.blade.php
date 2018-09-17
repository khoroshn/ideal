@foreach($categories as $category)
    @if($category->depth == 0)
        @include('theme.nav.recgen', ['categories' => $category->children])
    @else
        @if($category->depth == 1)

            @if(count($category->children)>0)
                @include('theme.nav.menugen',['path'=>$category->path,'name'=>$category->name,'categories' => $category->children])
            @else
            <a class="nav-link " href="/shop/{{$category->path}}">{{strtoupper($category->name)}}</a>
            @endif
        @endif
    @endif
@endforeach