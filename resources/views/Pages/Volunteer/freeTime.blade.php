@extends('Layouts.navbar2')
@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Your Free Slot</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">...</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- TO DO List -->


<div class="card">
  <div class="card-header">
    <h3 class="card-title">
      <i class="ion ion-clipboard mr-1"></i>
      Fixed your free time

      <h1>{{session('sVolunteerId')}}</h1>
    </h3>
    <form action="/my-free-time/submit" method="POST">
      @csrf
      @method('POST')

  </div>
  <!-- /.card-header -->
  <div class="card-body">




    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fa fa-check">Slot1 [9:00AM - 10:00AM]</i></span>
      <select class="form-control select2" name="slot1" style="width: 100%;">
        <option value="Free" selected>{{$data->slot1}}</option>
        <option value="Busy">Busy</option>
      </select>
    </div>

    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fa fa-check">Slot2 [10:00AM - 11:00AM]</i></span>
      <select class="form-control select2" name="slot2" style="width: 100%;">
        <option value="Free" selected>{{$data->slot2}}</option>
        <option value="Busy">Busy</option>
      </select>
    </div>

    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fa fa-check">Slot3 [11:00AM-12:00APM]</i></span>
      <select class="form-control select2" name="slot3" style="width: 100%;">
        <option value="Free" selected>{{$data->slot3}}</option>
        <option value="Busy">Busy</option>
      </select>
    </div>

    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fa fa-check">Slot4 [12:00PM - 1:00PM]</i></span>
      <select class="form-control select2" name="slot4" style="width: 100%;">
        <option value="Free" selected>{{$data->slot4}}</option>
        <option value="Busy">Busy</option>
      </select>
    </div>

    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fa fa-check">Slot5 [1:00PM - 2:00PM]</i></span>
      <select class="form-control select2" name="slot5" style="width: 100%;">
        <option value="Free" selected>{{$data->slot5}}</option>
        <option value="Busy">Busy</option>
      </select>
    </div>

    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fa fa-check">Slot6 [2:00PM - 3:00PM]</i></span>
      <select class="form-control select2" name="slot6" style="width: 100%;">
        <option value="Free" selected>{{$data->slot6}}</option>
        <option value="Busy">Busy</option>
      </select>
    </div>



  </div>
  <!-- /.card-body -->
  <div class="card-footer clearfix">
    <button type="submit" class="btn btn-primary float-right"><i class="fas fa-plus"></i>UPDATE</button>
  </div>


</div>
</form>
<!-- /.card -->
</section>
@endsection