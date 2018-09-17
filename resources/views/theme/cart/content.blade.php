


<div class="container-fluid limited">
  <div class="row">
    <div class="col-12">
      <div class="title"><span>You have {{count($cart)}} items in your bag</span></div>
      <div class="table-responsive">
        <table class="table table-cart">
          <thead>
          <tr>
            <th scope="col" class="w-50">Item</th>
            <th scope="col" class="text-center">Qty</th>
            <th scope="col" class="d-none d-sm-table-cell">Price</th>
            <th scope="col" class="d-none d-sm-table-cell">Subtotal</th>
          </tr>
          </thead>
          <tbody>

          @foreach($cart as $item)

          <tr>
            <td>
              <div class="media">
                <a href="/products/" class="mr-3 d-none d-md-block"><img src="/uploads/{{$item->options->images[0]->filename}}" style="max-width: 70px;" class="img-fluid" alt="product"></a>
                <div class="media-body">
                  <a href="detail.html" class="h6">{{$item->name}}</a>
                  <div class="small">Size: S <span class="mx-2">|</span>Color: Green</div>
                  <div class="mb-1">
                    <span class="d-inline d-sm-none small">Price: <span class="text-theme">$13.50</span></span>
                    <span class="badge badge-success">In stock</span>
                  </div>
                  <div class="btn-group btn-group-sm">
                    <button class="btn btn-light py-0 d-none d-md-block">Move to wishlist</button>

                    <a href="/cart/remove/{{$item->rowId}}" class="btn btn-light py-0">Remove</a>

                  </div>
                </div>
              </div>
            </td>
            <td class="text-center">
              <div class="input-group input-group-sm input-group-qty d-inline-flex mb-2">
                <div class="input-group-prepend"><button class="btn btn-light btn-down" type="button"><i class="material-icons">keyboard_arrow_down</i></button></div>
                <input type="text" class="form-control text-center border-light" aria-label="Quantity" value="{{$item->qty}}" data-min="1" data-max="10">
                <div class="input-group-append"><button class="btn btn-light btn-up" type="button"><i class="material-icons">keyboard_arrow_up</i></button></div>
              </div>
              <div class="d-block d-sm-none">
                <small>Subtotal </small><div class="text-theme">$13.50</div>
              </div>
            </td>
            <td class="d-none d-sm-table-cell">
              <ul class="card-text list-inline">
                <li class="list-inline-item"><span class="text-theme">{{$item->price}}</span></li>
                {{--<li class="list-inline-item"><del class="text-muted small">$15.00</del></li>--}}
              </ul>
            </td>
            <td class="d-none d-sm-table-cell"><span class="text-theme">{{$item->subtotal}}</span></td>
          </tr>
          @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>



  <div class="row justify-content-between">
    <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 mb-2">
      <div class="input-group input-group-sm">
        <input type="text" class="form-control" placeholder="Coupon code" aria-label="Coupon code">
        <div class="input-group-append">
          <button class="btn btn-theme" type="button">Apply</button>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-5 col-xl-4">
      <div class="d-flex">
        <div>Bag Total</div>
        <div class="ml-auto font-weight-bold">{{Cart::total()}}</div>
      </div>
      <div class="d-flex">
        <div>Bag Discount</div>
        <div class="ml-auto font-weight-bold">$6.00</div>
      </div>
      <hr class="my-1">
      <div class="d-flex">
        <div>Coupon Discount</div>
        <div class="ml-auto font-weight-bold">-</div>
      </div>
      <div class="d-flex">
        <div>Shipping Cost</div>
        <div class="ml-auto font-weight-bold">FREE</div>
      </div>
      <hr>
      <div class="d-flex">
        <div>Order Total</div>
        <div class="ml-auto text-theme h5 mb-0">$54.00</div>
      </div>
      <hr>
    </div>

    <div class="col-12 text-right">
      <div class="btn-group" role="group" aria-label="Basic example">
        <a href="/shop" class="d-none d-sm-inline-block btn btn-outline-theme">Continue Shopping</a>
        <a href="/checkout" class="btn btn-theme rounded-xs">PROCEED TO CHECKOUT</a>
      </div>
    </div>
  </div>
</div>