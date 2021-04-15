<?php
echo '<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-adminclinic.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
          <form method="POST" action="ok.php">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div>
                    <input type="text" id="firstName" class="form-control" placeholder="First name" name="firstname" required="required" autofocus="autofocus">
                  </div>
                </div>
                <div class="col-md-6">
                  <div>
                    <input type="text" id="lastName" class="form-control" placeholder="Last name" name="lastname" required="required">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required="required">
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required="required">
                  </div>
                </div>
                <div class="col-md-6">
                  <div>
                    <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" name="confirm" required="required">
                  </div>
                </div>
                 </div>
                  </div>
              <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div>
                    <select class="form-control" placeholder="patient type" name=" type" required>
                              <option value="STUDENT">STUDENT</option>
                              <option value="FACULTY">FACULTY</option>
                              <option value="STAFF">STAFF</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div>
                    <input type="text" id="age" class="form-control" placeholder="Age" name="age" required="required">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div>
                <input type="address" id="inputEmail" class="form-control" placeholder="Address" name="address" required="required">
              </div>
            </div>
              </div>
            <button type="submit" class="btn btn-primary btn-block" name="register">Register</button>
          </form>
             <div class="text-center">
            <a class="d-block small mt-3" href="list.php">Back</a>
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

  </body>

</html>';
?>
