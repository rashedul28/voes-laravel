@extends('Layouts.navbar')
@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Event Funding</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Event Funding</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>




<section class="content">
  <div class="row">

    <div class="col-md-6">
      <div class="card card-secondary">
        <div class="card-header">
          <h3 class="card-title">Funding</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="form-group">
            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <label>Event Name</label>

            <form action="/events/fundingLog/submit" method="post">
              @csrf
              @method('POST')
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-clipboard"></i></span>
                <select class="form-control select2" name="eventName" style="width: 100%;" required>

                  @foreach ( $lists as $list)
                  <option value="{{$list->event_name}}">{{$list->id}} {{$list->event_name}}</option>
                  @endforeach
                </select>
              </div>
              <!-- /.input group -->
          </div>

          <div class="form-group">
            <label>Amount</label>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
              </div>
              <input type="number" class="form-control" name="amount" required>
            </div>
            <!-- /.input group -->
          </div>







        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <div class="row">
    <div class="col-12">

      <input type="submit" class="btn btn-success float-left">
    </div>
  </div>
  </form>
</section>



@endsection