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
        <table class="table table-hover text-nowrap">
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

@endsection