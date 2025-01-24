@extends('Layouts.navbar')
@section('content')



<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Executive</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Executive</li>
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


        <a href="/members/volunteer"><button type="button" class="btn btn-outline-primary btn-block"><i class="fas fa-user"></i>Volunteer</button></a>



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
              <th>#@</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Role</th>
              <th>Pictures</th>
              <th>Joined</th>
            </tr>
          </thead>
          <tbody>
            @foreach($executives as $executive)
            <tr>
              <td>{{$executive->id}}</td>
              <td>{{$executive->name}}</td>
              <td>{{$executive->phone}}</td>
              <td>{{$executive->role}}</td>
              <td><img src="{{ url('favicon_io/android-chrome-512x512.png') }}" width="100" height="100"
                  alt="VOES LOGO" /></td>
              <td>{{$executive->joined}}</td>
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


<!-- datatables table design -->
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