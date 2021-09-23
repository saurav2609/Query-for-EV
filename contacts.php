<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Grequo </title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
        <link type="text/css" rel="stylesheet" href="fonts/font.css">
        <link rel="icon" href="images/icon1.png" >
    </head>
    <body id="_4">
        <!-- navigation bar -->
        <a href="index.php">
            <div id="log">
                <div id="i">G</div><div id="cir">G</div><div id="ntro">requo</div>
            </div>
        </a>
        <ul id="nav-bar">
            <a href="index.php"><li>Home</li></a>
            <a href="categories.php"><li>Categories</li></a>
            <a href="contacts.php"><li id="home">Contact</li></a>
            <a href="ask.php"><li>Ask Question</li></a>
            <?php 
                if(! isset($_SESSION['user'])){
            ?>
            <a href="login.php"><li>Log In</li></a>
            <a href="signup.php"><li>Sign Up</li></a>
            <?php
                }
                else{
            ?>
            <a href="profile.php"><li>Hi, <?php echo $_SESSION["user"]; ?></li></a>
            <a href="logout.php"><li>Log Out</li></a>
            <?php
                }
            ?>
        </ul>
        <!-- content -->
        <div id="content" class="clearfix">
        <br><br><br><br><br><br>
            <div id="box-1">
                <div class="heading">
                    <center>
                    <h1 class="logo"><div id="i">G</div><div id="cir">G</div><div id="ntro">requo</div></h1>
                    <p id="tag-line">Platform for EV Enthusiasts</p>
                    </center>
                </div>
            </div>
            <div id="box-2">
                <div id="text">
                    <h1>Compsoft Technologies</h1>
                    <p>
                        services@compstechnolgies.com<br>
                        Contact: +91 (***) ***-****<br>
                        
                    </p>
                </div>
            </div>
            
        </div>
        <br>
        <br>
        <br>
        <br> <br> <br>
        <br><br><br><br>
    
        <!-- Footer -->
        <div id="footer">
            &copy; 2021 &bull; Compsoft Technologies
        </div>
        
    </body>
    
</html>