@extends('Layouts.navbar')
@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Free Volunteer</h1>
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

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="callout callout-info">
          <div class="form-group">
            <label>Slot</label>

            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-clipboard"></i></span>
              <select class="form-control select2" style="width: 100%;">
                <option selected="selected">9:00PM-10:00PM</option>
                <option>10:00PM-11:00PM</option>
                <option>11:00PM-12:00AM</option>
                <option>12:00AM-1:00AM</option>
                <option>1:00AM-2:00AM</option>
                <option>3:00AM-4:00AM</option>



              </select>
            </div>
            <!-- /.input group -->
          </div>
        </div>


        <!-- this row will not appear when printing -->

      </div>
      <!-- /.invoice -->
    </div><!-- /.col -->
  </div><!-- /.row -->
  <div class="card card-solid">
    <div class="card-body pb-0">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
          <div class="card bg-light d-flex flex-fill">
            <div class="card-header text-muted border-bottom-0">
              Dept Of CSE
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col-7">
                  <h2 class="lead"><b>Volunteer 1</b></h2>
                  <ul class="ml-4 mb-0 fa-ul text-muted">
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: +88017xx-xxxxxx</li>
                  </ul>
                </div>
                <div class="col-5 text-center">
                  <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="text-right">
                <a href="/application/feedback" class="btn btn-sm bg-teal">
                  <i class="fas fa-comments"></i>
                </a>
                <a href="/profile" class="btn btn-sm btn-primary">
                  <i class="fas fa-user"></i> View Profile
                </a>
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
    <!-- /.card-body -->

    <!-- /.card-footer -->
  </div>
  </div><!-- /.container-fluid -->
</section>

@endsection