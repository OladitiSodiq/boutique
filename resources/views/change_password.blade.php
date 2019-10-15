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
            <div class="block-header mb-5">
              <h5>Change password  </h5>
            </div>
            <form class="content-block">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="password_old" class="form-label">Old password</label>
                    <input id="password_old" type="password" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="password_1" class="form-label">New password</label>
                    <input id="password_1" type="password" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="password_2" class="form-label">Retype new password</label>
                    <input id="password_2" type="password" class="form-control">
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="text-center">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Change password</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    @stop
    @section('title')
    Change password
    @stop
