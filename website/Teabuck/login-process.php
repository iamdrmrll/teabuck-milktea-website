<?php
    include_once'database.php';
    if(isset($_POST['btn-login'])){
        $username=$_POST['user'];
        $password=$_POST['pwd'];
        
        $result=mysqli_query($conn,"SELECT * FROM accounts
        WHERE username = '$username'
        AND password = '$password';")
            or die("Failed to query database".mysqli_error());
        $row = mysqli_fetch_array($result);
        if($row['username']==$username && $row['password']==$password){
            include_once('admin.php');
        }
        else{
            include_once('login-error.php');
        }
    }
?>