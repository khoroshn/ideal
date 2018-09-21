@foreach($categories as $category)

            @if(count($category->children)>0)
                    <ul class="megamenu-list list-unstyled">
                        @include(env('THEME').'.nav.recsubmenu',['categories' => $category->children,'subpath'=>$subpath.'/'.$category->path])
                    </ul>
            @else
                <li class="megamenu-list-item"><a href="/shop/{{$path}}" class="megamenu-list-link">{{$category->name}}</a></li>
            @endif
@endforeach
