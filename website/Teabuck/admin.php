<?php
    include_once'database.php';
    $result = mysqli_query($conn,"SELECT * FROM orders");
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Admin</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        <div id="nav-container">
            <a id="nav" href="login.php">Log Out</a>
        </div>
        <br><br><br>
        <div id="section">
            <center>
                <span id="name">Orders Received</span>
                <table id="tOrder">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        $i=0;
                        while($row=mysqli_fetch_array($result)){
                            ?>
                    <tr class="<php if(isset($classname)) echo $classname;?>">
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['qnty'];?></td>
                        <td><a onclick="myButton()" href="admin-delete.php?id=<?php echo $row["id"];?>">DELETE</a></td>
                    </tr>
                    <script type="text/javascript">
                        function myButton(){
                            alert("Delete Successfully!");
                        }
                    </script>
                    <?php $i++;
                        }
                    ?>
                </table>
            </center>
        </div>
    </body>
</html>