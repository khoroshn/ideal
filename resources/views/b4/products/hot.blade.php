<section class="pt-6 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-xl-8 mx-auto text-center mb-5">
        <h2 class="text-uppercase">Your favourites</h2>
        <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <!-- Products Slider-->
      <div class="owl-carousel owl-theme product-slider">
        <!-- product-->
        @foreach ($grouped as $item)
          <div class="product-slider-item border-top px-3 mx-1">
            <div class="product">
              <div class="product-image">
                @foreach($item->groups as $group)
                  <div class="ribbon ribbon-{{ $group->color }} text-dark"><strong class="text-{{ $group->tprop }}"><strong>{{ $group->name }}</strong></strong></div>
                @endforeach

                <img src="/uploads/{{ $item->images[0]->filename }}" alt="product" class="img-fluid"/>


                <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                  <div class="product-hover-overlay-buttons"><a href="detail.html" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a>
                  </div>
                </div>
              </div>
              <div class="py-2">
                <p class="text-muted text-sm mb-1">{{ $item->categories[0]->name }}</p>
                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">{{ $item->name }}</a></h3><span class="text-muted">$40.00</span>
              </div>
            </div>
          </div>
        @endforeach 
        <!-- /product-->
      </div>
    </div>
  </div>
</section>