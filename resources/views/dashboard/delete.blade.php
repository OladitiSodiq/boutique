@extends('dashboard.master')


@section('content')


          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Delete antique confirmation </h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header"> Action:</div>
                      <a class="dropdown-item" href="/dashboard/view/{{ $product->id }}">Back to product details</a>
                      {{-- <div class="dropdown-divider"></div> --}}
                      {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                    </div>
                  </div>
                </div>
            <div class="card-body">
              <div >
                    @if( Session::has('delete-flash') )
                        <div class="alert alert-info">
                            {{ Session::get('delete-flash') }}
                        </div>
                    @endif
                </div>
              <div class="alert alert-danger">
                Are you sure you want to delete with details below
                <a href="/dashboard/delete/{{ $product->id }}" class="btn btn-danger"> Yes </a>
                <a href="/dashboard/view/{{ $product->id }}" class="btn btn-success"> NO </a>
              </div>
              <div>
                <table class="table table-striped table-hover table-bordered">
                 
                  <tbody>
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
                      <td> {{ $product->full_desc }} </td>
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




@stop

@section('title')
    Ateeqa &middot View Antiques details.
@stop