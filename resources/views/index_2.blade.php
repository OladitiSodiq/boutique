@extends('master')
@section('content');




    <section class="hero hero-home no-padding">
      <!-- Hero Slider-->
      <div class="owl-carousel owl-theme hero-slider">
        <div style="background: url(img/hero-bg.jpg);" class="item d-flex align-items-center has-pattern">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <h1>Hub</h1>
                <ul class="lead"> 
                  <li><strong>Bootstrap 4 E-commerce</strong> template</li>
                  <li><strong>24</strong> pages, <strong>6</strong> colour variants</li>
                  <li><strong>SCSS</strong> sources </li>
                  <li>frequent & <strong>free updates</strong></li>
                </ul><a href="#" class="btn btn-template wide shop-now">Shop Now<i class="icon-bag"> </i></a>
              </div>
            </div>
          </div>
        </div>
        <div style="background: url(img/hero-bg-2.jpg);" class="item d-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 text-white">
                <h1>Labore et dolore magna aliqua</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="#" class="btn btn-template wide shop-now">Shop Now<i class="icon-bag">  </i></a>
              </div>
            </div>
          </div>
        </div>
        <div style="background: url(img/hero-bg-3.jpg);" class="item d-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 text-white">
                <h1>Sed do eiusmod tempor</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="#" class="btn btn-template wide shop-now">Shop Now<i class="icon-bag">           </i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Categories Section-->
    <section class="categories">
      <div class="container">
        <header class="text-center">
          <h2 class="text-uppercase"><small>Top for this month</small>Our Featured Picks</h2>
        </header>
        <div class="row text-left">
          <div class="col-lg-4"><a href="#">
              <div style="background-image: url(img/banner-1.jpg);" class="item d-flex align-items-end">
                <div class="content">
                  <h3 class="h5">Men's</h3><span>New Collection</span>
                </div>
              </div></a></div>
          <div class="col-lg-4"><a href="#">
              <div style="background-image: url(img/banner-2.jpg);" class="item d-flex align-items-end">
                <div class="content">
                  <h3 class="h5">Women's</h3><span>New Collection</span>
                </div>
              </div></a></div>
          <div class="col-lg-4"><a href="#">
              <div style="background-image: url(img/banner-3.jpg);" class="item d-flex align-items-end">
                <div class="content">
                  <h3 class="h5">Accessories</h3><span>Sale of 20%</span>
                </div>
              </div></a></div>
        </div>
      </div>
    </section>
    <!-- Men's Collection -->
    <section class="men-collection gray-bg">
      <div class="container">
        <header class="text-center">
          <h2 class="text-uppercase"><small>Autumn Choice</small>Men Collection</h2>
        </header>
        <!-- Products Slider-->
        <div class="owl-carousel owl-theme products-slider">
          <!-- item-->
          <?php
          if (!empty(Session::get('cart'))) {
            $keys = [];
            $array_keys = array_keys(Session::get('cart'));
            foreach ($array_keys as $key) {
              array_push($keys, $key);
            }
          }
          
          if (!empty(Session::get('wishlist'))) {
            $wkeys = [];
            $array_keys = array_keys(Session::get('wishlist'));
            foreach ($array_keys as $key) {
              array_push($wkeys, $key);
            }
          }
          
          ?>  
					@foreach($all as $product)
              <div class="item">
                <div class="product is-gray">
                  <div class="image d-flex align-items-center justify-content-center"><img src="img/{{ $product->image }}" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                      <div class="CTA d-flex align-items-center justify-content-center">
                          @if(empty(Session::get('cart')) || !in_array($product->id, $keys) )
                       
                          	<button class="add-to-cart" id="btn-item-{{ $product->id }}" pk_id="{{ $product->id }}" onclick="addItemToCart({{ $product->id }})">
                                 <i class="fa fa-shopping-cart"></i>
                            </button >
                         
											    @endif


                          <img src="img/{{ $product->image }}" >
                          <a href="detail.html" class="visit-product active">
                            <i class="icon-search"></i>View
                          </a>
                          <button type="button" data-id='{{ $product->id }}' data-toggle="modal" data-target="#exampleModal" class="quick_view"><i class="fa fa-arrows-alt"></i>
                          </button>
                    </div>
                    </div>
                  </div>
                  <div class="title"><a href="detail.html">
                      <h3 class="h6 text-uppercase no-margin-bottom">Elegant Lake</h3></a><span class="price text-muted">$40.00</span></div>
                </div>
              </div>
          @endforeach
         
        </div>
      </div>
    </section>
    <!-- Divider Section-->
    <section style="background: url(img/divider-bg.jpg);" class="divider">
      <div class="container"> 
        <div class="row">
          <div class="col-lg-6">
            <p>Old Collection                  </p>
            <h2 class="h1 text-uppercase no-margin">Huge Sales</h2>
            <p>At our outlet stores</p><a href="#" class="btn btn-template wide shop-now">Shop Now<i class="icon-bag"></i></a>
          </div>
        </div>
      </div>
    </section>
    <!-- Women's Collection -->
    <section class="women-collection">
      <div class="container">
        <header class="text-center">
          <h2 class="text-uppercase"><small>Ladies' Time</small>Women Collection</h2>
        </header>
        <!-- Products Slider-->
        <div class="owl-carousel owl-theme products-slider">
          <!-- item-->
          @foreach($female as $product)
          <div class="item">
            <div class="product is-gray">
              <div class="image d-flex align-items-center justify-content-center"><img src="img/hoodie-woman-1.png" alt="product" class="img-fluid">
                <div class="hover-overlay d-flex align-items-center justify-content-center">
                  <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal1" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                </div>
              </div>
              <div class="title"><a href="detail.html">
                  <h3 class="h6 text-uppercase no-margin-bottom">Elegant Gray</h3></a><span class="price text-muted">$40.00</span></div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- Blog Section-->
    <section class="blog gray-bg">
      <div class="container">
        <header class="text-center">
          <h2 class="text-uppercase"><small>Made it hard way</small>Latest from the blog</h2>
        </header>
        <div class="row">
          <!-- post-->
          <div class="col-lg-6">
            <div class="post post-gray d-flex align-items-center flex-md-row flex-column">
              <div class="thumbnail d-flex-align-items-center justify-content-center"><img src="img/blog-1.jpg" alt="..."></div>
              <div class="info"> 
                <h4 class="h5"> <a href="post.html">Newest photo apps          </a></h4><span class="date"><i class="fa fa-clock-o"></i>May 10th 2016</span>
                <p>ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Aenean ultricies mi vitae est. </p><a href="post.html" class="read-more">Read More<i class="fa fa-long-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <!-- /end post-->
          <!-- post-->
          <div class="col-lg-6">
            <div class="post post-gray d-flex align-items-center flex-md-row flex-column">
              <div class="thumbnail d-flex-align-items-center justify-content-center"><img src="img/blog-2.jpg" alt="..."></div>
              <div class="info"> 
                <h4 class="h5"> <a href="post.html">Best books about Photography          </a></h4><span class="date"><i class="fa fa-clock-o"></i>May 10th 2016</span>
                <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.  Mauris placerat eleifend leo.</p><a href="post.html" class="read-more">Read More<i class="fa fa-long-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <!-- /end post-->
        </div>
      </div>
    </section>
    <!-- Brands Section-->
    <section class="brands">
      <div class="container">
        <!-- Brands Slider-->
        <div class="owl-carousel owl-theme brands-slider">
          <!-- item-->
          <div class="item d-flex align-items-center justify-content-center">
            <div class="brand d-flex align-items-center"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-2/img/brand-1.svg" alt="..." class="img-fluid"></div>
          </div>
          <!-- item-->
          <div class="item d-flex align-items-center justify-content-center">
            <div class="brand d-flex align-items-center"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-2/img/brand-2.svg" alt="..." class="img-fluid"></div>
          </div>
          <!-- item-->
          <div class="item d-flex align-items-center justify-content-center">
            <div class="brand d-flex align-items-center"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-2/img/brand-3.svg" alt="..." class="img-fluid"></div>
          </div>
          <!-- item-->
          <div class="item d-flex align-items-center justify-content-center">
            <div class="brand d-flex align-items-center"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-2/img/brand-4.svg" alt="..." class="img-fluid"></div>
          </div>
          <!-- item-->
          <div class="item d-flex align-items-center justify-content-center">
            <div class="brand d-flex align-items-center"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-2/img/brand-5.svg" alt="..." class="img-fluid"></div>
          </div>
          <!-- item-->
          <div class="item d-flex align-items-center justify-content-center">
            <div class="brand d-flex align-items-center"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-2/img/brand-6.svg" alt="..." class="img-fluid"></div>
          </div>
          <!-- item-->
          <div class="item d-flex align-items-center justify-content-center">
            <div class="brand d-flex align-items-center"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-2/img/brand-1.svg" alt="..." class="img-fluid"></div>
          </div>
          <!-- item-->
          <div class="item d-flex align-items-center justify-content-center">
            <div class="brand d-flex align-items-center"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-2/img/brand-2.svg" alt="..." class="img-fluid"></div>
          </div>
          <!-- item-->
          <div class="item d-flex align-items-center justify-content-center">
            <div class="brand d-flex align-items-center"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-2/img/brand-3.svg" alt="..." class="img-fluid"></div>
          </div>
          <!-- item-->
          <div class="item d-flex align-items-center justify-content-center">
            <div class="brand d-flex align-items-center"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-2/img/brand-4.svg" alt="..." class="img-fluid"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Overview Popup    -->
    <div id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade overview">
      {{-- <div role="document" class="modal-dialog"> --}}
        <div class="modal-content">
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="icon-close"></i></span></button>
          <div class="modal-body"> 
            <div class="ribbon-primary text-uppercase">Sale</div>
            <div class="row d-flex align-items-center">
              <div class="image col-lg-5"><img id="modal-img" src="" class="img-fluid d-block"></div>
              <div class="details col-lg-7">
                <h2 id="modal-product-name"></h2>
                <ul class="price list-inline">
                  <li class="list-inline-item current" id="modal-product-discountedprice">$65.00</li>
                  <li class="list-inline-item original" id ="modal-product-fullprice">$90.00</li>
                </ul>
                <p id ="modal-product-shortdesc"></p>
                <div class="d-flex align-items-center">
                  <div class="quantity d-flex align-items-center">
                    <div class="dec-btn">-</div>
                    <input type="text" value="1" class="quantity-no">
                    <div class="inc-btn">+</div>
                  </div>
                  <select id="size" class="bs-select">
                    <option value="small">Small</option>
                    <option value="meduim">Medium</option>
                    <option value="large">Large</option>
                    <option value="x-large">X-Large</option>
                  </select>
                </div>
                <ul class="CTAs list-inline">
                  <li class="list-inline-item"><button id="modal-add-to-cart" data-id='' class="btn btn-template wide"> <i class="fa fa-shopping-cart"></i>Add to Cart</button></li>
                  <li class="list-inline-item"><button data-id='' onclick="addItemToWishlist(this.id, 'desc')" class="visit-product active btn btn-template-outlined wide"> <i class="icon-heart"></i>Add to wishlist</button></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="scrollTop"><i class="fa fa-long-arrow-up"></i></div>
    <meta name="_token" content="{{ csrf_token() }}">
@stop

    @section('title')
      landing Page
    @stop
    

