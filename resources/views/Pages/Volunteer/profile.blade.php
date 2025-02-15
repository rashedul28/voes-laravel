@extends('Layouts.navbar2')
@section('content')


<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Profile</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Volunteer Profile</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle"
                src="{{ $data->image ? asset('storage/' . $data->image) : asset('images/default-profile.png') }}"
                alt="User profile picture">
            </div>

            <h3 class="profile-username text-center">{{$data->name}}</h3>

            <p class="text-muted text-center">{{$data->role}}</p>

            <ul class="list-group list-group-unbordered mb-3">
              <b>Full Name</b> <a class="float-right">{{$data->name}}</a>
              </li>
              <b>Phone</b> <a class="float-right">{{$data->phone}}</a>
              </li>
              <b>Event manage</b> <a class="float-right">10</a>
              </li>
              <b>Joined</b> <a class="float-right">{{$data->joined}}</a>
              </li>
            </ul>

            <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- About Me Box -->
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card">
          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <!-- <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li> -->
              <li class="nav-item"><a>Settings</a></li>
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">

              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              <div class="active-tab-pane" id="settings">
                <form class="form-horizontal" method="post" action="/volunteer/profile/update" enctype="multipart/form-data">
                  @csrf


                  <div class=" form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="name" class="form-control" id="inputName" name="name" value="{{$data->name}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPhoneNo" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                      <input type="phone" class="form-control" id="inputPhoneNo" name="phone" value="{{$data->phone}}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="password" name="password" value="{{$data->password}}">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Update Profile</label>
                    <div class="col-sm-10">
                      <input type="file" name="image" class="form-control">
                    </div>
                  </div>




                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <button type="Save Changes" class="btn btn-danger">Save Change</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>



@endsection