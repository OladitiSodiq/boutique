@extends('master')
@section('content');

    <!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>Shopping Wishlist</h1>
            <p class="lead text-muted">
                @if(empty($products))
                    <div class="alert alert-info">
                      <p> There are no items in your wishlist. Please check all products. Thanks. </p>
                    </div>
                @else
                    <p> You currently have 3 items in your shopping Wishlist</p>
                @endif
            </p>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
              <li class="breadcrumb-item active">Shopping Wishlist</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <main>
      <div class="container">
        <div class="row">
          <!-- Grid -->
          <div class="products-grid col-12 sidebar-none">
              <div class="row">
                  <!-- item-->
                  @if(!empty($products))
                        <?php $total =0 ?>
                        @foreach($products as $product)
                      
                       
                                <div class="item col-xl-3 col-lg-4 col-md-6">
                                  <div class="product is-gray">
                                    <div class="image d-flex align-items-center justify-content-center">
                                      <div class="ribbon ribbon-primary text-uppercase">Sale</div><img src="img/{{ $product->image }}" alt="product" class="img-fluid">
                                      <div class="hover-overlay d-flex align-items-center justify-content-center">
                                        <div class="CTA d-flex align-items-center justify-content-center"><a href="{{ url('add-to-cart/'.$product->id) }}" data-id="{{ $product->id }}" class="add-to-cart" role="button"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active">
                                            <i class="icon-search"></i>View
                                          </a> <button type="button" data-id='{{ $product->id }}' data-toggle="modal" data-target="#exampleModal" class="quick_view"><i class="fa fa-arrows-alt"></i>
                                          </button></div>
                                      </div>
                                    </div>
                                    <div class="title"><small class="text-muted">{{ $product->category }} Wear</small><a href="detail.html">
                                        <h3 class="h6 text-uppercase no-margin-bottom">{{ $product->title }}</h3></a><span class="price text-muted">${{ $product->discounted_price }}</span></div>
                                  </div>
                                </div>
                        @endforeach
                  @endif
          </div>
        </div>
      </div>
    </main>

    </section>
    <!-- Order Details Section-->
  
    @stop
    @section('title')
    
    @stop
    