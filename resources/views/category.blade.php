@extends('master')
@section('content');

    <!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>Shop</h1><p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
              <li class="breadcrumb-item active">Shop</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <main>
      <div class="container">
        <div class="row">
          <!-- Sidebar-->
          <div class="sidebar col-xl-3 col-lg-4 sidebar">
            <div class="block">
              <h6 class="text-uppercase">Product Categories</h6>
              <ul class="list-unstyled">
                <li><a href="#" class="d-flex justify-content-between align-items-center"><span>Men's Collection</span><small>200</small></a>
                  <ul class="list-unstyled">
                    <li> <a href="#">T-shirts</a></li>
                    <li> <a href="#">Hoodies</a></li>
                    <li> <a href="#">Shorts</a></li>
                  </ul>
                </li>
                <li class="active"><a href="#" class="d-flex justify-content-between align-items-center"><span>Women's Collection</span><small>120</small></a>
                  <ul class="list-unstyled">
                    <li> <a href="#">T-shirts</a></li>
                    <li> <a href="#">Dresses</a></li>
                    <li> <a href="#">Pants</a></li>
                    <li> <a href="#">Shorts</a></li>
                  </ul>
                </li>
                <li><a href="#" class="d-flex justify-content-between align-items-center"><span>Accessories</span><small>80</small></a>
                  <ul class="list-unstyled">
                    <li> <a href="#">Wallets</a></li>
                    <li> <a href="#">Backpacks</a></li>
                    <li> <a href="#">Belts</a></li>
                    <li> <a href="#">Necklaces</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="block">
              <h6 class="text-uppercase">Filter By Price  </h6>
              <div id="slider-snap"></div>
              <div class="value d-flex justify-content-between">
                <div class="min">From <span id="slider-snap-value-lower" class="example-val"></span>$</div>
                <div class="max">To <span id="slider-snap-value-upper" class="example-val"></span>$</div>
              </div><a href="#" class="filter-submit">filter</a>
            </div>
            <div class="block">
              <h6 class="text-uppercase">Brands </h6>
              <form action="#">
                <div class="form-group mb-1">
                  <input id="brand0" type="checkbox" name="clothes-brand" checked class="checkbox-template">
                  <label for="brand0">Calvin Klein <small>(18)</small></label>
                </div>
                <div class="form-group mb-1">
                  <input id="brand1" type="checkbox" name="clothes-brand" checked class="checkbox-template">
                  <label for="brand1">Levi Strauss <small>(30)</small></label>
                </div>
                <div class="form-group mb-1">
                  <input id="brand2" type="checkbox" name="clothes-brand" class="checkbox-template">
                  <label for="brand2">Hugo Boss <small>(120)</small></label>
                </div>
                <div class="form-group mb-1">
                  <input id="brand3" type="checkbox" name="clothes-brand" class="checkbox-template">
                  <label for="brand3">Tomi Hilfiger <small>(70)</small></label>
                </div>
                <div class="form-group mb-1">
                  <input id="brand4" type="checkbox" name="clothes-brand" class="checkbox-template">
                  <label for="brand4">Tom Ford  <small>(110)</small></label>
                </div>
              </form>
            </div>
            <div class="block"> 
              <h6 class="text-uppercase">Size </h6>
              <form action="#">  
                <div class="form-group mb-1">
                  <input id="size0" type="radio" name="size" checked class="radio-template">
                  <label for="size0">Small</label>
                </div>
                <div class="form-group mb-1">
                  <input id="size1" type="radio" name="size" class="radio-template">
                  <label for="size1">Medium</label>
                </div>
                <div class="form-group mb-1">
                  <input id="size2" type="radio" name="size" class="radio-template">
                  <label for="size2">Large</label>
                </div>
                <div class="form-group mb-1">
                  <input id="size3" type="radio" name="size" class="radio-template">
                  <label for="size3">X-Large</label>
                </div>
              </form>
            </div>
          </div>
          <!-- /Sidebar end-->
          <!-- Grid -->
          <div class="products-grid col-xl-9 col-lg-8 sidebar-left">
            <header class="d-flex justify-content-between align-items-start"><span class="visible-items">Showing <strong>1-15 </strong>of <strong>158 </strong>results</span>
              <select id="sorting" class="bs-select">
                <option value="newest">Newest</option>
                <option value="oldest">Oldest</option>
                <option value="lowest-price">Low Price</option>
                <option value="heigh-price">High Price</option>
              </select>
            </header>
            <div class="row">
              <!-- item-->
              <div class="item col-xl-4 col-md-6">
                <div class="product is-gray">
                  <div class="image d-flex align-items-center justify-content-center">
                    <div class="ribbon ribbon-primary text-uppercase">Sale</div><img src="img/hoodie-man-1.png" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                      <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                    </div>
                  </div>
                  <div class="title"><small class="text-muted">Men Wear</small><a href="detail.html">
                      <h3 class="h6 text-uppercase no-margin-bottom">Elegant Lake</h3></a><span class="price text-muted">$40.00</span></div>
                </div>
              </div>
              <div class="item col-xl-4 col-md-6">
                <div class="product is-gray">
                  <div class="image d-flex align-items-center justify-content-center"><img src="img/hoodie-man-2.png" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                      <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                    </div>
                  </div>
                  <div class="title"><small class="text-muted">Men Wear</small><a href="detail.html">
                      <h3 class="h6 text-uppercase no-margin-bottom">Elegant Blue</h3></a><span class="price text-muted">$40.00</span></div>
                </div>
              </div>
              <div class="item col-xl-4 col-md-6">
                <div class="product is-gray">
                  <div class="image d-flex align-items-center justify-content-center">
                    <div class="ribbon ribbon-success text-uppercase">New</div><img src="img/hoodie-man-3.png" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                      <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                    </div>
                  </div>
                  <div class="title"><small class="text-muted">Men Wear</small><a href="detail.html">
                      <h3 class="h6 text-uppercase no-margin-bottom">Elegant Black</h3></a><span class="price text-muted">$40.00</span></div>
                </div>
              </div>
              <div class="item col-xl-4 col-md-6">
                <div class="product is-gray">
                  <div class="image d-flex align-items-center justify-content-center"><img src="img/hoodie-man-4.png" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                      <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                    </div>
                  </div>
                  <div class="title"><small class="text-muted">Men Wear</small><a href="detail.html">
                      <h3 class="h6 text-uppercase no-margin-bottom">Elegant Gray</h3></a><span class="price text-muted">$40.00</span></div>
                </div>
              </div>
              <div class="item col-xl-4 col-md-6">
                <div class="product is-gray">
                  <div class="image d-flex align-items-center justify-content-center">
                    <div class="ribbon ribbon-info text-uppercase">Fresh</div><img src="img/hoodie-woman-1.png" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                      <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                    </div>
                  </div>
                  <div class="title"><small class="text-muted">Women Wear</small><a href="detail.html">
                      <h3 class="h6 text-uppercase no-margin-bottom">Elegant Gray</h3></a><span class="price text-muted">$40.00</span></div>
                </div>
              </div>
              <div class="item col-xl-4 col-md-6">
                <div class="product is-gray">
                  <div class="image d-flex align-items-center justify-content-center"><img src="img/hoodie-woman-2.png" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                      <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                    </div>
                  </div>
                  <div class="title"><small class="text-muted">Women Wear</small><a href="detail.html">
                      <h3 class="h6 text-uppercase no-margin-bottom">Elegant Black</h3></a><span class="price text-muted">$40.00</span></div>
                </div>
              </div>
              <div class="item col-xl-4 col-md-6">
                <div class="product is-gray">
                  <div class="image d-flex align-items-center justify-content-center">
                    <div class="ribbon ribbon-danger text-uppercase">Sold</div><img src="img/hoodie-woman-3.png" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                      <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                    </div>
                  </div>
                  <div class="title"><small class="text-muted">Women Wear</small><a href="detail.html">
                      <h3 class="h6 text-uppercase no-margin-bottom">Elegant Blue</h3></a><span class="price text-muted">$40.00</span></div>
                </div>
              </div>
              <div class="item col-xl-4 col-md-6">
                <div class="product is-gray">
                  <div class="image d-flex align-items-center justify-content-center"><img src="img/hoodie-woman-4.png" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                      <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                    </div>
                  </div>
                  <div class="title"><small class="text-muted">Women Wear</small><a href="detail.html">
                      <h3 class="h6 text-uppercase no-margin-bottom">Elegant Lake</h3></a><span class="price text-muted">$40.00</span></div>
                </div>
              </div>
              <div class="item col-xl-4 col-md-6">
                <div class="product is-gray">
                  <div class="image d-flex align-items-center justify-content-center">
                    <div class="ribbon ribbon-info text-uppercase">Fresh</div><img src="img/hoodie-woman-1.png" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                      <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                    </div>
                  </div>
                  <div class="title"><small class="text-muted">Women Wear</small><a href="detail.html">
                      <h3 class="h6 text-uppercase no-margin-bottom">Elegant Gray</h3></a><span class="price text-muted">$40.00</span></div>
                </div>
              </div>
              <div class="item col-xl-4 col-md-6">
                <div class="product is-gray">
                  <div class="image d-flex align-items-center justify-content-center"><img src="img/hoodie-woman-2.png" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                      <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                    </div>
                  </div>
                  <div class="title"><small class="text-muted">Women Wear</small><a href="detail.html">
                      <h3 class="h6 text-uppercase no-margin-bottom">Elegant Black</h3></a><span class="price text-muted">$40.00</span></div>
                </div>
              </div>
              <div class="item col-xl-4 col-md-6">
                <div class="product is-gray">
                  <div class="image d-flex align-items-center justify-content-center">
                    <div class="ribbon ribbon-danger text-uppercase">Sold</div><img src="img/hoodie-woman-3.png" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                      <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                    </div>
                  </div>
                  <div class="title"><small class="text-muted">Women Wear</small><a href="detail.html">
                      <h3 class="h6 text-uppercase no-margin-bottom">Elegant Blue</h3></a><span class="price text-muted">$40.00</span></div>
                </div>
              </div>
              <div class="item col-xl-4 col-md-6">
                <div class="product is-gray">
                  <div class="image d-flex align-items-center justify-content-center"><img src="img/hoodie-woman-4.png" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                      <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                    </div>
                  </div>
                  <div class="title"><small class="text-muted">Women Wear</small><a href="detail.html">
                      <h3 class="h6 text-uppercase no-margin-bottom">Elegant Lake</h3></a><span class="price text-muted">$40.00</span></div>
                </div>
              </div>
            </div>
            <nav aria-label="page navigation example" class="d-flex justify-content-center">
              <ul class="pagination pagination-custom">
                <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span aria-hidden="true">Prev</span><span class="sr-only">Previous</span></a></li>
                <li class="page-item"><a href="#" class="page-link active">1       </a></li>
                <li class="page-item"><a href="#" class="page-link">2       </a></li>
                <li class="page-item"><a href="#" class="page-link">3       </a></li>
                <li class="page-item"><a href="#" class="page-link">4       </a></li>
                <li class="page-item"><a href="#" class="page-link">5 </a></li>
                <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">Next</span><span class="sr-only">Next     </span></a></li>
              </ul>
            </nav>
          </div>
          <!-- / Grid End-->
        </div>
      </div>
    </main>
    <!-- Overview Popup    -->
    <div id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade overview">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="icon-close"></i></span></button>
          <div class="modal-body"> 
            <div class="ribbon-primary text-uppercase">Sale</div>
            <div class="row d-flex align-items-center">
              <div class="image col-lg-5"><img src="img/shirt.png" alt="..." class="img-fluid d-block"></div>
              <div class="details col-lg-7">
                <h2>Lose Oversized Shirt</h2>
                <ul class="price list-inline">
                  <li class="list-inline-item current">$65.00</li>
                  <li class="list-inline-item original">$90.00</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
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
                  <li class="list-inline-item"><a href="#" class="btn btn-template wide"> <i class="fa fa-shopping-cart"></i>Add to Cart</a></li>
                  <li class="list-inline-item"><a href="#" class="visit-product active btn btn-template-outlined wide"> <i class="icon-heart"></i>Add to wishlist</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @stop
    @section('title')
      landing Page
    @stop
    