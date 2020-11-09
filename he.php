<!DOCTYPE>
<html>
<head>
    <link href="board.css" rel="stylesheet" />
    <?php error_reporting(0);?>
    <?php
    $cookie_name="score";
    define($cookie_name, $_COOKIE[$cookie_name]);
    ?>
    <style>
        @font-face {
            font-family: GyparodyRG;
            src: url("fonts/gyparodyrg.ttf");
        }
        /* Add a black background color to the top navigation */
        .topnav {
            background-color: #333;
            overflow: hidden;
        }

        .topnav-right {
            float: right;
            color: #00ffd9;
            text-align: right;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        .topnav-centered a {
            float: none;
            position: absolute;
            /*top: 50%;*/
            left: 50%;
            transform: translate(-50%, -50%);
        }
        /* Style the links inside the navigation bar */
        .topnav a {
            float: left;
            color: #00ffd9;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        .topnav ul{
            float: right;
            color: #00ffd9;
            text-align: right;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        /* Change the color of links on hover */
        .topnav a:hover {
            background-color: #6d7383;
            color: #00ffd9;
        }

        /* Add a color to the active/current link */
        .topnav a.active {
            background-color: #00ffd9;
            color: white;
        }
        .left{
            float: left;
        }
        .topnav cen {
            width: 60%;
            margin: 0 auto;
            text-align: center;
        }
        .topnav right{
            /*float: right;*/
            /*margin-right: 90%;*/


            color: #00ffd9;
            text-align: right;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        @media screen and (max-width: 600px) {
            .topnav a, .topnav-right {
                float: none;
                display: block;
            }

        /*.topnav cen{*/
        /*    font: 2rem GyparodyRG, sans-serif;*/
        /*    color: #00ffd9;*/
        /*    float: left;*/
        /*    position: relative;*/
        /*    text-align-last: center;*/
        /*    color: #00ffd9;*/
        /*    padding: 14px 16px;*/
        /*    text-decoration: none;*/
        /*    font-size: 17px;*/
        /*}*/
        </style>
    <?php score.session_start();
    $cookie_name = "score";
    if(!isset($_COOKIE[$cookie_name])) {
    } else {

    }
    ?>
</head>

    <body>
<div class="topnav">
    <a class="gameboard.php" href="#home">Home</a>
    <a href="#about">Start Over</a>
    <div class="topnav-centered"><a href="#home" class="active">Home</a></div>
    <div class="topnav-right">
    Welcome, <?= $_SESSION['Username'] ?>
    Score: <?=$_COOKIE[$cookie_name]?></div>




    </div>


</div>
</body>