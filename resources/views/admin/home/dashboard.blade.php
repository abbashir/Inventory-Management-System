@extends('admin.master')
@section('title','Dashboard')

@section('body_content')
  
  
 <!-- Statistics -->
<div class="row">

    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="p-2 text-xs-center bg-cyan bg-darken-2 media-left media-middle">
                        <i class="icon-camera7 font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-cyan white media-body">
                        <h5>New Products</h5>
                        <h5 class="text-bold-400">28</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="p-2 text-xs-center bg-deep-orange bg-darken-2 media-left media-middle">
                        <i class="icon-user1 font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-deep-orange white media-body">
                        <h5>Total Spend</h5>
                        <h5 class="text-bold-400">1,22,356</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="p-2 text-xs-center bg-teal bg-darken-2 media-left media-middle">
                        <i class="icon-cart font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-teal white media-body">
                        <h5>New Orders</h5>
                        <h5 class="text-bold-400">4,65,879</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="p-2 text-xs-center bg-pink bg-darken-2 media-left media-middle">
                        <i class="icon-banknote font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-pink white media-body">
                        <h5>Total Profit</h5>
                        <h5 class="text-bold-400">5.6 M</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--/ Statistics -->

<!--project Total Earning, visit & post-->
<div class="row">
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="earning-chart position-relative">
                    <div class="chart-title position-absolute mt-2 ml-2">
                        <h1 class="display-4">$9865</h1>
                        <span class="text-muted">Total Earning</span>
                    </div>
                    <canvas id="earning-chart" class="height-450 block"></canvas>
                    <div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3">
                        <a href="#" class="btn bg-cyan mr-1 white">Statistics <i class="icon-stats-bars"></i></a> <span class="text-muted">for the <a href="#" class="primary darken-2">last year.</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <canvas id="posts-visits" class="height-400"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/project Total Earning, visit & post-->
<!-- projects table with monthly chart -->

<!--/ projects table with monthly chart -->

        

@endsection
