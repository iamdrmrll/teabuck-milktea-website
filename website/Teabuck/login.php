<!DOCTYPE HTML>
<html>
    <head>
        <title>Log In</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        <form action="login-process.php" method="post">
            <div id="nav-container">
                <a id="nav" href="index.php">Home</a>
                <a id="nav" href="classics.php">The Classics</a>
                <a id="nav" href="tMilktea.php">Teabuck Milktea</a>
                <a id="nav" href="yBlends.php">Yakult Blends</a>
                <a id="nav" href="funtea.php">Funtea</a>
                <a id="nav" href="tSpecial.php">Teabuck Special</a>
                <a id="nav" href="mBased.php">Milk-Based</a>
                <a id="nav" href="lBlends.php">Lemonade Blends</a>
                <a id="nav" href="result.php">Orders</a>
                <a id="nav1" href="login.php">Login</a>
            </div>
            <div>
                <br><br><br>
                <center>
                        <div id="section">
                            <div id="login-container">
                                <img id="logo-login" src="image/logo.png">
                                <center>
                                    <h1 id="login-name">Log In</h1><br>
                                    Username: <input id="login-input" type="text" name="user" required><br>
                                    Password: <input id="login-input" type="password" name="pwd" required><br>
                                    <input id="login-button" name="btn-login" type="submit" value="Log In">
                                </center>
                            </div>
                        </div>
                </center>
            </div>
        </form>
    </body>
</html>