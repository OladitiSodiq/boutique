<header class="header">
  <!-- Tob Bar-->
  <div class="top-bar">
    <div class="container-fluid">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 hidden-lg-down text-col">
          <ul class="list-inline">
            <li class="list-inline-item"><i class="icon-telephone"></i>020-800-456-747</li>
            <li class="list-inline-item">Free shipping on orders over $300</li>
          </ul>
        </div>
        <div class="col-lg-6 d-flex justify-content-end">
          <!-- Language Dropdown-->
          <div class="dropdown show"><a id="langsDropdown" href="https://example.com/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-2/img/united-kingdom.svg" alt="english">English</a>
            <div aria-labelledby="langsDropdown" class="dropdown-menu"><a href="#" class="dropdown-item"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-2/img/germany.svg" alt="german">German</a><a href="#" class="dropdown-item"> <img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-2/img/france.svg" alt="french">French</a></div>
          </div>
          <!-- Currency Dropdown-->
          <div class="dropdown show"><a id="currencyDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">USD</a>
            <div aria-labelledby="currencyDropdown" class="dropdown-menu"><a href="#" class="dropdown-item">EUR</a><a href="#" class="dropdown-item"> GBP</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg">
    <div class="search-area">
      <div class="search-area-inner d-flex align-items-center justify-content-center">
        <div class="close-btn"><i class="icon-close"></i></div>
        <form action="#">
          <div class="form-group">
            <input type="search" name="search" id="search" placeholder="What are you looking for?">
            <button type="submit" class="submit"><i class="icon-search"></i></button>
          </div>
        </form>
      </div>
    </div>
    <div class="container-fluid">  
      <!-- Navbar Header  --><a href="index-2.html" class="navbar-brand"><img src="img/logo.png" alt="..."></a>
      <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
      <!-- Navbar Collapse -->
      <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item dropdown"><a id="navbarHomeLink" href="index-2.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link active">Home<i class="fa fa-angle-down"></i></a>
            <ul aria-labelledby="navbarDropdownHomeLink" class="dropdown-menu">
              <li><a href="/" class="dropdown-item">Home</a></li>
              
            </ul>
          </li>
          <li class="nav-item"><a href="/category" class="nav-link">Shop</a>
          </li>
          <!-- Megamenu-->
          
          <!-- Multi level dropdown end-->
          <li class="nav-item"><a href="/blog" class="nav-link">Blog </a>
          </li>
          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a>
          </li>
        </ul>
        <div class="right-col d-flex align-items-lg-center flex-column flex-lg-row">
          <!-- Search Button-->
          <div class="search"><i class="icon-search"></i></div>
          <!-- User Not Logged - link to login page-->
         
          <div class="user"> 
              @if(Session::get('username'))
                  <a id="userdetails" href="/customer-account" class="user-link">
                    {{ Session::get('username') }}
                    <i class="icon-profile"></i>
                  </a>
              @endif 
              @if(!Session::get('username'))
                  <a id="userdetails" href="/customer-login" class="user-link">
                    Login
                    <i class="icon-profile"></i>
                  </a>
              @endif
             
          </div>
          
         
          
         
          <!-- Cart Dropdown-->
          <div class="wishlist dropdown show"><a id="cartdetails" href="/whishlist"><i class="fa fa-heart"></i>
              <div class="cart-no"> </div></a>
              <a class="text-primary view-cart">Wishlist</a>
          </div>
          

          <div class="cart dropdown show"><a id="cartdetails" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="icon-cart"></i>
            <div class="cart-no">{{ count((array) session('cart')) }}</div></a><a href="/cart" class="text-primary view-cart">View Cart</a>
          <div aria-labelledby="cartdetails" class="dropdown-menu">
            <!-- cart item-->
            @if(session('cart'))
            @foreach((array) session('cart') as $id => $details)
            <div class="dropdown-item cart-product">

              <div class="d-flex align-items-center">
                 
                <div class="img"><img src="img/{{ $details['photo'] }}" alt="..." class="img-fluid"></div>
                <div class="details d-flex justify-content-between">
                  <div class="text"> <a href="#"><strong>{{ $details['name'] }}</strong></a><small>Quantity: {{ $details['quantity'] }} </small><span class="price">{{$details['price']}}</span></div><a href="#" class="delete"><i class="fa fa-trash-o"></i></a>
                </div>
              
              </div>
            </div>
            @endforeach
            @endif
            <!-- total price-->
            <?php $total = 0 ?>
            @foreach((array) session('cart') as $id => $details)
                <?php $total += $details['price'] * $details['quantity'] ?>
            @endforeach
            <div class="dropdown-item total-price d-flex justify-content-between"><span>Total</span><strong class="text-primary">${{ $total }}</strong></div>
            <!-- call to actions-->
            <div class="dropdown-item CTA d-flex"><a href="{{ url('cart') }}" class="btn btn-template wide">View Cart</a><a href="checkout1.html" class="btn btn-template wide">Checkout</a></div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </nav>
</header>
