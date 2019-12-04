@extends('master')
@section('content');

    <!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>Shopping cart</h1><p class="lead text-muted">You currently have {{ count((array) session('cart')) }} items in your shopping cart</p>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
              <li class="breadcrumb-item active">Shopping cart</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Shopping Cart Section-->
    <section class="shopping-cart">
      <div class="container">
        <div class="basket">
          <div class="basket-holder">
            <div class="basket-header">
              <div class="row">
                <div class="col-5">Product</div>
                <div class="col-2">Price</div>
                <div class="col-2">Quantity</div>
                <div class="col-2">Total</div>
                <div class="col-1 text-center">Remove</div>
              </div>
            </div>
            <div class="basket-body">
                
               
              <!-- Product-->
              @if(!session('cart'))
                  <div class="alert alert-info">
                    <p> There are no items in your wishlist. Please check all products. Thanks. </p>
                  </div>

						  @endif

              @if(session('cart'))
              <?php $total =0 ?>
              
              @foreach((array) session('cart') as $id => $product)
              <?php $total += $product['price'] * $product['quantity'] ?>
                    <div class="item">
                    <div class="row d-flex align-items-center">
                        <div class="col-5">
                          <div class="d-flex align-items-center"><img src="img/{{ $product['photo'] }}"  class="img-fluid">
                            <div class=""><a href="/product-{{ $product['id'] }}">
                                <h5>{{ $product['name'] }}</h5><span class="text-muted">Size: {{ $product['properties'] }}</span></a></div>
                          </div>
                        </div>
                        <div class="col-2"><div id="price{{ $product['id'] }}">{{ $product['price'] }}</div></div>
                        <div class="col-2">
                          <div class="d-flex align-items-center">
                            <div class="quantity d-flex align-items-center">
                              <div class="dec-btn" id="decrease{{ $product['id'] }}" onclick="decreaseValue({{ $product['id'] }})">-</div>
                              <input type="number" value="{{ $product['quantity'] }}" id="quantity-no-{{ $product['id'] }}" >
                              <div class="inc-btn" id="increase{{ $product['id'] }}" onclick="increaseValue({{ $product['id'] }})">+</div>
                            </div>
                          </div>
                        </div>
                        <?php $subtotal = $product['price'] * $product['quantity'] ?>
                        <div class="col-2"><span id="total{{ $product['id'] }}"> {{ $subtotal }} </span></div>
                        <div class="col-1 text-center" onclick="deleteCart({{ $product['id'] }},{{ $product['quantity'] }},{{ $product['price'] }})" ><i class="delete fa fa-trash"  ></i>
                        </div>
                    </div>  
                     <div>   </div>
                    </div>  
              </div>
              @endforeach
              @endif
          </div>
        </div>
      </div>
          <div class="container">
            <div class="CTAs d-flex align-items-center justify-content-center justify-content-md-end flex-column flex-md-row"><a href="shop.html" class="btn btn-template-outlined wide">Continue Shopping</a><a href="#" class="btn btn-template wide">Update Cart</a></div>
          </div>
    </section>
    <!-- Order Details Section-->
    <section class="order-details no-padding-top"> 
      <div class="container">
        <div class="row">                         
         
          <div class="col-lg-12 text-center CTAs"><a href="checkout1.html" class="btn btn-template btn-lg wide">Proceed to checkout<i class="fa fa-long-arrow-right"></i></a></div>
        </div>
      </div>
    </section>
    <script type="text/javascript">
    function deleteFromCart(id, qty, price) {
      // e.preventDefault();
      // alert('a');

      // var ele = $(this);
      // var id = ele.attr("data-id");
      // var id = ele.attr("data-id");

      if(confirm("Are you sure you want to delete this coin from your cart?")) {
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
              }
          });
          $.ajax({
              url: '{{ url('/deleteCart') }}',
              method: "post",
              data: { id: id},
              success: function (data) {
                  switch(data.error_no){
              
                      case 4:
                          sessionStorage.setItem("cart", data.json);
                          $('#tr' + id).html('');
                          $('#cart-qty').html(data.count);
                          if(data.count == 0){
                              $('#holding-cart-items').html('<h2> Your cart is empty. </h2>');
                              $('.cart-dropdown').html('<h5 id="cart-empty-text"> Your cart is empty. </h5>');
                          }else{
                              
                              $('#product-widget-'+ id).remove();
                              var total =  parseInt($('#cart-total').text());
                              total = total - (price * qty);
                              $('#cart-total').text(total);
                          }
                          notify('info', 'Successful', 'Item has been deleted from your cart');
                          update_full_price();
                      return;
                  }
              }
          });
      }
  };

</script>

    @stop
    @section('title')
    
    @stop
    