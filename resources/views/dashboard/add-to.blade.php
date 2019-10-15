@extends('dashboard.master')


@section('content')
<!-- page content -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Add new antique</h6>
            </div>
            <div class="card-body">
                <div>
                    <h4> {{ $quantity }} of antique remaining in store. </h4>
                </div>
                        <div class="x_content" id="x_c_inventory">
                             @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                             <form method="post" action="/dashboard/add-to" id="theForm" class="form-horizontal form-label-left" enctype="multipart/form-data">
      
                                {{ csrf_field() }}
                            
                                 <div style="margin-top: 70px;">
                                    @if( Session::has('flash') )
                                        <div class="alert alert-info">
                                            {{ Session::get('flash') }}
                                        </div>
                                    @endif
                                </div>
                           
                          
                          
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Numbers to add:</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="_qty" type="text" id="" class="form-control" placeholder="Enter quantity of antique to add" />
                                </div>
                            </div>

                            <input type="hidden" name="_id" value="{{ $id }}">


                             <div class="form-group">
                                {{-- <div class="col-md-6 col-sm-6 col-xs-12"></div> --}}
                                <div class="">
                                    <input type="submit" name="submit" value="Add to antique" id="" class="btn btn-success" />
                                    {{-- <input type="submit" name="btnCancel" value="Cancel" id="ctl00_btnCancel" class="btn btn-primary pull-right" /> --}}
                                </div>
                            </div>
                            </form>

                        </div>
            </div>
          </div>

<!-- /page content -->
@stop


@section('title')
    Ateeqa &middot Add to antique.
@stop

{{-- @section('tTitle', 'Add new antique') --}}