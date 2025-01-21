@extends('Layouts.navbar')
@section('content')



<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Volunteer</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Volunteer</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>





<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">

                <a href="/members/executive"><button type="button" class="btn btn-outline-primary btn-block"><i class="fas fa-user"></i> Executive</button></a>


                <a href="/members/volunteer"><button type="button" class="btn btn-outline-primary btn-block"><i class="fas fa-user"></i> Volunteer</button></a>



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
                            <th>#Serial</th>
                            <th>Phone</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Pictures</th>
                            <th>Joined</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($volunteers as $volunteer)
                        <tr>
                            <td>{{$volunteer->id}}</td>
                            <td>{{$volunteer->phone}}</td>
                            <td>{{$volunteer->name}}</td>
                            <td>{{$volunteer->role}}</td>
                            <td><img src="{{ url('favicon_io/android-chrome-512x512.png') }}" width="100" height="100"
                                    alt="VOES LOGO" /></td>
                            <td>{{$volunteer->joined}}</td>
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