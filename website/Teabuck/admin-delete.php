<?php
    include_once'database.php';
    $sql="DELETE FROM orders
    WHERE id='".$_GET["id"]."'";
    if(mysqli_query($conn,$sql)){
        include_once'admin.php';
    }
    else{
        echo"Error Deleting Record: ".mysqli_error($conn);
    }
    mysqli_Close($conn);
?>