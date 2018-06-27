<!DOCTYPE html>
<html lang="en">
<?php include 'functions.php'; 
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
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Home</li>
      </ol>
      <hr>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                    <i class="fa fa-user"></i>
              </div>
              <div class="mr-5">Add Customer</div>
            </div>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#student">Add</button>
            
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                    <i class="fa fa-money"></i>
              </div>
              <div class="mr-5">Add Contribution</div>
            </div>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#payment">Add</button>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                    <i class="fa fa-list-alt"></i>
              </div>
              <div class="mr-5">Make Withdrawal</div>
            </div>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#withdrawal">Add</button>
          </div>
        </div>
      </div>
    </div>
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
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal for add new customer -->
    <div class="modal fade" id="student" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                        <form class="text-center" id="insertForm" action="functions.php" method="post" onsubmit="return validateStudent()">
                          <label for="fname" class="sr-only">MSISDN</label>
                                <input type="text" id="msisdn" class="form-control" placeholder="SMID Number" required autofocus name="msisdn">
                                <div class="checkbox mb-3">
                                    </div>
                                <label for="fname" class="sr-only">First Name</label>
                                <input type="text" id="fname" class="form-control" placeholder="First Name" required autofocus name="fname">
                                <div class="checkbox mb-3">
                                    </div>
                                <label for="lname" class="sr-only">Last Name</label>
                                <input type="text" id="lname" class="form-control" placeholder="Last Name" required autofocus name="lname">
                                <div class="checkbox mb-3">
                                    </div>
                                    <div class="form-group">
                                            <select class="form-control" id="sel1" name="gender">
                                              <option value="Male">Male</option>
                                              <option value="Female">Female</option>
                                            </select>
                                          </div>
                                    <div class="checkbox mb-3">
                                        </div>      
                                <label for="date" class="sr-only">Date Of birth</label>
                                <input type="date" id="date" class="form-control" placeholder="Date" required autofocus name="date" value="<?php echo date('Y-m-d'); ?>">
                                <div class="checkbox mb-3">
                                    </div>
                                <label for="pname" class="sr-only">Phone number</label>
                                <input type="text" id="pnum" class="form-control" placeholder="Phone number" required autofocus name="pnum">
                                <div class="checkbox mb-3">
                                    </div>
                                    <label for="pname" class="sr-only">Occupation</label>
                                <input type="text" id="occupation" class="form-control" placeholder="Occupation" required autofocus name="occupation">
                                <div class="checkbox mb-3">
                                    </div>
                                    <label for="pname" class="sr-only">Nature of Business</label>
                                <input type="text" id="nob" class="form-control" placeholder="Nature of Business" required autofocus name="nob">
                                <div class="checkbox mb-3">
                                    </div>
                                <label for="pname" class="sr-only">Location</label>
                                <input type="text" id="location" class="form-control" placeholder="Location" required autofocus name="location">
                                <div class="checkbox mb-3">
                                    </div>
                                <label for="pname" class="sr-only">Zone of Business</label>
                                <input type="text" id="zone" class="form-control" placeholder="Zone of Business" required autofocus name="zone">
                                <div class="checkbox mb-3">
                                    </div>
                                    <label for="pname" class="sr-only">Beneficiary</label>
                                <input type="text" id="beneficiary" class="form-control" placeholder="Beneficiary" required autofocus name="beneficiary">
                                <div class="checkbox mb-3">
                                    </div>
                                    <label for="pname" class="sr-only">Relation</label>
                                <input type="text" id="relation" class="form-control" placeholder="Relation" required autofocus name="relation">
                                <div class="checkbox mb-3">
                                    </div>
                                    <label for="pname" class="sr-only">Beneficiary's contact</label>
                                <input type="text" id="bpnum" class="form-control" placeholder="Beneficiary's contact" required autofocus name="bpnum">
                                <div class="checkbox mb-3">
                                    </div>
                                    <label for="pname" class="sr-only">Planned Amount</label>
                                <input type="number" id="pamount" class="form-control" placeholder="Planned Amount" required autofocus name="pamount">
                                <div class="checkbox mb-3">
                                    </div>
                                    <div class="form-group">
                                            <select class="form-control" id="frequency" name="frequency">
                                              <option value="Daily">Daily</option>
                                              <option value="Weekly">Weekly</option>
                                              <option value="Monthly">Monthly</option>
                                            </select>
                                          </div>
                                <div class="checkbox mb-3">
                                    </div>
                                    <label for="pname" class="sr-only">Association</label>
                                <input type="text" id="association" class="form-control" placeholder="Association" required autofocus name="association">
                                <div class="checkbox mb-3">
                                    </div>
                                    <label for="pname" class="sr-only">Social Security Number</label>
                                <input type="text" id="ssn" class="form-control" placeholder="Social Security Number" required autofocus name="ssn">
                                <div class="checkbox mb-3">
                                    </div>
                                    
                                    <div class="form-group">
                                            <select class="form-control" id="idtype" name="idtype">
                                              <option value="National Health Insurance">National Health Insurance</option>
                                              <option value="Voter's ID">Voter's ID</option>
                                              <option value="Passport">Passport</option>
                                              <option value="Driver's License">Driver's License</option>
                                            </select>
                                          </div>
                                <div class="checkbox mb-3">
                                    </div>
                                    <label for="pname" class="sr-only">ID Number</label>
                                <input type="text" id="idnum" class="form-control" placeholder="ID Number" required autofocus name="idnum">
                                <div class="checkbox mb-3">
                                    </div>
                                <input class="btn btn-lg btn-primary btn-block" type="submit" value="Add" name="addStudent">
                              </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>

        <!-- Modal for adding payment -->
    <div class="modal fade" id="payment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Contribution</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                        <form class="text-center" action="functions.php" method="post" onsubmit="return validatePayment()">
                                <div class="form-group">
                                        <select class="form-control" id="sel1Pay" name='studentid'>
                                          <?php echo loadStudentNames(); ?>
                                        </select>
                                </div>
                                 <div class="checkbox mb-3"></div>   

                                <label for="amount" class="sr-only">Amount</label>
                                <input type="number" id="amountPay" class="form-control" placeholder="Amount" required autofocus value="1" name="amount">
                                <div class="checkbox mb-3">
                                    </div>
                                <label for="date" class="sr-only" value='11/11/2012'>Date</label>
                                <input type="date" id="datePay" class="form-control" placeholder="Date" required autofocus name="datePay" value="<?php echo date('Y-m-d'); ?>">
                                <div class="checkbox mb-3">
                                    </div>
                                <input class="btn btn-lg btn-primary btn-block" type="submit" name="submitPayment">
                              </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>

         <!-- Modal for withdrawal -->
    <div class="modal fade" id="withdrawal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Contribution</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                        <form class="text-center" action="functions.php" method="post" onsubmit="return validatePayment()">
                                <div class="form-group">
                                        <select class="form-control" id="sel1Pay" name='studentid'>
                                          <?php echo loadStudentNames(); ?>
                                        </select>
                                </div>
                                 <div class="checkbox mb-3"></div>   

                                <label for="amount" class="sr-only">Amount</label>
                                <input type="number" id="amountPay" class="form-control" placeholder="Amount" required autofocus value="1" name="amount">
                                <div class="checkbox mb-3">
                                    </div>
                                <label for="date" class="sr-only">Date</label>
                                <input type="date" id="datePay" class="form-control" placeholder="Date" required autofocus name="datePay" value="<?php echo date('Y-m-d'); ?>">
                                <div class="checkbox mb-3">
                                    </div>
                                <input class="btn btn-lg btn-primary btn-block" type="submit" name="submitWithdrawal">
                              </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
  </div>
<!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="home.js"></script>
  <script type="text/javascript">
    
  </script>
</body>

</html>
