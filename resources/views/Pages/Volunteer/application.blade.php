@extends('Layouts.navbar2')
@section('content')


<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Inquries</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Inquries</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>


<div class="col-md">
  <div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title">Inquries</h3>
    </div>
    <!-- /.card-header -->

    <form action="/sent-application/submit" method="POST">

      @csrf
      @method('POST')


      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif



      <div class="card-body">
        <div class="form-group">
          <input class="form-control" placeholder="info@voes.com" value="info@voes.com" required readonly>
        </div>
        <div class="form-group">
          <input class="form-control" placeholder="Subject" name="subject" required>
        </div>
        <div class="form-group">
          <textarea id="compose-textarea" class="form-control" style="height: 300px" placeholder="body" name="body" required></textarea>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <div class="float-right">
          <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
        </div>
      </div>
      <!-- /.card-footer -->
    </form>
  </div>
  <!-- /.card -->
</div>


@endsection