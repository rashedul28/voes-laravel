@extends('Layouts.navbar')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">

        <!-- <button type="button" class="btn btn-outline-primary btn-block"><i class="fa fa-th"></i>ALL</button> -->
        <a href="/events/eventFinancialLog/funding"><button type="button" class="btn btn-primary btn"><i class="fa fa-arrow-up"></i>Funding</button></a>

        <a href="/events/eventFinancialLog/expense"><button type="button" class="btn btn-primary btn"><i class="fa fa-arrow-down"></i>Expense</button></a>




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
              <th>index</th>
              <th>id</th>
              <th>name</th>
              <th>phone</th>
              <th>amount</th>
            </tr>

          </thead>
          <tbody>

            @foreach($exps as $exp)
            <tr>
              <td>{{$exp->id}}</td>
              <td>{{$exp->id}}</td>
              <td>{{$exp->event_name}}</td>
              <td>{{$exp->amount}}</td>
              <td>{{$exp->sector}}</td>
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