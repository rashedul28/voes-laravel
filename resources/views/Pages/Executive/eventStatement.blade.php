@extends('Layouts.navbar')
@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Invoice</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Invoice</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="callout callout-info">
          <div class="form-group">
            <label>Event Name</label>

            <form action="/events/eventStatementPrint" method="POST">
              @csrf
              @method("POST")

              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-clipboard"></i></span>
                <select class="form-control select2" name="event_name" style="width: 100%;">

                  @foreach ($evs as $p )
                  <option value="{{$p->event_name}}">{{$p->event_name}} _______[{{$p->id}}]</option>
                  @endforeach
                </select>
              </div>
              <!-- /.input group -->
          </div>
        </div>


        <!-- this row will not appear when printing -->
        <div class=" row no-print">
          <div class="col-12">
            <input type="submit" value="PRINT">
            <!-- <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button> -->
          </div>
        </div>
      </div>
      <!-- /.invoice -->
    </div><!-- /.col -->
  </div><!-- /.row -->
  </div><!-- /.container-fluid -->

  </form>
</section>

@endsection