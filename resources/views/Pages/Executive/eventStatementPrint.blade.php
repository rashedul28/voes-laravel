<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Statement </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body>
  <div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-12">
          <h2 class="page-header">
            <i class="fas fa-globe"></i> Statement
            <small class="float-right">{{$date}}</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          VOES
          <address>
            <strong>{{$event->event_name}}</strong><br>
            lorem ipsum<br>
            Dhaka, Bangladesh<br>
            Phone: (804) 123-5432<br>
            Email: someone@voes.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          Schedule
          <address>
            <strong>VOES</strong><br>
            Start:: {{$event->start}}<br>
            End:: {{$event->end}}<br>
          </address>
        </div>
        <!-- /.col -->
        <!-- <div class="col-sm-4 invoice-col">
          <b>Invoice #007612</b><br>
          <br>
          <b>Order ID:</b> 4F3S8J<br>
          <b>Payment Due:</b> 2/22/2014<br>
          <b>Account:</b> 968-34567
        </div> -->
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <caption><strong>All funding of [ {{$event->event_name}} ]</strong></caption>
      <div class="row">
        <div class="col-12 table-responsive">
          <table class="table table-striped" title="Funding">
            <thead>
              <tr>
                <th>Id</th>
                <th>Phone</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tbody>
              @foreach($funding as $f)

              <tr>
                <td>{{$f->id}}</td>
                <td>phone</td>
                <td>{{$f->amount}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->



      <caption><strong>All Expense of [ {{$event->event_name}} ]</strong></caption>
      <div class="row">
        <div class="col-12 table-responsive">
          <table class="table table-striped" title="Funding">
            <thead>
              <tr>
                <th>Id</th>
                <th>Phone</th>
                <th>Amount</th>
                <th>Sector</th>
              </tr>
            </thead>
            <tbody>
              @foreach($expense as $e)

              <tr>
                <td>{{$e->id}}</td>
                <td>phone</td>
                <td>{{$e->amount}}</td>
                <td>{{$e->sector}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>





      <div class="row">
        <!-- accepted payments column -->
        <!-- <div class="col-6">
          <p class="lead">Payment Methods:</p>
          <img src="../../dist/img/credit/visa.png" alt="Visa">
          <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
          <img src="../../dist/img/credit/american-express.png" alt="American Express">
          <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

          <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr
            jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
          </p>
        </div> -->
        <!-- /.col -->
        <div class="col-6">
          <p class="lead">TOTAL</p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th>Funding:</th>
                <td>$250.30</td>
              </tr>
              <tr>
                <th>Expense:</th>
                <td>$10.34</td>
              </tr>

            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- ./wrapper -->
  <!-- Page specific script -->
  <script>
    window.addEventListener("load", window.print());
  </script>
</body>

</html>