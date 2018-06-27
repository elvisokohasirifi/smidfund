<!DOCTYPE html>
<html lang="en">
<?php 
  include 'functions.php'; 
  include 'session.php';
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SMID Fund</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">SMID Fund</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
          <a class="nav-link" href="dashboard_home.php">
                <i class="fa fa-home"></i>
            <span class="nav-link-text">Home</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Students">
          <a class="nav-link" href="dashboard_students.php">
                <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Customers</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Payments">
          <a class="nav-link" href="dashboard_payment.php">
                <i class="fa fa-money"></i>
            <span class="nav-link-text">Contributions</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Payments">
          <a class="nav-link" href="dashboard_attendance.php">
                <i class="fa fa-money"></i>
            <span class="nav-link-text">Withdrawals</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Accounts">
          <a class="nav-link" href="dashboard_accounts.php">
                <i class="fa fa-book"></i>
            <span class="nav-link-text">Accounts</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Summary">
          <a class="nav-link" href="dashboard_summary.php">
                <i class="fa fa-bar-chart"></i>
            <span class="nav-link-text">Summary</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="login.php">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard_home.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Summary</li>
      </ol>
      
      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-bar-chart"></i> <?php echo "Total Contribution for the year " . date("Y"); ?></div>
        <div class="card-body">
          <?php echo drawPaymentsBarGraph(); ?>
        </div>
        <div class="card-footer small text-muted">As at <?php echo date("d-m-Y"); ?></div>
      </div>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-bar-chart"></i> <?php echo "Total Withdrawal for the year " . date("Y"); ?></div>
        <div class="card-body">
          <?php echo drawPaymentsBarGraph2(); ?>
        </div>
        <div class="card-footer small text-muted">As at <?php echo date("d-m-Y"); ?></div>
      </div>
      
        
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i>Total Contributions for the week</div>
            <div class="card-body">
              <?php echo drawBarForWeek(); ?>
            </div>
            <div class="card-footer small text-muted">As at <?php echo date("d-m-Y"); ?></div>
          </div>

          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i>Total Withdrawals for the week</div>
            <div class="card-body">
              <?php echo drawBarForWeek2(); ?>
            </div>
            <div class="card-footer small text-muted">As at <?php echo date("d-m-Y"); ?></div>
          </div>
        
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-pie-chart"></i>Ratio of males to females among customers</div>
            <div class="card-body">
              <?php echo drawStudentsPie(); ?>
            </div>
            <div class="card-footer small text-muted">As at <?php echo date("d-m-Y"); ?></div>
          </div>
          <div class="text-center" style="background-color: white;">
          <h4>Additional Details</h4>
        <p>Total payments for the day: <span>GHC <?php echo getDayPayment(); ?></span></p>
        <p>Total payments for the week: <span>GHC <?php echo getWeekPayment(); ?></span></p>
        <p>Total payments for the month: <span>GHC <?php echo getMonthPayment(); ?></span></p>
        <p>Total payments for the year: <span>GHC <?php echo getYearPayment(); ?></span></p>
      </div>
      <hr>
    </div>
        </div>
      </div>
      <hr>
      <!--additional information -->
      
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Developed by Elrah Lab</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">Ã—</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

   <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- Core plugin JavaScript-->
   <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
   <!-- Page level plugin JavaScript-->
   <script src="vendor/chart.js/Chart.min.js"></script>
   <!-- Custom scripts for all pages-->
   <script src="js/sb-admin.min.js"></script>
  </div>
</body>

</html>
