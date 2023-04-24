<?php
$conn = mysqli_connect("localhost","root","","healthorganization");
if($conn)
    alert("Connectio established");
else
    alert("fail");
?>