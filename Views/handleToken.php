<?php
// TOKEN GENRATION
if (!$_COOKIE) {
    $Token = 1;
    setcookie('token', $Token, time() + (86400), "/");
} else {
    $Token = $_COOKIE['token'];
    setcookie('token', $Token + 1, time() + (86400), "/");
}

$conn = mysqli_connect("localhost", "root", "", "healthorganization");
$name = $_POST['name'];
$age = $_POST['age'];
$addr = $_POST['addr'];
$phn = $_POST['phone'];
$gen = $_POST['gender'];
// TOKEN GENRATION
// $sql2 = "SELECT MAX('pt_tkn') FROM patienttkn";
// $Token3 = mysqli_query($conn,$sql2);
// if (!$Token3)
//     $Token3 = 1;
// else
//     $Token3 = $Token3 + 1;
$sql1 = "INSERT INTO patienttkn VALUES ('$name','$age','$gen','$phn','$addr','$Token')";
$retval = mysqli_query($conn, $sql1);
if (!$retval)
    die("error");
else
    $return_array = array(
        "name" => $name,
        "age" => $age,
        "tkn" => $Token,
    );
exit(json_encode($return_array));
