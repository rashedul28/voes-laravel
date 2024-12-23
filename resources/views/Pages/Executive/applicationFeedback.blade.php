@extends('Layouts.navbar')
@section('content')





<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Applicant Reply</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Reply </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md">
            <a href="/application/view" class="btn btn-primary btn-block mb-3"><i class='fas fa-backward'></i> Inbox </a>

            
            <!-- /.card -->
            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Write</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- <div class="form-group">
                  <input class="form-control" placeholder="To:">
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Subject:">
                </div> -->
                <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 300px">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa quibusdam mollitia obcaecati sed quod eos aut similique minima, accusamus recusandae at quos itaque, cum harum quae rem ea corporis? Rem.
                    </textarea>
                </div>
                <div class="form-group">
                  <div class="btn btn-default btn-file">
                    <i class="fas fa-paperclip"></i> Attachment
                    <input type="file" name="attachment">
                  </div>
                  <p class="help-block">Max. 32MB</p>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right">
                  <button type="button" class="btn btn-default"><i class="fas fa-pencil-alt"></i> Draft</button>
                  <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
                </div>
                <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> <a href="/application/read">Discard</a></button>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>






@endsection