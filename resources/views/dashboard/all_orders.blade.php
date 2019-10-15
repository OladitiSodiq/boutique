@extends('dashboard.master')


@section('content')


          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                @if(!isset($cat))
                    <h6 class="m-0 font-weight-bold text-primary"> All Orders </h6>
                @else
                    <h6 class="m-0 font-weight-bold text-primary">All {{ $cat }} Orders </h6>
                @endif
              
              <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right  animated--fade-in" aria-labelledby="dropdownMenuLink">
                  <div class="dropdown-header">Order Action:</div>
                  <a class="dropdown-item" href="/dashboard/orders/all/processing"> Processing </a>
                  <a class="dropdown-item" href="/dashboard/orders/all/pending"> Pending </a>
                  <a class="dropdown-item" href="/dashboard/orders/all/completed"> Completed </a>
                  <a class="dropdown-item" href="/dashboard/orders/all/on-hold"> On Hold </a>
                  <a class="dropdown-item" href="/dashboard/orders/all/refunded"> Refunded </a>
                  <a class="dropdown-item" href="/dashboard/orders/all/canceled"> Canceled </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/dashboard/orders/all"> View all orders </a>
                </div>
              </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead class="text-center">
                        <tr>
                            {{-- <th scope="col">S/N</th> --}}
                            <th scope="col">Order ID</th>
                            <th scope="col">No. of items</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Order By</th>
                            <th scope="col">Status</th>
                            <th scope="col">Paid</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php $i = 1;?>
                        @foreach ($orders as $order)
                            <tr class="text-center">
                                {{-- <td> {{ $i++ }} </td> --}}
                                <td> {{ padzero($order->id) }} </td>
                                <td> {{ $order->no_of_items }} </td>
                                <td> ${{ $order->total_price }} </td>
                                <td> {{ ucfirst($order->order_by) }} </td>
                                <td class="text-center">
                                    <div class="btn btn-sm btn-{{ setStatusColor($order->status) }}">
                                        {{ ucfirst(str_replace('-', ' ', $order->status)) }}
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="btn btn-sm btn-{{ setPaidColor($order->paid) }}"> {{ $order->paid ? 'Yes' : 'No'  }} </div>
                                </td>
                                <td><a class="btn btn-primary btn-sm" href="/dashboard/order/{{ $order->id }}" ><i title="Views" class="fa fa-eye"></i></a></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
              </div>
            </div>
          </div>




@stop

@section('title')
    Ateeqa &middot All Orders.
@stop

{{-- @section('tTitle', 'New orders') --}}