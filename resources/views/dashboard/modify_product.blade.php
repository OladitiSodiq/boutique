@extends('dashboard.master')


@section('content')
<!-- page content -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Modify Antique Details</h6>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post" action="/dashboard/modify-product" id="theForm" class="form-horizontal form-label-left" enctype="multipart/form-data">

                    {{ csrf_field() }}
                
                     <div style="margin-top: 10px;">
                        @if( Session::has('flash') )
                            <div class="alert alert-info">
                                {{ Session::get('flash') }}
                            </div>
                        @endif
                    </div>
                    <div class="x_content" id="x_c_inventory">
                        
                            <input type="hidden" name="_id" value="{{ $product->id }}">
                           
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Antique category:</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select name="category" onchange="" id="" class="select2_single form-control">
                                        <option value="">Select antique category...</option>
                                        <option {{ $product->category == 'antique' ? 'selected' : '' }} value="antique"> Antiques </option>
                                        <option {{ $product->category == 'jewelry' ? 'selected' : '' }} value="jewelry"> Jewelry </option>
                                        <option {{ $product->category == 'islamic-art' ? 'selected' : '' }} value="islamic-art"> Islamic Art </option>
                                        <option {{ $product->category == 'antiquities' ? 'selected' : ''}} value="antiquities"> Antiquities </option>
                                        <option {{ $product->category == 'silver' ? 'selected' : ''}} value="silver"> Silver </option>
                                        <option {{ $product->category == 'beads' ? 'selected' : ''}} value="beads"> Beads </option>
                                        
                                    </select>
                                </div>
                            </div>
                          
                          
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Name of antique:</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="title" type="text" value="{{ $product->title }}" class="form-control" placeholder="Enter name of antique" />
                                </div>
                            </div>


                             <div class="ln_solid"></div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Enter discounted price:</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="discounted_price" type="text" value="{{ $product->discounted_price }}" id="" class="form-control" placeholder="Enter discounted price (if any)" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Enter full price:</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="full_price" type="text" value="{{ $product->full_price }}" id="" class="form-control" placeholder="Enter full price" />
                                </div>
                            </div>

                             <div class="ln_solid"></div>



                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Short Description:</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <textarea name="short_desc" rows="15" cols="20" id="" class="form-control resizable_textarea" placeholder="Enter short description" >{{ $product->short_desc }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Full description:</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <textarea name="full_desc" cols="20" id="txtObvLegendDesc" class="form-control resizable_textarea" placeholder="Enter full description" rows="15">{{ $product->short_desc }}</textarea>
                                </div>
                            </div>
                            
                            <div class="">
                                <input type="submit" name="submit" value="Edit Antique details" id="" class="btn btn-success" />
                                {{-- <input type="submit" name="btnCancel" value="Cancel" id="ctl00_btnCancel" class="btn btn-primary pull-right" /> --}}
                            </div>
                            
                    </div>
                </form>

              </div>
            </div>

<!-- /page content -->
@stop


@section('title')
    Ateeqa &middot Modify antique details.
@stop