<?php
    $conn=mysqli_connect("localhost", "root", "", "teabuck");
    if(!$conn){
        die("Not Connectd: ".mysqli_error());
    }
?>