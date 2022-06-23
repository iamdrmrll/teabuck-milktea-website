<!DOCTYPE HTML>
<html lang="en-us">
    <head>
        <title>The Classics - Teabuck</title>
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
        <?php
            include_once('database.php');
            if(isset($_POST['btn-wOrder1'])){
                $name1=$_POST['name1'];
                $qnty1=$_POST['qnty1'];

                mysqli_query($conn, "INSERT INTO orders
                (name, qnty)
                VALUES
                ('$name1','$qnty1')");
            }
        ?>
        <?php
            include_once('database.php');
            if(isset($_POST['btn-wOrder2'])){
                $name2=$_POST['name2'];
                $qnty2=$_POST['qnty2'];

                mysqli_query($conn, "INSERT INTO orders
                (name, qnty)
                VALUES
                ('$name2','$qnty2')");
            }
        ?>
        <?php
            include_once('database.php');
            if(isset($_POST['btn-wOrder3'])){
                $name3=$_POST['name3'];
                $qnty3=$_POST['qnty3'];

                mysqli_query($conn, "INSERT INTO orders
                (name, qnty)
                VALUES
                ('$name3','$qnty3')");
            }
        ?>
        <?php
            include_once('database.php');
            if(isset($_POST['btn-wOrder4'])){
                $name4=$_POST['name4'];
                $qnty4=$_POST['qnty4'];

                mysqli_query($conn, "INSERT INTO orders
                (name, qnty)
                VALUES
                ('$name4','$qnty4')");
            }
        ?>
        <?php
            include_once('database.php');
            if(isset($_POST['btn-wOrder5'])){
                $name5=$_POST['name5'];
                $qnty5=$_POST['qnty5'];

                mysqli_query($conn, "INSERT INTO orders
                (name, qnty)
                VALUES
                ('$name5','$qnty5')");
            }
        ?>
        <form action="classics.php" method="post">
            <div id="nav-container">
                <a id="nav" href="index.php">Home</a>
                <a id="nav1" href="classics.php">The Classics</a>
                <a id="nav" href="tMilktea.php">Teabuck Milktea</a>
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
                    <span id="name">The Classics</span><br>
                    <table id="size-container">
                        <th><h6>Small(12oz) Php49</h6></th>
                        <th><h6>Medium(16oz) Php79</h6></th>
                        <th><h6>Large(22oz) Php89</h6></th>
                        <th><h6>X-Large(1 Liter) Php129</h6></th>
                    </table>
                </center>
                <center>
                    <div id="image-container">
                        <center>
                            <div id="content">
                                <img src="image/wintermelon.png" id="image-content">
                                <label>Wintermelon</label><br>
                                <table id="rTable">
                                    <tr>
                                        <td>S</td>
                                        <td>M</td>
                                        <td>L</td>
                                        <td>XL</td>
                                    </tr>
                                    <tr>
                                        <div>
                                            <td><input value="The Classics | Wintermelon | Small Php49" type="radio" name="name"></td>
                                            <td><input value="The Classics | Wintermelon | Medium Php79" type="radio" name="name"></td>
                                            <td><input value="The Classics | Wintermelon | Large Php89" type="radio" name="name"></td>
                                            <td><input value="The Classics | Wintermelon | X-Large Php129" type="radio" name="name"></td>
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
                    <div id="image-container">
                        <center>
                            <div id="content">
                                <img src="image/pic.png" id="image-content">
                                <label>Okinawa</label><br>
                                <table id="rTable">
                                    <tr>
                                        <td>S</td>
                                        <td>M</td>
                                        <td>L</td>
                                        <td>XL</td>
                                    </tr>
                                    <tr>
                                        <div>
                                            <td><input value="The Classics | Okinawa | Small Php39" type="radio" name="name1"></td>
                                            <td><input value="The Classics | Okinawa | Medium Php49" type="radio" name="name1"></td>
                                            <td><input value="The Classics | Okinawa | Large Php59" type="radio" name="name1"></td>
                                            <td><input value="The Classics | Okinawa | X-Large Php69" type="radio" name="name1"></td>
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
                                Quantity: <input id="qnty" name="qnty1" type="number" min="0">
                                <div>
                                    <button id="btn-order" name="btn-wOrder1" onclick="myFunction1()">Add to Cart</button>
                                </div>
                                <script type=text/javascript>
                                    function myFunction1(){
                                        alert("Ordered Successfully!");
                                    }
                                </script>
                            </div>
                        </center>
                    </div>
                    <div id="image-container">
                        <center>
                            <div id="content">
                                <img src="image/darkChocolate.png" id="image-content">
                                <label>Dark Chocolate</label><br>
                                <table id="rTable">
                                    <tr>
                                        <td>S</td>
                                        <td>M</td>
                                        <td>L</td>
                                        <td>XL</td>
                                    </tr>
                                    <tr>
                                        <div>
                                            <td><input value="The Classics | Dark Chocolate | Small Php39" type="radio" name="name2"></td>
                                            <td><input value="The Classics | Dark Chocolate | Medium Php49" type="radio" name="name2"></td>
                                            <td><input value="The Classics | Dark Chocolate | Large Php59" type="radio" name="name2"></td>
                                            <td><input value="The Classics | Dark Chocolate | X-Large Php69" type="radio" name="name2"></td>
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
                                Quantity: <input id="qnty" name="qnty2" type="number" min="0">
                                <div>
                                    <button id="btn-order" name="btn-wOrder2" onclick="myFunction2()">Add to Cart</button>
                                </div>
                                <script type=text/javascript>
                                    function myFunction2(){
                                        alert("Ordered Successfully!");
                                    }
                                </script>
                            </div>
                        </center>
                    </div>
                    <br>
                    <div id="image-container">
                        <center>
                            <div id="content">
                                <img src="image/ujiMatcha.png" id="image-content">
                                <label>Uji Matcha</label><br>
                                <table id="rTable">
                                    <tr>
                                        <td>S</td>
                                        <td>M</td>
                                        <td>L</td>
                                        <td>XL</td>
                                    </tr>
                                    <tr>
                                        <div>
                                            <td><input value="The Classics | Uji Matcha | Small Php39" type="radio" name="name3"></td>
                                            <td><input value="The Classics | Uji Matcha | Medium Php49" type="radio" name="name3"></td>
                                            <td><input value="The Classics | Uji Matcha | Large Php59" type="radio" name="name3"></td>
                                            <td><input value="The Classics | Uji Matcha | X-Large Php69" type="radio" name="name3"></td>
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
                                Quantity: <input id="qnty" name="qnty3" type="number" min="0">
                                <div>
                                    <button id="btn-order" name="btn-wOrder3" onclick="myFunction3()">Add to Cart</button>
                                </div>
                                <script type=text/javascript>
                                    function myFunction3(){
                                        alert("Ordered Successfully!");
                                    }
                                </script>
                            </div>
                        </center>
                    </div>
                    <div id="image-container">
                        <center>
                            <div id="content">
                                <img src="image/pic.png" id="image-content">
                                <label>Hokkaido</label><br>
                                <table id="rTable">
                                    <tr>
                                        <td>S</td>
                                        <td>M</td>
                                        <td>L</td>
                                        <td>XL</td>
                                    </tr>
                                    <tr>
                                        <div>
                                            <td><input value="The Classics | Hokkaido | Small Php39" type="radio" name="name4"></td>
                                            <td><input value="The Classics | Hokkaido | Medium Php49" type="radio" name="name4"></td>
                                            <td><input value="The Classics | Hokkaido | Large Php59" type="radio" name="name4"></td>
                                            <td><input value="The Classics | Hokkaido | X-Large Php69" type="radio" name="name4"></td>
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
                                Quantity: <input id="qnty" name="qnty4" type="number" min="0">
                                <div>
                                    <button id="btn-order" name="btn-wOrder4" onclick="myFunction4()">Add to Cart</button>
                                </div>
                                <script type=text/javascript>
                                    function myFunction4(){
                                        alert("Ordered Successfully!");
                                    }
                                </script>
                            </div>
                        </center>
                    </div>
                    <div id="image-container">
                        <center>
                            <div id="content">
                                <img src="image/pic.png" id="image-content">
                                <label>Taro</label><br>
                                <table id="rTable">
                                    <tr>
                                        <td>S</td>
                                        <td>M</td>
                                        <td>L</td>
                                        <td>XL</td>
                                    </tr>
                                    <tr>
                                        <div>
                                            <td><input value="The Classics | Taro | Small Php39" type="radio" name="name5"></td>
                                            <td><input value="The Classics | Taro | Medium Php49" type="radio" name="name5"></td>
                                            <td><input value="The Classics | Taro | Large Php59" type="radio" name="name5"></td>
                                            <td><input value="The Classics | Taro | X-Large Php69" type="radio" name="name5"></td>
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
                                Quantity: <input id="qnty" name="qnty5" type="number" min="0">
                                <div>
                                    <button id="btn-order" id="btn-order" name="btn-wOrder5" onclick="myFunction4()">Add to Cart</button>
                                </div>
                                <script type=text/javascript>
                                    function myFunction5(){
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