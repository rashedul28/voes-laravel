@extends('Layouts.navbar')
@section('content')


<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>View Notice</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">View</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md">
        <a href="/notice/archieve" class="btn btn-primary btn-block mb-3">Back to Notice Board</a>


        <!-- /.col -->
        <div class="col-md-12">
          <div class="card card-primary card-outline">

            <!-- /.card-header -->
            <div class="card-body p-0">

              <!-- /.mailbox-read-info -->

              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                {{$data->notice}}
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-body -->

            <!-- /.card-footer -->
            <div class="card-footer">
              <div class="float-right">

                <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Print</button>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
</section>



@endsection