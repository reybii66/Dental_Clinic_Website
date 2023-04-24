<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Admin Register</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="hmpg.php">
        Home
      </a>
      </ul>
    </div>
    

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Avatar -->
       <div class="dropdown p-2">
       <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
          <img src="https://i.pinimg.com/736x/7b/3d/85/7b3d8588da1d05a355bfbaaf77dc2c7f.jpg" class="rounded-circle" height="25" alt="Black and White Portrait of a Man" loading="lazy">
          </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="adminhm.php">Admin profile</a></li>
      <li><a class="dropdown-item" href="#">Settings</a></li>
      <li><a class="dropdown-item" href="admsignout.php">Logout</a></li>
    </ul>
  </div>
</div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav><br>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                    <h2 class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">New Admin Register</h2>
                        <div class="card-body p-md-3">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    

                                    <form class="mx-1 mx-md-4" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" name="username" id="form3Example1c" class="form-control shadow p-3" placeholder="Admin Name" required />    
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4 ">
                                             <select id="inputState" name="gen" class="form-control" required>
                                                <option selected>Select Gender</option>
                                                <option>Female</option>
                                                <option>Male</option>
                                                <option>Others</option>
                                            </select>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" name="email" id="form3Example3c" class="form-control shadow p-3" placeholder="Admin Email" required />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" name="password" id="form3Example4c" class="form-control shadow p-3" placeholder="Password" required />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" name="cpassword" id="form3Example4cd" class="form-control shadow p-3" placeholder="Repeat your password" onchange="checkPassword()" required />
                                            </div>
                                        </div>
                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" checked />
                                            <label class="form-check-label" for="form2Example3">
                                                <br>
                                                I agree all statements in <a href="#!">Terms of service</a>
                                            </label>
                                        </div>
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" name="submit" class="btn btn-primary btn-lg" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Click To Register">Register</button>
                                        </div>
                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-8 col-xl-5  order-1 order-lg-2">

                                    <img src="https://i.pinimg.com/originals/85/04/77/850477fed08bfe98598082bcd309ce70.gif" class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        if(isset($_POST['submit'])) {
        $host ="localhost";
        $user ="root";
        $pass ="";
        $conn=mysqli_connect($host,$user,$pass,"healthorganization");
        $userName = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cPassword = $_POST['cpassword'];
        if ($password == $cPassword) {
            $sql ="INSERT INTO admlogindetails (u_name,u_email,u_password) VALUES ('$userName','$email','$password')";
            $retval = mysqli_query($conn,$sql);
            if (!$retval) {
                die("<script>alert('Something went wrong!!!')</script>");
            } else {
                echo "<script>alert('Account created successfully')</script>";
                // header("Location:http://localhost/semend/Views/drslogin.php");
            }
        }
        }
    ?>
</body>
</html>