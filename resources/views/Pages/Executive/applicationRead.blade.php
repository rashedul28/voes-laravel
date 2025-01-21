@extends('Layouts.navbar')
@section('content')


<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Application</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Application</li>
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
        <a href="/application/view" class="btn btn-primary btn-block mb-3"><i class="fas fa-backward"></i> Back</a>


        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-12">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">READ MAIL</h3>

            <div class="card-tools">
              <a href="#" class="btn btn-tool" title="Previous"><i class="fas fa-chevron-left"></i></a>
              <a href="#" class="btn btn-tool" title="Next"><i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <div class="mailbox-read-info">
              <h5>{{$data->subject}}</h5>
              <h6>From: {{$data->members_id}}
                <span class="mailbox-read-time float-right">15 Feb. 2015 11:03 PM</span>
              </h6>
            </div>
            <!-- /.mailbox-controls -->
            <div class="mailbox-read-message">
              {{$data->body}}
            </div>
            <!-- /.mailbox-read-message -->
          </div>
          <!-- /.card-body -->

          <!-- /.card-footer -->
          <div class="card-footer">
            <div class="float-right">
              <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> <a href="/application/feedback">Reply</a></button>
              <button type="button" class="btn btn-default"><i class="fas fa-share"></i> Forward</button>
            </div>
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