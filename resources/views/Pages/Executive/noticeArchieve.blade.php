@extends('Layouts.navbar')
@section('content')




<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Notice Board</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Board</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md">
      <a href="/notice/create" class="btn btn-primary btn-block mb-3">Create New</a>


      <!-- /.card -->

      <!-- /.card -->
    </div>
    <!-- /.col -->
    <div class="col-md-12">
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">Board</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm">
              <input type="text" class="form-control" placeholder="Search Mail">
              <div class="input-group-append">
                <div class="btn btn-primary">
                  <i class="fas fa-search"></i>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <div class="mailbox-controls">
            <!-- Check all button -->
            <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
            </button>
            <div class="btn-group">
              <button type="button" class="btn btn-default btn-sm">
                <i class="far fa-trash-alt"></i>
              </button>
              <button type="button" class="btn btn-default btn-sm">
                <i class="fas fa-reply"></i>
              </button>
              <button type="button" class="btn btn-default btn-sm">
                <i class="fas fa-share"></i>
              </button>
            </div>
            <!-- /.btn-group -->
            <button type="button" class="btn btn-default btn-sm">
              <i class="fas fa-sync-alt"></i>
            </button>
            <div class="float-right">
              1-50/200
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm">
                  <i class="fas fa-chevron-left"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm">
                  <i class="fas fa-chevron-right"></i>
                </button>
              </div>
              <!-- /.btn-group -->
            </div>
            <!-- /.float-right -->
          </div>
          <div class="table-responsive mailbox-messages">
            <table class="table table-hover table-striped">
              <tbody>
                @foreach($notices as $n)
                <tr>
                  <td>
                  </td>
                  <!-- <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td> -->
                  <td class="mailbox-name"><a href="/notice/read/{{$n->id}}">{{$n->datetime}}</a></td>
                  <td class="mailbox-subject">{{$n->notice}}
                  </td>
                  <td class="mailbox-attachment"></td>
                  <!-- <td class="mailbox-date">5 mins ago</td> -->
                </tr>
                @endforeach






              </tbody>
            </table>
            <!-- /.table -->
          </div>
          <!-- /.mail-box-messages -->
        </div>
        <!-- /.card-body -->

      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>






@endsection