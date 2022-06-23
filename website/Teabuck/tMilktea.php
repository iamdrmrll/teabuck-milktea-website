<!DOCTYPE HTML>
<html lang="en-us">
    <head>
        <title>Teabuck Milktea - Teabuck</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
            include_once('database.php');
            if(isset($_POST['btn-wOrder'])){
                $name=$_POST['name'];
                $qnty=$_POST['qnty'];

                mysqli_query($conn, "INSERT INTO orders
                (name, qnty)
                VALUES
                ('$name','$qnty')");
            }
        ?>
        <form action="tMilktea.php" method="post">
            <div id="nav-container">
                <a id="nav" href="index.php">Home</a>
                <a id="nav" href="classics.php">The Classics</a>
                <a id="nav1" href="tMilktea.php">Teabuck Milktea</a>
                <a id="nav" href="yBlends.php">Yakult Blends</a>
                <a id="nav" href="funtea.php">Funtea</a>
                <a id="nav" href="tSpecial.php">Teabuck Special</a>
                <a id="nav" href="mBased.php">Milk-Based</a>
                <a id="nav" href="lBlends.php">Lemonade Blends</a>
                <a id="nav" href="result.php">Orders</a>
                <a id="nav" href="login.php">Login</a>
            </div>
            <div id="section">
                <center>
                    <br><br><br>
                    <span id="name">Teabuck Milktea</span><br>
                    <table id="size-container">
                        <th><h6>Small Php39</h6></th>
                        <th><h6>Medium Php49</h6></th>
                        <th><h6>Large Php59</h6></th>
                    </table>
                </center>
                <center>
                    <div id="image-container">
                        <center>
                            <div id="content">
                                <img src="image/teabuckMilktea.png" id="image-content">
                                <label>Teabuck Milktea</label><br>
                                <table>
                                    <tr>
                                        <td>S</td>
                                        <td>M</td>
                                        <td>L</td>
                                    </tr>
                                    <tr>
                                        <div>
                                            <td><input value="Teabuck Milktea | Teabuck Milktea | Small Php39" type="radio" name="name"></td>
                                            <td><input value="Teabuck Milktea | Teabuck Milktea | Medium Php49" type="radio" name="name"></td>
                                            <td><input value="Teabuck Milktea | Teabuck Milktea | Large Php59" type="radio" name="name"></td>
                                            <script>
                                                var radios = document.getElementsByTagName('input');
                                                for(i=0; i<radios.length; i++){
                                                    radios[i].onclick = function(e){
                                                        if(e.ctrlKey){
                                                            this.checked = false;
                                                        }
                                                    }
                                                }
                                            </script>
                                        </div>
                                    </tr>
                                </table>
                                <br>
                                Quantity: <input id="qnty" name="qnty" type="number" min="0" size=3>
                                <div>
                                    <button id="btn-order" name="btn-wOrder" onclick="myFunction()">Add to Cart</button>
                                </div>
                                <script type=text/javascript>
                                    function myFunction(){
                                        alert("Ordered Successfully!");
                                    }
                                </script>
                            </div>
                        </center>
                    </div>
                </center>
            </div>
            <div id="footer">
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
                                <a href="https://www.facebook.com/TeabuckMilkTea/"><li id="fb"></li></a>
                                <a href="#"><li id="ig"></li></a>
                            </ul>
                        </div>
                        <div id="fTextBot">
                            Teabuck &copy; 2019 All Rights Reserved.
                        </div>
                    </center>
                </div>
            </div>
        </form>
    </body>
</html>