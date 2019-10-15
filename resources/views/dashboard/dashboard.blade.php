@extends('dashboard.master')


@section('content')
<!-- page content -->


                   <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
              <div class="card  mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Orders Overview</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right  animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Orders Action:</div>
                      <a class="dropdown-item" href="/dashboard/orders/new">New orders</a>
                      <a class="dropdown-item" href="/dashboard/orders/all">All Orders</a>
                      {{-- <div class="dropdown-divider"></div> --}}
                      {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                   <div class="row">

                      

                        <div class="col-xl-3 col-md-6 mb-4">
                          <div class="card border-left-success  h-100 py-2">
                            <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> New Orders </div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800"> {{ $data['new_orders_count'] }} </div>
                                </div>
                                <div class="col-auto">
                                  <i class="fas fa-handshake fa-2x text-gray-300"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                       
                        <div class="col-xl-3 col-md-6 mb-4">
                          <div class="card border-left-warning  h-100 py-2">
                            <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Previous Orders</div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800"> {{ $data['all_orders_count'] - $data['new_orders_count'] }} </div>
                                </div>
                                <div class="col-auto">
                                  <i class="fas fa-handshake fa-2x text-gray-300"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>


                        <div class="col-xl-3 col-md-6 mb-4">
                          <div class="card border-left-success  h-100 py-2">
                            <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> Total Orders </div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800"> {{ $data['all_orders_count'] }} </div>
                                </div>
                                <div class="col-auto">
                                  <i class="fas fa-handshake fa-2x text-gray-300"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

               
                        
                      </div>
                </div>
              </div>
            </div>


          </div>

          <!-- Content Row -->


               <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
              <div class="card  mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Product Overview</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right  animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Product Action:</div>
                      <a class="dropdown-item" href="/dashboard/add-new-product">Add new antique</a>
                      <a class="dropdown-item" href="/dashboard/catalogue">View all antiques</a>
                      {{-- <div class="dropdown-divider"></div> --}}
                      {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                   <div class="row">

 


                        <div class="col-xl-3 col-md-6 mb-4">
                          <div class="card border-left-warning  h-100 py-2">
                            <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-danger text-uppercase mb-1"> Total No. of Antiques </div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800"> {{ $data['all_product_count'] }} </div>
                                </div>
                                <div class="col-auto">
                                  <i class="fas fa-dolly fa-2x text-gray-300"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <?php
                        function blColor(){
                         $arr = ['success', 'danger', 'info', 'primary'];
                         $r = array_rand($arr);
                         return $arr[$r];
                        }

                        ?>


                          @foreach($data['categories'] as $category)
                            <div class="col-xl-3 col-md-6 mb-4">
                              <div class="card border-left-{{ blColor() }}  h-100 py-2">
                                <div class="card-body">
                                  <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-{{ blColor() }} text-uppercase mb-1"> No. of {{ str_replace('-', ' ', $category->category) }} </div>
                                      <div class="h5 mb-0 font-weight-bold text-gray-800"> {{ $category->count_row }} </div>
                                    </div>
                                    <div class="col-auto">
                                      <i class="fas fa-dolly fa-2x text-gray-300"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        @endforeach
 
                        
                      </div>
                </div>
              </div>
            </div>


          </div>

          <!-- Content Row -->



<!-- /page content -->
@stop


@section('title')
    Ateeqa &middot Dashboard.
@stop

@section('tTitle', 'Dashboard')