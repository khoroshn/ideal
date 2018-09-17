<div class="container-fluid limited mb-5">
  <div class="row">

    <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
      <div class="card user-card">
        <div class="card-body p-2 mb-3 mb-md-0 mb-xl-3">
          <div class="media">
            <img class="rounded-circle" src="/theme/img/user.png" alt="{{$content->name}}">
            <div class="media-body">

              <h5 class="user-name">{{$content->name}}</h5>
              <small class="card-text text-muted">Joined {{date('M d, Y', strtotime($content->created_at))}}</small>
              <div class="card-text small text-muted">Points: 100</div>
            </div>
          </div>
        </div>
        <div class="list-group list-group-flush">
          <a href="/account" class="list-group-item list-group-item-action "><i class="material-icons">person</i> Profile</a>
          <a href="account-order.html" class="list-group-item list-group-item-action"><i class="material-icons">shopping_cart</i> Orders</a>
          <a href="/account/data" class="list-group-item list-group-item-action active"><i class="material-icons">location_on</i> Addresses</a>
          <a href="account-wishlist.html" class="list-group-item list-group-item-action"><i class="material-icons">favorite</i> Wishlist<span class="badge badge-secondary badge-pill float-right mt-1">3</span></a>
          <a href="account-password.html" class="list-group-item list-group-item-action"><i class="material-icons">vpn_key</i> Change Password</a>
          <a href="/logout" class="list-group-item list-group-item-action d-none d-md-block"><i class="material-icons">exit_to_app</i> Logout</a>
        </div>
      </div>
    </div>
    <div class="col-lg-9 col-md-8">
      <div class="title"><span>Billing Address</span><button class="btn btn-sm btn-outline-theme float-right" id="editAddrModalBtn"><i class="material-icons">mode_edit</i> Edit</button></div>
      <table class="table mb-3 table-sm">
        <tbody>
        <tr>
          <td class="border-top-0">
            <strong>Address</strong>
            <div>Lorem ipsum dolor sit amet, consectetur adipisicing.</div>
          </td>
        </tr>
        <tr>
          <td>
            <strong>Country</strong>
            <div>United Kingdom</div>
          </td>
        </tr>
        <tr>
          <td>
            <strong>Region / State</strong>
            <div>Lorem ipsum</div>
          </td>
        </tr>
        <tr>
          <td>
            <strong>City</strong>
            <div>Manchester</div>
          </td>
        </tr>
        <tr>
          <td>
            <strong>ZIP Code</strong>
            <div>12345</div>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Modal Login -->
<div class="modal fade modal-quickview" id="editAddrModal" tabindex="-1" role="dialog" aria-labelledby="editAddrModal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-body">



          <div class="form-row">
            <div class="form-group mb-1 mb-md-3 col-md-6">
              <label for="countries" class="mb-0 mb-md-2">Country *</label>
              <select id="countries" name="country" class="custom-select" data-async="true">
               @foreach($countries as $country)
                 <option value="{{$country->isoCode}}">{{$country->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group mb-1 mb-md-3 col-md-6">
              <label for="region" class="mb-0 mb-md-2">City *</label>
              <select id="region" name="region" class="custom-select" data-async="true" disabled="disabled">
                  <option value="0">none</option>
              </select>
            </div>
          </div>
        <div class="form-group mb-1 mb-md-3">
          <label for="inputAddress" class="mb-0 mb-md-2">Address *</label>
          <input type="text" class="form-control" id="inputAddress">
        </div>
          <button id="inputAddressSave" class="btn btn-theme my-1"><i class="material-icons">save</i> Save</button>



      </div>
    </div>
  </div>
</div>



@section('custom_script')
<script>


</script>
  @endsection