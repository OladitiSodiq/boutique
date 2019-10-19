@extends('master')
@section('content');

    <!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>Your profile</h1>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
              <li class="breadcrumb-item active">Your profile</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="padding-small">
      <div class="container">
        <div class="row">
          <!-- Customer Sidebar-->
          <div class="customer-sidebar col-xl-3 col-lg-4 mb-md-5">
            @include('sidebar')
          </div>
          <div class="col-lg-8 col-xl-9 pl-lg-3">
            <form action="/account_update" method="post">
                  
              @if ($errors->any())
                  <div >
                      <ul class="alert alert-danger">
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

              <div style="margin: 30px;">
                  @if( Session::has('flash') )
                      <div class="alert alert-danger">
                          {{ Session::get('flash') }}
                      </div>
                  @endif
              </div>
                 {{ csrf_field() }}
          
            <div class="block-header mb-5">
              <h5>Personal details</h5>
            </div>
            <form class="content-block" >
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="firstname" class="form-label">Firstname</label>
                    <input id="firstname" type="text" value="{{ $user->firstname }}" name="firstname" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="lastname" name="lastname"  class="form-label">Lastname</label>
                    <input id="lastname" type="text" value="{{ $user->lastname }}" name ="lastname" class="form-control">
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="company" class="form-label">Surname</label>
                    <input id="company" type="text" name="surname" value="{{ $user->surname }}" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input id="street" type="text" value="{{ $user->email }}" name="email" class="form-control">
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="address" class="form-label">Address</label>
                    <input id="city" type="text" value="{{ $user->address }}" name="address" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="zip" class="form-label">State</label>
                    <input id="zip" type="text" name="state" value="{{ $user->state }}" class="form-control">
                  </div>
                </div>
               
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="country" class="form-label">Country</label>
                   
                    <select class="browser-default custom-select" id="country" name="country" value="{{ $user->country }}">
                      <option selected>Open this select menu</option>
                      <option value="nigeria">Nigeria</option>
                      <option value="ghana">Ghana</option>
                      <option value="Kenya">Kenya</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="phone" class="form-label">Telephone</label>
                    <input id="phone" type="text" name="phone" value="{{ $user->phone }}" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="" class="form-label">Age</label>
                    <input id="" type="text" name="age" value="{{ $user->age }}" class="form-control">
                  </div>
                </div>
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                <div class="col-sm-12 text-center">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Save changes</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    @stop
    @section('title')
     Personal Page
    @stop
    
  
  