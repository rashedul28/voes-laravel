@extends('Layouts.navbar')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Members/Add Members</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Add Members</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>



<section class="content">


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/members/add" method="post">
        @csrf


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">


                        <!-- <div class="card card-danger"> -->
                        <div class="card-body">

                            <div class="form-group">
                                <label>Phone <span style="color:red">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="phone" placeholder="phone" required>
                                </div>
                            </div>

                            <!-- <div class="form-group">
                <label>Password <span style="color:red">*</span> </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="text" class="form-control" name="password" placeholder="password" required>
                </div>
            </div> -->

                            <!-- <div class="form-group">
                <label>name</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-font"></i></span>
                    </div>
                    <input type="text" class="form-control" name="name" placeholder="name" required>
                </div>
            </div> -->

                            <!-- <div class="form-group">
                <label>Image</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-camera"></i></span>
                    </div>
                    <input type="file" class="form-control" name="image" placeholder="image">
                </div>
            </div> -->

                            <div class="form-group">
                                <label>Department<span style="color:red">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-building"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="department" placeholder="department" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label>Role <span style="color:red">*</span></label>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-secret"></i></span>
                                    <select class="form-control select2" style="width: 100%;" name="role" required>
                                        <option value="Executive">Executive</option>
                                        <option value="Volunteer">Volunteer</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success col fileinput-button">
                                <i class="fas fa-plus"></i>
                                <span>Add</span>
                            </button>
                        </div>
                        <!-- /.card-body -->
                        <!-- </div> -->


                    </div>
                </div>
            </div>
        </div>
    </form>

</section>
@endsection