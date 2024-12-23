@extends('Layouts.navbar')
@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Internal Donation</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Donation</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">
  <div class="row">

    <div class="col-md-6">
      <div class="card card-secondary">
        <div class="card-header">
          <h3 class="card-title">Donation</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <form action="/donation/internal/submit" method="POST">
          @csrf
          @method('POST')

          <div class="card-body">
            <div class="form-group">
              <label for="inputEstimatedBudget">ID</label>
              <input type="text" id="inputEstimatedBudget" class="form-control" name="id" required>
            </div>
            <div class="form-group">
              <label for="inputSpentBudget">Amount</label>
              <input type="text" id="inputSpentBudget" class="form-control" name="amount" required>
            </div>
          </div>
          <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <div class="row">
    <div class="col-12">

      <input type="submit" value="Take" class="btn btn-success float-left">
    </div>
  </div>
  </form>
</section>



@endsection