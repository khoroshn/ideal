    <div class="nav-item dropdown position-static">
        <a href="/shop/{{$path}}" class="nav-link dropdown-toggle no-caret h-100 buttom-hover-red" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{strtoupper($name)}}</a>
        <div class="dropdown-menu dropdown-menu-mega animate rounded-0">
            <form> <!-- added <form> tags to prevent dropdown closed when clicked inside dropdown-menu -->
                <div class="row">
{{--                    <div class="col-4 col-lg-3">
                        <h6 class="p-2 font-weight-bold border border-top-0 border-right-0 border-left-0">Top Categories</h6>
                        <div class="list-group list-group-no-border list-group-sm">
                            <a href="shop.html" class="list-group-item list-group-item-action">Polo T-Shirt</a>
                            <a href="shop.html" class="list-group-item list-group-item-action">Round Neck T-Shirt</a>
                            <a href="shop.html" class="list-group-item list-group-item-action">V Neck T-Shirt</a>
                            <a href="shop.html" class="list-group-item list-group-item-action">Hooded T-Shirt</a>
                            <a href="shop.html" class="list-group-item list-group-item-action">Polo T-Shirt</a>
                            <a href="shop.html" class="list-group-item list-group-item-action">Round Neck T-Shirt</a>
                            <a href="shop.html" class="list-group-item list-group-item-action">V Neck T-Shirt</a>
                        </div>
                    </div>--}}
                    <div class="col-4 col-lg-3">
                        <h6 class="p-2 font-weight-bold border border-top-0 border-right-0 border-left-0">Categories</h6>
                        <div class="list-group list-group-no-border list-group-sm" id="list-mega" data-children=".list-submega">
                            @include('theme.nav.recsubmenu',['categories' => $category->children,'subpath'=>$path])
                        </div>
                    </div>

{{--                    <div class="col-4 col-lg-3">
                        <div class="card hover-style2 border-white text-white mb-2">
                            <img class="card-img" src="{{asset('THEME')}}/img/product/type-polo.jpg" alt="Card image">
                            <div class="card-img-overlay text-center p-2 p-md-3">
                                <h4 class="card-title mb-0">Polo T-Shirts</h4>
                                <p class="card-text mb-xl-1">40% OFF</p>
                                <a href="shop.html" class="btn btn-sm btn-theme" role="button">SHOP NOW</a>
                            </div>
                        </div>
                        <div class="card hover-style2 border-white text-white">
                            <img class="card-img" src="{{asset('THEME')}}/img/product/type-hooded.jpg" alt="Card image">
                            <div class="card-img-overlay text-center p-2 p-md-3">
                                <h4 class="card-title">New Collection</h4>
                                <a href="shop.html" class="btn btn-sm btn-light" role="button">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-lg-3 d-none d-lg-block">
                        <a href="shop.html"><img src="{{asset('THEME')}}/img/product/mega-menu.jpg" class="img-fluid rounded hover-style2" alt="Product"></a>
                    </div>--}}

                </div>
            </form>
        </div>
    </div>
