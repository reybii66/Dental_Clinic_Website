<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
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
</nav>
<!-- Navbar -->
<section class="pt-5" style="background-color: #eee;">
    <div class="container py-5 align-items-center">
    <div class="row justify-content-center">
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="btn btn-secondary btn-lg accordion-button collapsed col-md-28" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      Add New Doctor
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><a class="nav-link active" href="http://localhost/semend/Views/drsregister.php">Add New Doctor</a></div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="btn btn-secondary btn-lg accordion-button collapsed col-md-18" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      Add New Admin
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><a class="nav-link" href="http://localhost/semend/Views/admregister.php">Add New Admin</a></div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="btn btn-secondary btn-lg accordion-button collapsed col-md-18" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      Clear The Patient Token
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><a class="nav-link" href="cleardata.php">Clear The Patient Token</a></div>
    </div>
  </div>
</div>
</div>
</section>
</body>
</html>