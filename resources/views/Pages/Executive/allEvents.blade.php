@extends('Layouts.navbar')
@section('content')



<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Events</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Events</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>





<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">

        <!-- <button type="button" class="btn btn-outline-primary btn-block"><i class="fa fa-list"></i>ALL</button> -->

        <button type="button" class="btn btn-outline-primary btn-block"><i class="fa fa-play"></i>ONGOING</button>

        <button type="button" class="btn btn-outline-primary btn-block"><i class="fa fa-history"></i>ARCHIEVE</button>



        <!-- <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;"> -->
        <!-- <input type="text" name="table_search" class="form-control float-right" placeholder="Search"> -->

        <!-- <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div> -->
        <!-- </div>
                </div> -->
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>#Id</th>
              <th>Title</th>
              <th>Start</th>
              <th>End</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody>
            @foreach($events as $event )
            <tr>
              <td>{{$event->id}}</td>
              <td>{{$event->event_name}}</td>
              <td>{{$event->start}}</td>
              <td>{{$event->end}}</td>
              <td>{{$event->description}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>

@endsection