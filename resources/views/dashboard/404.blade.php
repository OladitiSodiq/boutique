@extends('dashboard.master')


@section('content')


         <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- 404 Error Text -->
          <div class="text-center">
            <div class="error mx-auto" data-text="404">404</div>
            <p class="lead text-gray-800 mb-5">Page Not Found</p>
            <p class="text-gray-500 mb-0">You clicked on some resource that does not exist. Check properly!!!...</p>
            <a href="/">&larr; Back to Dashboard</a>
          </div>

        </div>
        <!-- /.container-fluid -->

@stop

@section('title')
    Ateeqa &middot Not found.
@stop

{{-- @section('tTitle', 'New orders') --}}