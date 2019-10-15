@include('include.head')

  <div class="customer-profile"><a href="#" class="d-inline-block"><img src="img/person-3.jpg" class="img-fluid rounded-circle customer-image"></a>
    <h5>Julie Machallova</h5>
    <p class="text-muted text-small">Ostrava, Czech republic</p>
  </div>
  <nav class="list-group customer-nav">
    <a href="/customer-orders" class="{{ request()->is('customer-orders') ? 'active' : ''  }} list-group-item d-flex justify-content-between align-items-center"><span><span class="icon icon-bag"></span>Orders</span><small class="badge badge-pill badge-primary">5</small></a>
    <a href="/customer-account" class="{{ request()->is('customer-account') ? 'active' : ''  }} list-group-item d-flex justify-content-between align-items-center"><span><span class="icon icon-profile"></span>Profile</span></a>
    <a href="/change_password" class="{{ request()->is('change_password') ? 'active' : ''  }} list-group-item d-flex justify-content-between align-items-center"><span><span class="icon icon-profile"></span>Change Password</span></a>
    <a href="customer-login.html" class="list-group-item d-flex justify-content-between align-items-center"><span><span class="fa fa-sign-out"></span>Log out</span></a>
  </nav>
