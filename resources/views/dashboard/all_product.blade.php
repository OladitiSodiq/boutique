@extends('dashboard.master')


@section('content')


          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">All antiques in store</h6>
            </div>
            <div class="card-body">
               <div >
                    @if( Session::has('delete-flash') )
                        <div class="alert alert-info">
                            {{ Session::get('delete-flash') }}
                        </div>
                    @endif
                </div>

              <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Inv. No.</th>
                      <th>Category</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  {{-- <tfoot>
                    <tr>
                     <th>Image</th>
                      <th>Title</th>
                      <th>Inv. No.</th>
                      <th>Category</th>
                      <th>Price</th>
                      <th>Action</th>
                    </tr>
                  </tfoot> --}}
                  <tbody>
                      <?php 
                        function format_id($id){
                            $zero = ['0', '00', '000'];
                            $a = str_split($id);
                            if (count($a) < 4) {
                                $less = 4 - count($a);
                                $item_id = $zero[$less - 1] . $id;
                            }else{
                                $item_id = $id;
                            }

                            return $item_id;
                        }
                       
                       
                    ?>
                     @foreach ($items as $item)
                        <tr>
                            <td>
                                <a data-fancybox="images" data-caption="Preview" href="/antique/{{ $item->image }}"><img class="img img-responsive" src="/antique/{{ $item->image }}" height="50"/></a>
                            </td>
                            <td> {{ $item->title }} </td>

                            <td>{{ format_id($item->id) }}</td>
                            
                            <td>  {{ str_replace('-', ' ', ucfirst($item->category) ) }} </td>
                            <td> {{ $item->quantity }} </td>
                            <td> ${{ $item->discounted_price }} </td>
                            <td>
                                {{-- <a class="btn btn-info btn-sm" href="/dashboard/modify/{{ $item->id }}" > <i class="fa fa-pen"></i> </a> --}}
                                <a class="btn btn-primary btn-sm" href="/dashboard/view/{{ $item->id }}" > <i class="fa fa-eye"></i> </a>
                                <a class="btn btn-danger btn-sm" href="/dashboard/confirm-delete/{{ $item->id }}" > <i class="fa fa-trash"></i> </a>


                            </td>
                        </tr>
                    @endforeach
                   

                  </tbody>
                </table>
              </div>
            </div>
          </div>




@stop

@section('title')
    Ateeqa &middot All Antiques.
@stop