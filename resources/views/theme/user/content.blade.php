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
          <a href="/account" class="list-group-item list-group-item-action active"><i class="material-icons">person</i> Profile</a>
          <a href="account-order.html" class="list-group-item list-group-item-action"><i class="material-icons">shopping_cart</i> Orders</a>
          <a href="/account/data" class="list-group-item list-group-item-action"><i class="material-icons">location_on</i> Addresses</a>
          <a href="account-wishlist.html" class="list-group-item list-group-item-action"><i class="material-icons">favorite</i> Wishlist<span class="badge badge-secondary badge-pill float-right mt-1">3</span></a>
          <a href="account-password.html" class="list-group-item list-group-item-action"><i class="material-icons">vpn_key</i> Change Password</a>
          <a href="ind" class="list-group-item list-group-item-action d-none d-md-block"><i class="material-icons">exit_to_app</i> Logout</a>
        </div>
      </div>
    </div>
    <div class="col-lg-9 col-md-8">
      <div class="title"><span>My Profile</span></div>
      <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="InputName">Name</label>
            <input type="text" class="form-control" id="InputName" value="{{$content->name}}" placeholder="Enter Name">
          </div>
          <div class="form-group col-md-6">
            <label for="InputEmail">Email Address</label>
            <input type="email" class="form-control" id="InputEmail" value="{{$content->email}}" placeholder="Enter Email">
          </div>
          <div class="form-group col-md-6">
            <label for="InputPhone">Phone Number</label>
            <input type="text" class="form-control" id="InputPhone" value="(+123) 456789" placeholder="Phone Number">
          </div>
          <div class="form-group col-md-6">
            <label class="d-block">Birthday</label>
            <select class="custom-select col-3" data-width="70px">
              <option value="0">Year</option>
              <option value="1990">1990</option>
              <option value="1991">1991</option>
              <option value="1992">1992</option>
              <option value="1993">1993</option>
              <option value="1994">1994</option>
              <option value="1995">1995</option>
              <option value="1996">1996</option>
              <option value="1997">1997</option>
              <option value="1998">1998</option>
              <option value="1999">1999</option>
            </select>
            <select class="custom-select col-3" data-width="80px">
              <option value="0">Month</option>
              <option value="Jan">Jan</option>
              <option value="Feb">Feb</option>
              <option value="Mar">Mar</option>
              <option value="Apr">Apr</option>
              <option value="May">May</option>
              <option value="Jun">Jun</option>
              <option value="Jul">Jul</option>
              <option value="Aug">Aug</option>
              <option value="Sept">Sept</option>
              <option value="Oct">Oct</option>
              <option value="Nov">Nov</option>
              <option value="Dec">Dec</option>
            </select>
            <select class="custom-select col-3" data-width="60px">
              <option value="0">Day</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label class="d-block">Gender</label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="gender1" name="gender" class="custom-control-input" checked="checked">
              <label class="custom-control-label" for="gender1">Male</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="gender2" name="gender" class="custom-control-input">
              <label class="custom-control-label" for="gender2">Female</label>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="profilePicture">Profile Picture</label>
            <input type="file" id="profilePicture" class="d-block">
          </div>
        </div>
        <hr class="mt-0 mb-3">
        <button type="submit" class="btn btn-theme my-1"><i class="material-icons">save</i> Save</button>
      </form>

    </div>
  </div>
</div>