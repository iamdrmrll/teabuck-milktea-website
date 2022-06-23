<!DOCTYPE HTML>
<html>
    <head>
        <title>Result - Teabuck</title>
        <meta charset="utf-8">
        <link rel=stylesheet type="text/css" href="style.css">
        <?php
            include_once'database.php';
            $result=mysqli_query($conn,"SELECT * FROM orders
            ORDER BY id DESC");
        ?>
    </head>
    <body>
        <div id="nav-container">
            <a id="nav" href="index.php">Home</a>
            <a id="nav" href="classics.php">The Classics</a>
            <a id="nav" href="tMilktea.php">Teabuck Milktea</a>
            <a id="nav" href="yBlends.php">Yakult Blends</a>
            <a id="nav" href="funtea.php">Funtea</a>
            <a id="nav" href="tSpecial.php">Teabuck Special</a>
            <a id="nav" href="mBased.php">Milk-Based</a>
            <a id="nav" href="lBlends.php">Lemonade Blends</a>
            <a id="nav1" href="result.php">Orders</a>
            <a id="nav" href="login.php">Login</a>
        </div>
        <br><br><br>
        <div id="section">
            <center>
                <span id="name">Orders</span><br>
                <table id="tOrder">
                    <tr>
                        <th>ID</th>
                        <th>Order & Price</th>
                        <th>Quantity</th>
                    </tr>

                    <?php
                        $a=0;
                        while($row=mysqli_fetch_array($result)){
                            if($a%2==0)
                                $class="even";
                            else
                                $classname="odd";
                    ?>
                    <tr class="<?php if(isset($classmate)) echo $classmate;?>">
                        <td><?php echo $row["id"];?></td>
                        <td><?php echo $row["name"];?></td>
                        <td><?php echo $row["qnty"];?></td>
                    </tr>
                    <?php
                         $a++;
                        }
                    ?>
                </table>
            </center>
        </div>
        <div id="footer1">
            <div id="footer-content">
                <center>
                    <table id="footer-table">
                        <tr>
                            <th id="fTh">Store Hours</th>
                            <th id="fTh">Contact Info</th>
                            <th id="fTh">Location</th>
                        </tr>
                        <tr>
                            <td id="fTh">10:00am - 10:00pm</td>
                            <td id="fTh">https://www.facebook.com/TeabuckMilkTea/</td>
                            <td id="fTh">Batasan Hills, Quezon City</td>
                        </tr>
                    </table>
                    <div id="fIcons">
                        <ul>
                            <li id="fb"></li>
                            <li id="ig"></li>
                        </ul>
                    </div>
                    <div id="fTextBot">
                        Teabuck &copy; 2019 All Rights Reserved.
                    </div>
                </center>
            </div>
        </div>
    </body>
</html>