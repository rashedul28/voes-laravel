@extends('Layouts.navbar')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">poster</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">



    <div class="card card-solid">
        <div class="card-body">
            <!-- <div class="row"> -->
            <div class="card card-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header text-white "
                    style="background: url('../poster-logo/v1.png') center center; height: 1000px;">
                    <h3 class="widget-user-username text-right">{{$data->event_name}}</h3>
                    <!-- <h5 class="widget-user-desc text-right">Web Designer</h5> -->
                </div>
                <!-- <div class="widget-user-image">
                        <img class="img-circle" src="../dist/img/user3-128x128.jpg" alt="User Avatar">
                    </div> -->
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header">{{$data->description}}</h5>
                                <!-- <span class="description-text">SALES</span> -->
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header">Start</h5>
                                <span class="description-text">{{$data->start}}</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4">
                            <div class="description-block">
                                <h5 class="description-header">End</h5>
                                <span class="description-text">{{$data->end}}</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.card -->

</section>

@endsection