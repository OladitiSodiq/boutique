@extends('dashboard.master')


@section('content')


          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Order Description.</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Orders Action:</div>
                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal"> Change Order Status </a>
                      {{-- <a class="dropdown-item" href="/dashboard/orders/all">All Orders</a> --}}
                      {{-- <a class="dropdown-item" href="/dashboard/invoice?order_id={{ $order_info->id }}&download=true">Download invoice</a> --}}
                      {{-- <div class="dropdown-divider"></div> --}}
                      {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                   <div class="row">
                        <div class="col-md-12">
                            <div style="margin-top: 10px;  margin-bottom: ;">
                                @if( Session::has('flash') )
                                    <div class="alert alert-success text-left">
                                        {{ Session::get('flash') }}
                                    </div>
                                @endif
                            </div>

                             @if( Session::has('order-status-flash') )
                                <div class="alert alert-info">
                                    {{ Session::get('order-status-flash') }}
                                </div>
                              @endif

                              @if ($errors->any())
                                  <div >
                                      <ul>
                                          @foreach ($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                          @endforeach
                                      </ul>
                                  </div>
                              @endif
                           
                            <div class="product-detail-wrap">
                                <div class="row">
                                <div class="col-md-3"  style="margin-top: ;">
                                    <h3 class="mb-20">Order Id</h3>
                                    <h4 class="mb-20" >  {{ padzero($order_info->id) }}</h4>
                                </div>

                                <div class="col-md-3">
                                    <h3 class="mb-20" style="margin-top: ;">No of items</h3>
                                    <h4 class="mb-20">{{ $order_info->no_of_items }}</h4>
                                </div>

                                <div class="col-md-3">
                                    <h3 style="margin-top: ;" class="mb-2">Total price</h3>
                                    <p class="mb-50"> ${{ $order_info->total_price }} </p>
                                </div>

                                <div class="col-md-3">
                                    <h3 style="margin-top: ;" class="mb-2">Status</h3>
                                    <p class="mb-50"> {{ ucfirst( str_replace('-', ' ', $order_info->status) )  }} </p>
                                </div>

                                <div class="col-md-3">
                                    <h3 style="margin-top: 30px;" class="mb-2">Payment</h3>
                                    <p class="mb-50"> {{ $order_info->paid ? 'Paid' : 'Never paid' }} </p>
                                </div>

                                <div class="col-md-3">
                                    <h3 style="margin-top: 30px;" class="mb-20">Order By</h3>
                                    <p class="mb-50"> {{ ucfirst($order_info->order_by)  }} </p>
                                </div>

                                <div class="col-md-3">
                                    <h3 style="margin-top:30px ;" class="mb-2">Pay. Method</h3>
                                    <p class="mb-50"> {{ $order_info->payment_method }} </p>
                                </div>

                                <div class="col-md-3">
                                    <h3 style="margin-top: 30px;" class="mb-2"> Amm. Paid </h3>
                                    <p class="mb-50"> {{ $order_info->ammount_paid }} </p>
                                </div>
                                </div>


                                <div class="col-md- ">
                                    <div class="bg-whitesmoke" style="background: whitesmoke; margin-top: 40px; padding: 50px;">
        

                                            <h2 style="margin-bottom: 30px;">  Products ( {{ $order_info->no_of_items }} ) </h2>
                                            <table id="cart" class="table table-hover table-condensed" >
                                                <thead>
                                                <tr>
                                                    <th style="width:60%">Product</th>
                                                    <th style="width:10%" class="text-center">Price</th>
                                                    <th style="width:8%" class="text-center">Quantity</th>
                                                    {{-- <th style="width:22%" class="text-center">Subtotal</th> --}}
                                                </tr>
                                                </thead>
                                                <tbody>
                                                  
                                                    @foreach($orders as $order)
                                         
                                                       
                                         
                                                        <tr id="tr{{ $order->id }}">
                                                            <td data-th="Product">
                                                                <div class="row">
                                                                    <div class="col-sm-3 hidden-xs"><img src="/antique/{{ $order->image }}" width="100" height="100" class="img-responsive"/></div>
                                                                    <div class="col-sm-9">
                                                                        <div class="nomargin">{{ $order->title }}</div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td data-th="Price"  class="text-center">${{ $order->discounted_price }}</td>
                                                            <td data-th="Quantity" class="text-center">
                                                              
                                                                <div  class=""> {{ $order->qty }} </div>
                                                            </td>
                                                            
                                                           
                                                           
                                                        </tr>
                                                    @endforeach
                                            
                                               
                                                </tbody>
                                               
                                            </table>

                                           {{--  <div style="background: white; max-width: 130px; padding: 20px;">
                                                TOTAL <br/>
                                                <h2 style="margin-top: 10px; margin-bottom: 0px;">$<span class='final_total'>{{ $total }} </span></h2>
                                            </div> --}}

                                           

                                            
                                        </div>
                                </div>
                              {{--  --}}
                              <div class="row mb-2 mt-2 pr-5" class="text-capitalize" style="text-transform: capitalize;">
                                  <div class="col-md-6 text-right">
                                      <h5>Contact Address</h5>
                                      <div> {{ $user->firstname . ' ' . $user->lastname }} </div>
                                      <div> {{ $user->phone }} </div>
                                      <div> {{ $user->email }} </div>
                                      <div> {{ $user->street }}, {{ $user->street2 }}</div>
                                      <div> {{ $user->city }}, {{ $user->state }}, {{ $user->country }} </div>
                                      <div> {{ $user->zip }} </div>
                                  </div>
                                  <div class="col-md-6 text-left pl-5">
                                      <h5>Shipping Details</h5>
                                        <div> {{ $user->firstname . ' ' . $user->lastname }} </div>
                                        <div> {{ $user->phone }} </div>
                                        <div> {{ $user->email }} </div>

                                      @if($order_info->shipping_is_different == 1)
                                         <div> {{ $order_info->shipping_address1 }}, {{ $user->shipping_address2 }}</div>
                                        <div> {{ $order_info->shipping_city }}, {{ $order_info->shipping_state }}, {{ $order_info->shipping_country }} </div>
                                        <div> {{ $order_info->shipping_zipcode }} </div>
                                      @else
                                        <div> {{ $user->street }}, {{ $user->street2 }}</div>
                                        <div> {{ $user->city }}, {{ $user->state }}, {{ $user->country }} </div>
                                        <div> {{ $user->zip }} </div>
                                      @endif
                                      
                                  </div>
                              </div>

                              <div class="row">
                                <div class="col-md-12">
                                  <h2> Order Note </h2>
                                  <div>{{ $order->note ? $orders->note : 'Nil' }}</div>
                                </div>
                              </div>



         
                            </div>
                        </div>
               
                        
                    </div>
                </div>
              </div>
            </div>


          </div>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <p> Change order status </p>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        @if ($errors->any())
            <div >
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

         @if( Session::has('order-status-flash') )
          <div class="alert alert-info">
              {{ Session::get('order-status-flash') }}
          </div>
        @endif
        <div> From: <h4> {{ ucfirst( str_replace('-', ' ', $order_info->status) )  }} </h4>  </div>
        <div class="mb-2">
            <form method="post" action="/dashboard/change-order-status">
                {{ csrf_field() }}
                <label>To</label>
                <select name="_status" class="form-control">
                    <option value=""> Change status to </option>
                    <option value="completed"> Completed </option>
                    <option value="processing"> Processing </option>
                    <option value="canceled"> Canceled </option>
                    <option value="failed"> Failed </option>
                    <option value="on-hold"> On hold </option>
                    <option value="pending"> Pending </option>
                    <option value="refunded"> Refunded </option>
                    <option value="new"> New </option>
                </select>

                <input type="hidden" name="_id" value="{{ $order_info->id }}">

                <div class="mt-4">
                    <input type="submit" name="" class="btn btn-primary btn-s" value="Change status">
                </div>
            </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


@stop




@section('title')
    Orders description. &middot Ateeqa.
@stop
