<!DOCTYPE HTML>
<html lang="en-us">
    <head>
        <title>Order - Teabuck</title>
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
        <form action="yBlends.php" method="post">
            <div id="nav-container">
                <a id="nav" href="index.php">Home</a>
                <a id="nav" href="classics.php">The Classics</a>
                <a id="nav" href="tMilktea.php">Teabuck Milktea</a>
                <a id="nav1" href="yBlends.php">Yakult Blends</a>
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
                    <span id="name">Yakult Blends</span><br>
                    <table id="size-container">
                        <th><h6>Medium(16oz) Php69</h6></th>
                        <th><h6>Large(22oz) Php89</h6></th>
                    </table>
                </center>
                <center>
                    <div id="image-container">
                        <center>
                            <div id="content">
                                <img src="image/mango.png" id="image-content">
                                <label>MAN-YAK</label><br>
                                <label>Mango + Yakult</label><br>
                                <table id="rTable">
                                    <tr>
                                        <td>M</td>
                                        <td>L</td>
                                    </tr>
                                    <tr>
                                        <div>
                                            <td><input value="Yakult Blends | MAN-YAK | Medium Php69" type="radio" name="name"></td>
                                            <td><input value="Yakult Blends | MAN-YAK | Large Php89" type="radio" name="name"></td>
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
                                <img src="image/strawberry.png" id="image-content">
                                <label>BERRY-YAK</label><br>
                                <label>Strawberry + Yakult</label><br>
                                <table id="rTable">
                                    <tr>
                                        <td>M</td>
                                        <td>L</td>
                                    </tr>
                                    <tr>
                                        <div>
                                            <td><input value="Yakult Blends | BERRY-YAK | Medium Php69" type="radio" name="name1"></td>
                                            <td><input value="Yakult Blends | BERRY-YAK | Large Php89" type="radio" name="name1"></td>
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
                                <img src="image/kiwi.png" id="image-content">
                                <label>YAK-KI</label><br>
                                <label>Yakult + Kiwi</label><br>
                                <table id="rTable">
                                    <tr>
                                        <td>M</td>
                                        <td>L</td>
                                    </tr>
                                    <tr>
                                        <div>
                                            <td><input value="Yakult Blends | YAK-KI | Medium Php69" type="radio" name="name2"></td>
                                            <td><input value="Yakult Blends | YAK-KI | Large Php89" type="radio" name="name2"></td>
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
                                <img src="image/yakult.png" id="image-content">
                                <label>YAK-APE</label><br>
                                <label>Yakult + Grape</label><br>
                                <table id="rTable">
                                    <tr>
                                        <td>M</td>
                                        <td>L</td>
                                    </tr>
                                    <tr>
                                        <div>
                                            <td><input value="Yakult Blends | YAK-APE | Medium Php69" type="radio" name="name3"></td>
                                            <td><input value="Yakult Blends | YAK-APE | Large Php89" type="radio" name="name3"></td>
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
                                <img src="image/yakult.png" id="image-content">
                                <label>YAK-HEE</label><br>
                                <label>Yakult + Lychee</label><br>
                                <table id="rTable">
                                    <tr>
                                        <td>M</td>
                                        <td>L</td>
                                    </tr>
                                    <tr>
                                        <div>
                                            <td><input value="Yakult Blends | YAK-HEE | Medium Php69" type="radio" name="name4"></td>
                                            <td><input value="Yakult Blends | YAK-HEE | Large Php89" type="radio" name="name4"></td>
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
                                <img src="image/yakult.png" id="image-content">
                                <label>YAK-APPLE</label><br>
                                <label>Yakult + Green Apple</label><br>
                                <table id="rTable">
                                    <tr>
                                        <td>M</td>
                                        <td>L</td>
                                    </tr>
                                    <tr>
                                        <div>
                                            <td><input value="Yakult Blends | Yak-APPLE | Medium Php69" type="radio" name="name5"></td>
                                            <td><input value="Yakult Blends | Yak-APPLE | Large Php89" type="radio" name="name5"></td>
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
                                    <button id="btn-order" name="btn-wOrder5" onclick="myFunction4()">Add to Cart</button>
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
        </form>
    </body>
</html>