@extends('coin.dashboard.master')


@section('content')
<style type="text/css">
    .dash-no{
        font-size: 20px;
        color: #6173ab;
        /*font-weight: bold;*/
    }

    .fa-big{
        font-size: 15px;
    }
</style>


<div class="right_col" role="main">


<script type="text/javascript">
function pageLoad() {

    if ($("#gvInventory").length > 0) {
        $("#gvInventory").DataTable({
            "responsive": true,
            "autoWidth": false,
            "pageLength": 100,
            "columnDefs": [{
                    "targets": 0,
                    "searchable": false,
                    "orderable": false,
                },
                {
                    "targets": 4,
                    "searchable": false,
                    "orderable": false
                }
            ]

        }).columns.adjust().responsive.recalc();
    }

    $(".right_col").css('min-height', $(".row").height());


};


function BeginRequestHandler(sender, args) {
    $("#loading-indicator").show();
}

function EndRequestHandler(sender, args) {
    $("#loading-indicator").hide();

}
</script>
<div id="ctl00_upDefault">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Home</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="x_planel">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> Auction Coin <small>  </small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div>
                                <i class="fa fa-coins"></i>
                                <span class="dash-no"> {{ $data['auction_count'] }} coins </span>
                            </div>
                        </div>
                         
                    </div>
                </div>
            </div>

               <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="x_planel">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> Selling Coin <small>  </small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div>
                                <i class="fa fa-coins"></i>
                                <span class="dash-no"> {{ $data['selling_count'] }} coins </span>
                            </div>
                        </div>
                         
                    </div>
                </div>
            </div>

               <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="x_planel">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> Coin Total <small>  </small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div>
                                <i class="fa fa-coins"></i>
                                <span class="dash-no"> {{ $data['auction_count'] +  $data['selling_count'] }} coins </span>
                            </div>
                        </div>
                         
                    </div>
                </div>
            </div>
        </div>


        <div class="page-title">
            <div class="title_left">
                <h3> Orders </h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            

            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="x_planel">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> New Orders <small>  </small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div>
                                <i class="fa fa-hands-helping"></i>
                                <span class="dash-no"> 48 Orders </span>
                            </div>
                        </div>
                         
                    </div>
                </div>
            </div>

               <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="x_planel">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> Old Orders <small>  </small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div>
                                <i class="fa fa-hands-helping"></i>
                                <span class="dash-no"> 48 Orders </span>
                            </div>
                        </div>
                         
                    </div>
                </div>
            </div>



               <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="x_planel">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> All Orders <small>  </small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div>
                                <i class="fa fa-hands-helping "></i>
                                <span class="dash-no"> 48 Orders </span>
                            </div>
                        </div>
                         
                    </div>
                </div>
            </div>
        </div>






        <div class="page-title">
            <div class="title_left">
                <h3>Representation</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            

            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="x_planel">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> New representation <small>  </small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div>
                                <i class="fa fa-user"></i>
                                <span class="dash-no"> {{ $data['rep_ack'] }} Reps </span>
                            </div>
                        </div>
                         
                    </div>
                </div>
            </div>

               <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="x_planel">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> Old representation <small>  </small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div>
                                <i class="fa fa-user"></i>
                                <span class="dash-no"> {{ $data['rep_not_ack'] }} Reps </span>
                            </div>
                        </div>
                         
                    </div>
                </div>
            </div>

               <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="x_planel">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> All representation <small>  </small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div>
                                <i class="fa fa-user"></i>
                                <span class="dash-no"> {{ $data['rep_ack'] +  $data['rep_not_ack']  }} Reps </span>
                            </div>
                        </div>
                         
                    </div>
                </div>
            </div>
        </div>






        <div class="page-title">
            <div class="title_left">
                <h3> Consign </h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            

            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="x_planel">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> New consign <small>  </small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div>
                                <i class="fa fa-plus-square"></i>
                                <span class="dash-no"> {{ $data['consign_ack'] }} Consign </span>
                            </div>
                        </div>
                         
                    </div>
                </div>
            </div>

               <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="x_planel">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> Old consign <small>  </small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div>
                                <i class="fa fa-plus-square"></i>
                                <span class="dash-no"> {{ $data['consign_not_ack'] }} Consign </span>
                            </div>
                        </div>
                         
                    </div>
                </div>
            </div>

               <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="x_planel">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> All Consign <small>  </small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div>
                                <i class="fa fa-plus-square"></i>
                                <span class="dash-no"> {{ $data['consign_ack'] + $data['consign_not_ack']  }} Consign </span>
                            </div>
                        </div>
                         
                    </div>
                </div>
            </div>
        </div>




{{-- //doint come here --}}

    </div>
</div>

</script>

</div>

@stop

@section('title')
    Ateeqa coin dashboard
@stop