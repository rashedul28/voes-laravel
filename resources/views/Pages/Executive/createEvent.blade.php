@extends('Layouts.navbar')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Event</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Event</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        Create Events
                    </h3>
                </div>
                <!-- /.card-header -->
                <form method="post" action="/events/create/submit">
                    @csrf




                    <div class="card-body">

                        <div class="form-group">
                            <label>Event Name</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-clipboard"></i></span>
                                </div>
                                <input type="text" class="form-control" name="eventName" placeholder="Event Name" required>
                            </div>
                            <!-- /.input group -->
                        </div>


                        <div class="form-group">
                            <label>Start</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-clipboard"></i></span>
                                </div>
                                <input type="datetime-local" class="form-control" name="start" placeholder="Event will start" required>
                            </div>
                            <!-- /.input group -->
                        </div>

                        <div class="form-group">
                            <label>End</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-clipboard"></i></span>
                                </div>
                                <input type="datetime-local" class="form-control" name="end" placeholder="Event will end" required>
                            </div>
                            <!-- /.input group -->
                        </div>

                        <textarea id="description" name="description" required></textarea>
                    </div>
                    <input type="Submit">
                </form>


            </div>
        </div>
    </div>
    <!-- /.col-->
    </div>



    @endsection