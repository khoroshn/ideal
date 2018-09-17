@foreach($categories  as $category)
    @if (!$loop->first)
        ,
    @endif
    {
    text: '{{$category->name}}',
    href: '#cat{{$category->id}}',
    tags: ['{{$category->id}}']
    @if(count($category->children)>0)
        ,
        nodes: [
        @include('admin.categories.recdata', ['categories' => $category->children])
        ]}
    @else
        }
    @endif
    @if ($loop->last)
    @endif
@endforeach