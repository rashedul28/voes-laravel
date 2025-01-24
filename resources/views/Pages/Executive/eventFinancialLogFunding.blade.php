@extends('Layouts.navbar')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">

        <!-- <button type="button" class="btn btn-outline-primary btn-block"><i class="fa fa-th"></i>ALL</button> -->
        <button type="button" class="btn btn-primary btn"><i class="fa fa-arrow-up"></i><a href="/events/eventFinancialLog/funding">Funding</a></button>

        <button type="button" class="btn btn-primary btn"><i class="fa fa-arrow-down"></i><a href="/events/eventFinancialLog/expense">Expense</a></button>




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
              <th>ID</th>
              <th>Event name</th>
              <th>Amount</th>
            </tr>
          </thead>
          <tbody>

            @foreach($funds as $fun)
            <tr>
              <td>{{$fun->id}}</td>
              <td>{{$fun->event_Name}}</td>
              <td>{{$fun->amount}}</td>
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