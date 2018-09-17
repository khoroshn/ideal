@foreach($categories  as $category)
    @if (!$loop->first)
        ,
    @endif
    {
    id: '{{$category->id}}',
    title: '{{$category->name}}'
    @if(count($category->children)>0)
        ,
        subs: [
        @include('admin.products.recdata', ['categories' => $category->children])
        ]}
    @else
        }
    @endif
    @if ($loop->last)
    @endif
@endforeach


