@foreach($categories as $category)
    @if($category->depth == 0)
        <li class="nav-item">
            <a href="/{{$category->path}}" class="nav-link">
                {{strtoupper($category->name)}}
            </a>
        </li>
        @include(env('THEME').'.nav.recgen', ['categories' => $category->children])
    @else
        @if($category->depth == 1)
            @if(count($category->children)>0)
                @include(env('THEME').'.nav.menugen',['path'=>$category->path,'name'=>$category->name,'categories' => $category->children])
            @else
                <li class="nav-item">
                    <a href="/shop/{{$category->path}}" class="nav-link">
                        {{strtoupper($category->name)}}
                    </a>
                </li>
            @endif
        @endif
    @endif
@endforeach