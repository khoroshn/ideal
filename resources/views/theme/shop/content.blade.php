<!-- Filter Widget -->
<div class="col-lg-3 col-md-4 mb-3">
    <button class="btn btn-light btn-block dropdown-toggle " type="button" data-toggle="modal" data-target="#filterModal">
        Filter Data
    </button>

    <div class="modal fade modal-menu" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="filter-sidebar mt-3 mt-md-0">
                    <div class="title"><span>Enabled Filters</span></div>
                    <ul>
                        <li>Categories: T-Shirts <a href="#" class="remove-filter"><i class="material-icons md-1">close</i></a></li>
                        <li>Availability: In Stock <a href="#" class="remove-filter"><i class="material-icons md-1">close</i></a></li>
                        <li>Brand: Brand Name 1 <a href="#" class="remove-filter"><i class="material-icons md-1">close</i></a></li>
                    </ul>
                </div>
                <div class="filter-sidebar">
                    <div class="title"><span>Categories</span></div>
                    <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                        <div class="list-group-collapse sub-men">
                            <a class="list-group-item list-group-item-action" href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">Clothing <small class="text-muted">(60)</small></a>
                            <div class="collapse show" id="sub-men1" data-parent="#list-group-men">
                                <div class="list-group">
                                    <a href="shop.html" class="list-group-item list-group-item-action active">T-Shirts <small class="text-muted">(10)</small></a>
                                    <a href="shop.html" class="list-group-item list-group-item-action">Polo T-Shirts <small class="text-muted">(11)</small></a>
                                    <a href="shop.html" class="list-group-item list-group-item-action">Round Neck T-Shirts <small class="text-muted">(12)</small></a>
                                    <a href="shop.html" class="list-group-item list-group-item-action">V Neck T-Shirts <small class="text-muted">(13)</small></a>
                                    <a href="shop.html" class="list-group-item list-group-item-action">Hooded T-Shirts <small class="text-muted">(14)</small></a>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-collapse sub-men">
                            <a class="list-group-item list-group-item-action" href="#sub-men2" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men2">Footwear <small class="text-muted">(45)</small></a>
                            <div class="collapse" id="sub-men2" data-parent="#list-group-men">
                                <div class="list-group">
                                    <a href="shop.html" class="list-group-item list-group-item-action">Sports Shoes <small class="text-muted">(10)</small></a>
                                    <a href="shop.html" class="list-group-item list-group-item-action">Sneakers <small class="text-muted">(15)</small></a>
                                    <a href="shop.html" class="list-group-item list-group-item-action">Formal Shoes <small class="text-muted">(20)</small></a>
                                </div>
                            </div>
                        </div>
                        <a href="shop.html" class="list-group-item list-group-item-action">Accessories <small class="text-muted">(11)</small></a>
                        <a href="shop.html" class="list-group-item list-group-item-action">Bags <small class="text-muted">(22)</small></a>
                    </div>
                </div>
                <div class="filter-sidebar">
                    <div class="title"><span>Brand</span></div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="filterBrand1" checked="checked">
                        <label class="custom-control-label" for="filterBrand1">Brand Name 1</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="filterBrand2">
                        <label class="custom-control-label" for="filterBrand2">Brand Name 2</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="filterBrand3">
                        <label class="custom-control-label" for="filterBrand3">Brand Name 3</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-12">
                        <div class="filter-sidebar">
                            <div class="title"><span>Options</span></div>
                            <ul>
                                <li>
                                    <select name="select-filter1" id="select-filter1" hidden="hidden">
                                        <option value="all">Dropdown as Select</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                    </select>
                                    <div class="dropdown">
                                        <button class="btn btn-select dropdown-toggle btn-block text-right" type="button" id="dropdown-select-filter1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                        <div class="dropdown-menu animate w-100" aria-labelledby="dropdown-select-filter1" data-select="select-filter1">
                                            <button class="dropdown-item" type="button" data-value="all"><span class="float-left">Dropdown as Select</span></button>
                                            <button class="dropdown-item" type="button" data-value="1"><span class="float-left">Option 1</span></button>
                                            <button class="dropdown-item" type="button" data-value="2"><span class="float-left">Option 2</span></button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <select name="select-filter2" class="custom-select">
                                        <option value="all">Native Select</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12">
                        <div class="filter-sidebar">
                            <div class="title"><span>Options 2</span></div>
                            <div class="custom-controls-stacked">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="filterOption1" name="radio-stacked" class="custom-control-input" checked="checked">
                                    <label class="custom-control-label" for="filterOption1">All Options 2</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="filterOption2" name="radio-stacked" class="custom-control-input">
                                    <label class="custom-control-label" for="filterOption2">Option 2.1</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="filterOption3" name="radio-stacked" class="custom-control-input">
                                    <label class="custom-control-label" for="filterOption3">Option 2.2</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="filterOption4" name="radio-stacked" class="custom-control-input">
                                    <label class="custom-control-label" for="filterOption4">Option 2.3</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-12">
                        <div class="filter-sidebar">
                            <div class="title"><span>Price Range</span></div>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Min : $</span>
                                </div>
                                <input type="text" class="form-control" name="min-price" id="min-price" value="" />
                                <div class="input-group-append input-group-prepend">
                                    <span class="input-group-text">Max : $</span>
                                </div>
                                <input type="text" class="form-control" name="max-price" id="max-price" value="" />
                            </div>
                            <div class="price-range">
                                <div id="price-range-slider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12">
                        <div class="filter-sidebar">
                            <div class="title"><span>Rating</span></div>
                            <div class="rating-range">
                                <div id="rating-range"></div>
                            </div>
                            <input type="hidden" class="form-control" name="min-range" id="min-range" value="1" />
                            <input type="hidden" class="form-control" name="max-range" id="max-range" value="5" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /Filter Widget -->
        <div class="title"><span>Link</span></div>
        @if(count($content)>0)
            <div class="row compact">
                @foreach($content as $item)
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


                                        <a class="btn btn-outline-theme show-quickview"
                                                data-endpoint="/api/products/{{$item->id}}"
                                                data-target="targetId"
                                                data-cache="false",
                                                data-async="true">

                                            <i class="material-icons">zoom_in</i>

                                        </a>
                                       {{-- <button class="btn btn-theme">ADD TO CART</button>--}}
                                        <a href="/cart/add/{{$item->id}}" class="btn btn-outline-theme">ADD TO CART</a>
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
            </div>

        @endif
            <div class="col-12">
                <nav aria-label="Product Listing Page" class="d-flex justify-content-center mt-3">
                    <ul class="pagination">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">&laquo;</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">&lsaquo;</a></li>
                        <li class="page-item active"><span class="page-link">1</span></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&rsaquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </nav>
            </div>
        </div>
