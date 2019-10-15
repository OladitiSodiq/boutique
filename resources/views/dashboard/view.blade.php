@extends('dashboard.master')


@section('content')


          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">View antique description</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header"> Action:</div>
                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal">Add to stock quantity</a>
                      <a class="dropdown-item" href="/dashboard/modify/{{ $product->id }}">Edit antique details</a>
                      <a class="dropdown-item" href="/dashboard/confirm-delete/{{ $product->id }}">Delete antique</a>
                      {{-- <div class="dropdown-divider"></div> --}}
                      {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                    </div>
                  </div>
                </div>
            <div class="card-body">
              <div>
                <table class="table table-striped table- table-bordered">
                 
                  <tbody>
                     @if( Session::has('flash-added-quantity') )
                      <div class="alert alert-info">
                          {{ Session::get('flash-added-quantity') }}
                      </div>
                    @endif
                    <tr>
                      <td> Image </td>
                      <td> <img src="/antique/{{ $product->image }}"> </td>
                    </tr>
                    <tr>
                      <td> Name </td>
                      <td> {{ $product->title }} </td>
                    </tr>
                    <tr>
                      <td> Full Price </td>
                      <td> ${{ $product->full_price }} </td>
                    </tr>
                    <tr>
                      <td> Discounted Price </td>
                      <td> ${{ $product->discounted_price }} </td>
                    </tr>
                    <tr>
                      <td> Quantity </td>
                      <td> {{ $product->quantity }} </td>
                    </tr>
                    <tr>
                      <td> Short Description </td>
                      <td> {{ $product->short_desc }} </td>
                    </tr>
                    <tr>
                      <td> Full description </td>
                      <td> {{{ nl2br($product->full_desc)  }}} </td>
                    </tr>
                    <tr>
                      <td> Category </td>
                      <td> {{ str_replace('-', ' ', $product->category)  }} </td>
                    </tr>
                     
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <p> Add to stock quantity </p>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
         @if( Session::has('flash-added-quantity') )
              <div class="alert alert-info">
                  {{ Session::get('flash-added-quantity') }}
              </div>
          @endif
        <div> Quantity Left: <h4> {{ ucfirst($product->quantity)  }} </h4>  </div>
        <div class="mb-2">
            <form method="post" action="/dashboard/add-to">
                 
             
              {{ csrf_field() }}

              <label>Add</label>
              <input type="text" name="_qty" class="form-control" placeholder="Quantity" min="1" required="">

              <input type="hidden" name="_id" value="{{ $product->id }}">

              <div class="mt-4">
                  <input type="submit" name="" class="btn btn-primary btn-s" value="Add quantity">
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
    Ateeqa &middot View Antiques details.
@stop