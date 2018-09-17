@foreach ($items as $item)

    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 px-1">
        <div class="card card-product rounded-0">
            <a href="{{ route('products.show',['alias'=> $item->alias]) }}"><img class="card-img-top" src="/uploads/{{$item->images[0]->filename}}" alt="Card image cap"></a>
            <div class="card-body">
                <div class="card-title"><a href="{{ route('products.show',['alias'=> $item->alias]) }}" title="{{$item->name}}">{{$item->name}}</a></div>
                <ul class="card-text list-inline">
                    <li class="list-inline-item"><span class="price">$13.50</span></li>
                    <li class="list-inline-item"><del class="text-muted small">$15.00</del></li>
                    <li class="list-inline-item d-none d-sm-inline-block"><span class="badge badge-theme">-10%</span></li>
                </ul>
                <div class="action">
                    <div class="btn-group btn-group-sm" role="group" aria-label="Action">
                        <button class="btn btn-outline-theme show-quickview"
                                data-endpoint="/Ajax/Link.html"
                                data-target="targetId"
                                data-cache="false",
                                data-async="true"><i class="material-icons">zoom_in</i></button>

                        <button class="btn btn-theme">ADD TO CART</button>
                        <button class="btn btn-outline-theme"><i class="material-icons">favorite_border</i></button>
                    </div>
                </div>
                <div class="small-action d-block d-md-none">
                    <div class="btn-group dropup">
                        <span role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&#10247;</span>
                        <div class="dropdown-menu dropdown-menu-right fadeIn">
                            <a class="dropdown-item" href="#"><i class="material-icons">add_shopping_cart</i> BUY</a>
                            <a class="dropdown-item" href="#"><i class="material-icons">favorite_border</i> Wishlist</a>
                            <a class="dropdown-item" href="#"><i class="material-icons">compare_arrows</i> Compare</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endforeach

{{ $items->links() }}