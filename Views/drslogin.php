<?php
session_start();
if (isset($_SESSION['user_name'])) {
  header("Location:drhome.php");
}
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Doctor Login</title>
</head>
<body style="background-image: url('');">
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="hmpg.php">GOOD DAY DENTAL CLINIC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-flex align-items-center" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="hmpg.php">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="http://localhost/semend/Views/ptn_tkn.php">Book Doctors Appointment</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active link-warning" href="http://localhost/semend/Views/drslogin.php">Doctors Login</a>
        </li>
        <li class="nav-item">
        <li><a class="nav-link" href="http://localhost/semend/Views/adminlogin.php">Admin Login</a></li>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- loginform -->
  <section class="vh-100">
    <div class="container py-5 h-80" >
      <div class="row d-flex align-items-center justify-content-center">
        <div class="col-md-6 shadow-lg p-3 mb-2 bg-body rounded">
        <!-- login image -->
        <div class="text-center">
            <img src="https://as1.ftcdn.net/v2/jpg/02/90/56/38/1000_F_290563830_MCl0UobSKqqgV7wE8KeSOsablqJIUNCg.jpg" class="rounded" width="304" height="304">
          </div>
        <h2 class="text-center h1 fw-bold bd-highlight ">Doctor Login</h2>
          <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <!-- login image -->
          <div class="text-center">
            <img src="" class="rounded">
          </div>
          
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" name="email" id="form1Example13"  placeholder="Email Address" class="form-control form-control-lg" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" name="password" id="form1Example23" placeholder="Password" class="form-control form-control-lg" />
            </div>

            <div class="d-flex justify-content-around align-items-center mb-4">
              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="form1Example3" checked />
                <label class="form-check-label" for="form1Example3"> Remember me </label>
              </div>
              <a href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forgot Password">Forgot password?</a>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-lg btn-block" data-bs-toggle="tooltip" data-bs-placement="top" title="SIGN IN">Sign in</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php
  if (isset($_COOKIE['PQIx5JKXI1'])) {
    // $_SESSION['user_id'] = $_COOKIE['PQIx5JKXI1'];
    $_SESSION['user_name'] = $_COOKIE['68iXvUSHe7'];
    echo "<script>location.reload()</script>";
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect("localhost","root","","healthorganization");
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM drslogindetails WHERE dr_email='$email'";
    $retval = mysqli_query($conn, $sql);
    if (!$retval) {
      die("<script>alert('No User Found')</script>");
    } else {
      $row = mysqli_fetch_array($retval);
      if ($row) {
        // $db_uid = $row['u_id'];
        $db_uname = $row['dr_name'];
        $db_email = $row['dr_email'];
        $db_pwrd = $row['dr_password'];
        if (($password == $db_pwrd)) {
          // $_SESSION['user_id'] = $db_uid;
          $_SESSION['user_name'] = $db_uname;
          if (isset($_POST['remember'])) {
            // setcookie("PQIx5JKXI1", $db_uid, time() + (86400 * 30));
            setcookie("68iXvUSHe7", $db_uname, time() + (86400 * 30));
          }
          header("Location:drhome.php");
        } else {
          echo "<script>alert('Incorrect Password')</script>";
        }
      } else {
        echo "<script>alert('Incorrect email')</script>";
      }
    }
  }
  ?>
</body>

</html>
