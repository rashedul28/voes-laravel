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

                <a href="/members/executive"><button type="button" class="btn btn-primary btn"><i class="fas fa-user"></i> Executive</button></a>


                <a href="/members/volunteer"><button type="button" class="btn btn-primary btn"><i class="fas fa-user"></i> Volunteer</button></a>



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
                <table class="table table-hover text-nowrap" id="example">
                    <thead>
                        <tr>
                            <th>Index</th>
                            <th>Id</th>
                            <th>Phone</th>
                            <th>Password</th>
                            <th>Name</th>
                            <th>Display</th>
                            <th>Department</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($volunteers as $volunteer)
                        <tr>
                            <td>{{$loop->index}}</td>
                            <td>{{$volunteer->id}}</td>
                            <td>{{$volunteer->phone}}</td>
                            <td>


                                <span class="password-field">xxx</span>
                                {{-- <input
                                        type="password"
                                        value="{{ $volunteer->password }}"
                                class="password-field border border-gray-300 rounded px-1 py-1"
                                readonly /> --}}
                                <button
                                    type="button"
                                    class=class=" btn btn-primary btn"
                                    onclick="togglePassword(this, '{{ $volunteer->password }}')">
                                    Show
                                </button>
                            </td>
                            <td>{{$volunteer->name}}</td>
                            <td><img
                                    src="{{ $volunteer->image ? asset('storage/' . $volunteer->image) : asset('images/default-profile.png') }}"
                                    alt="User profile picture" width="100"></td>
                            </td>
                            <td>{{$volunteer->department}}</td>
                            <td>{{$volunteer->role}}</td>
                            <td><a href="">Reset Password</a></td>
                        </tr>
                        @endforeach


                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Index</th>
                            <th>Id</th>
                            <th>Phone</th>
                            <th>Password</th>
                            <th>Name</th>
                            <th>Display</th>
                            <th>Department</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

<!-- password toggle -->

<script>
    function togglePassword(button, password) {
        // Find the input field adjacent to the button
        const passwordField = button.previousElementSibling;

        if (passwordField.innerText == "xxx") {
            passwordField.innerText = password;
            button.innerText = "Hide";
        } else {
            passwordField.innerText = "xxx";
            button.innerText = "Show";
        }
    }
</script>


<!-- table design datatablse -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/3.2.0/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.print.min.js"></script>
<script>
    console.log(new URLSearchParams(window.location.search).get('startdate'));
    // document.getElementById('startdate').valueAsDate = "{{ Request::get('startdate') }}";
    // document.getElementById('enddate').valueAsDate = new Date();
    // $('#example').DataTable();
    // $('#example2').DataTable();


    new DataTable('#example', {
        dom: 'Blfrtip',
        buttons: [{
            extend: 'csvHtml5', // Only CSV button
            text: 'Export to CSV', // Customize button text (optional)
            footer: false
        }]
    });
</script>

@endsection