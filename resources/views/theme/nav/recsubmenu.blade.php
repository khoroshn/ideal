@foreach($categories as $category)
            @if(count($category->children)>0)

                <div class="list-group-collapse list-submega">
                    <a href="#list-submega-{{$category->id}}" class="list-group-item list-group-item-action" data-toggle="collapse" aria-expanded="false" aria-controls="list-submega-{{$category->id}}">
                        {{$category->name}}
                    </a>
                    <div class="collapse" id="list-submega-{{$category->id}}" data-parent="#list-mega">
                        <div class="list-group">
                            @include('theme.nav.recsubmenu',['categories' => $category->children,'subpath'=>$subpath.'/'.$category->path])
                        </div>
                    </div>
                </div>

            @else
                <a href="/shop/{{$subpath}}/{{$category->path}}" class="list-group-item list-group-item-action">{{$category->name}}</a>
            @endif
@endforeach
