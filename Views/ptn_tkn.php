<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Pateint Register</title>
    <style>
        @keyframes fade {
            from {
                filter: blur(0px);
            }

            to {
                filter: blur(15px);
            }
        }
    </style>
</head>

<body>
    <div id="page">
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
                            <a class="nav-link active" href="http://localhost/semend/Views/ptn_tkn.php">Book Doctors Appointment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/semend/Views/drslogin.php">Doctors Login</a>
                        </li>
                        <li class="nav-item">
                        <li><a class="nav-link" href="http://localhost/semend/Views/adminlogin.php">Admin Login</a></li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="inputnam">Enter Name</label>
                        <input type="text" class="form-control" id="inputnam" name="nam" placeholder="Name" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputage">Enter Age</label>
                        <input type="text" class="form-control" id="inputage" placeholder="Age" name="ag" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Enter Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Housename" name="addr" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputphn">Enter Phone Number</label>
                        <input type="text" class="form-control" name="phn" id="inputphn" placeholder="Phone Number" name="phn" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Gender</label>
                        <select id="inputGen" name="gen" class="form-control" required>
                            <option selected>Select Gender</option>
                            <option>Female</option>
                            <option>Male</option>
                            <option>Others</option>
                        </select>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="handleSubmit()">Submit</button>
            </div>
        </form>
    </div>
    <!-- Modal -->
    <div class="modal" id="modal-popup" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mr-auto pl-2">Appointment Booked</h5>
                </div>
                <div class="modal-body">
                    <table style="border-spacing: 30px;">
                        <tr>
                            <Th>Patient Name</Th>
                            <td><span id="final-name"></span></td>
                        </tr>
                        <tr>
                            <th>Patient Age</th>
                            <td><span id="final-age"></span></td>
                        </tr>
                        <tr>
                            <th>Patient Token No.</th>
                            <td><span id="final-tkn"></span></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <a href="ptn_tkn.php" class="btn btn-primary">Close</a>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function handleSubmit() {
        var name = document.getElementById("inputnam").value;
        var age = document.getElementById("inputage").value;
        var addr = document.getElementById("inputAddress").value;
        var phone = document.getElementById("inputphn").value;
        var gender = document.getElementById("inputGen").value;
        $.ajax({
            type: "POST",
            url: "handleToken.php",
            data: {
                name,
                age,
                addr,
                phone,
                gender
            },
            success: (response) => {
                // console.log(response);
                var data = JSON.parse(response);
                var finalName = data['name'];
                var token = data['tkn'];
                var age = data['age'];
                document.getElementById("final-name").innerHTML = finalName
                document.getElementById("final-age").innerHTML = age
                document.getElementById("final-tkn").innerHTML = token
                var modalObj = document.getElementById("modal-popup");
                var page = document.getElementById("page")
                modalObj.style.display = 'block';
                page.style.animation = "fade 250ms forwards ease-in-out"
            }
        });
    }
</script>

</html>