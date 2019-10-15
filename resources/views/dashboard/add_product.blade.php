@extends('dashboard.master')


@section('content')
<style type="text/css">
    .upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
  cursor: pointer;

}


.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
  cursor: pointer;
}

</style>
<!-- page content -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Add new antique</h6>
            </div>
            <div class="card-body">
                        <div class="x_content" id="x_c_inventory">
                             @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                             <form method="post" action="/dashboard/add-new-product" id="theForm" class="form-horizontal form-label-left" enctype="multipart/form-data">
      
                                {{ csrf_field() }}
                            
                                 <div style="margin-top: 10px;">
                                    @if( Session::has('flash') )
                                        <div class="alert alert-info">
                                            {{ Session::get('flash') }}
                                        </div>
                                    @endif
                                </div>
                           
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Antique category:</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select name="category" onchange="" id="" class="select2_single form-control">
                                        <option value="">Select antique category...</option>
                                        <option value="antique"> Antiques </option>
                                        <option value="jewelry"> Jewelry </option>
                                        <option value="islamic-art"> Islamic Art </option>
                                        <option value="antiquities"> Antiquities </option>
                                        <option value="silver"> Silver </option>
                                        <option value="beads"> Beads </option>
                                        
                                    </select>
                                </div>
                            </div>
                          
                          
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Name of antique:</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="title" type="text" id="" value="{{ old('title') }}" class="form-control" placeholder="Enter name of antique" />
                                </div>
                            </div>


                             <div class="ln_solid"></div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Regular Price:</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="full_price" type="text" value="{{ old('full_price') }}" id="" class="form-control" placeholder="Enter regular price" />
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sales Price:</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="discounted_price" type="text" value="{{ old('discounted_price') }}" id="" class="form-control" placeholder="Enter sales price (if any)" />
                                </div>
                            </div>
                            
                           {{--  <div class="ln_solid"></div>


                            <div class="form-group">
                                <div class="upload-btn-wrapper">
                                  <button class="btn">Upload antique image(s)</button>
                                  <input type="file" multiple required name="myfile" />
                                </div>
                            </div>

                            <div class="ln_solid"></div> --}}

                            <div class="ln_solid"></div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Upload antique image</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="file" type="file" multiple value="" id="" class="form-" />
                                </div>
                            </div>

                            <div class="ln_solid"></div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Short Description:</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <textarea name="short_desc" rows="2" cols="20" id="" class="form-control resizable_textarea" placeholder="Enter short description">{{ old('short_desc') }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Full description:</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <textarea name="full_desc" rows="2" cols="20" id="txtObvLegendDesc" class="form-control resizable_textarea" placeholder="Enter full description">{{ old('full_desc') }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">No of item in stock:</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="quantity" type="text" value="{{ old('quantity') }}" id="" class="form-control" placeholder="Enter no of antique in store" />
                                </div>
                            </div>

                             <div class="form-group">
                                {{-- <div class="col-md-6 col-sm-6 col-xs-12"></div> --}}
                                <div class="">
                                    <input type="submit" name="submit" value="Add antique" id="" class="btn btn-success" />
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
    Ateeqa &middot Add new antique.
@stop

{{-- @section('tTitle', 'Add new antique') --}}