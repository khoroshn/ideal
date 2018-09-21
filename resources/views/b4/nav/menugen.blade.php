<!-- Megamenu-->
<li class="nav-item dropdown position-static">
    <a href="/shop/{{$path}}" data-toggle="dropdown" class="nav-link">
        {{strtoupper($name)}}
        <i class="fa fa-angle-down"></i>
    </a>
    <div class="dropdown-menu megamenu py-lg-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row p-3 pr-lg-0 pl-lg-0 pt-lg-4">
                        @foreach($categories as $category)
                            @if($category->depth == 2)
                                <div class="col-lg-3">
                                    <!-- Megamenu list-->

                                    <h5 class="text-uppercase border-bottom-1 py-1 mb-4">{{strtoupper($category->name)}}</h5>

                                    @if(count($category->children)>0)
                                    <ul class="megamenu-list list-unstyled">
                                        @foreach($category->children as $children)
                                            <li class="megamenu-list-item"><a href="#" class="megamenu-list-link">{{strtoupper($children->name)}}</a></li>
                                        @endforeach
                                    </ul>
                                    @else
                                    <ul class="megamenu-list list-unstyled">
                                        <li class="megamenu-list-item"><a href="#" class="megamenu-list-link"> Category EMPTY Childrens ! </a></li>
                                    </ul>
                                    @endif
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row megamenu-services d-none d-lg-flex">
            <div class="col-xl-3 col-lg-6 d-flex">
                <div class="megamenu-services-item">
                    <svg class="svg-icon megamenu-services-icon">
                        <use xlink:href="#delivery-time-1"> </use>
                    </svg>
                    <div>
                        <h6 class="text-uppercase">Free shipping &amp; return</h6>
                        <p class="mb-0 text-muted text-sm">Free Shipping over $300</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 d-flex">
                <div class="megamenu-services-item">
                    <svg class="svg-icon megamenu-services-icon">
                        <use xlink:href="#money-1"> </use>
                    </svg>
                    <div>
                        <h6 class="text-uppercase">Money back guarantee</h6>
                        <p class="mb-0 text-muted text-sm">30 Days Money Back</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 d-flex">
                <div class="megamenu-services-item">
                    <svg class="svg-icon megamenu-services-icon">
                        <use xlink:href="#customer-support-1"> </use>
                    </svg>
                    <div>
                        <h6 class="text-uppercase">020-800-456-747</h6>
                        <p class="mb-0 text-muted text-sm">24/7 Available Support</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 d-flex">
                <div class="megamenu-services-item">
                    <svg class="svg-icon megamenu-services-icon">
                        <use xlink:href="#secure-payment-1"> </use>
                    </svg>
                    <div>
                        <h6 class="text-uppercase">Secure Payment</h6>
                        <p class="mb-0 text-muted text-sm">Secure Payment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
<!-- /Megamenu end-->
