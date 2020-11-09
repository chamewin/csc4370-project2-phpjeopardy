<!DOCTYPE>
<html>
<head>
    <link href="board.css" rel="stylesheet" />
    <style>
        @font-face {
            font-family: GyparodyRG;
            src: url("fonts/gyparodyrg.ttf");
        }
        body {
            font-family: permanent marker;
            height: 100vh;
            width: 100vw;
            background: #2a3698;
            overflow: hidden;
            text-decoration: none;
        }
        .btn-highlight {
            border-color: #0287a9 !important;
            color: #ffffff !important;
            text-decoration: none;
        }
        .btn-outline {
            border: 2px solid #00cbff !important;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            padding: 0.5em 1em 0.5em 1em !important;
            text-decoration: none;
        }
        .header {
            width: 100%;
            height: 30%;
            m
        }
        left{
            float: left;
        }
        .header a {
            float left;
            text-decoration: none;
            color: #2a3698;
            outline: 0;
            background: #f2f2f2;
            border: 0;
            border-radius: 0.5rem;
            padding: 0.75rem;
            box-sizing: border-box;
            font: 2rem GyparodyRG, sans-serif;
            text-decoration: none;
        }
        .header p {
            float: left;
            margin-right: 2rem;
            font: 2rem GyparodyRG, sans-serif;
            color: white;
            text-decoration: none;
        }
        .right {
            font: 2rem GyparodyRG, sans-serif;
            float: right;
            text-decoration: none;
            text-decoration: none;
        }
        .title{
            padding: 2px;
            font: 2rem GyparodyRG, sans-serif;
            color: #00cbff;
            text-align: center;
            text-decoration: none;


        }
        h1{
            padding-left: 2px;
            font: 2rem GyparodyRG, sans-serif;
            color: #00cbff;
            text-align: center;
            text-decoration: none;
        }
        left{

        }
        title{

        }
        center{
            font: 4rem GyparodyRG, sans-serif;
            color: white;
            text-align: center;
            text-decoration: none;
        }
        .box {
            width: 40%;
            margin: 0 auto;
            background: rgba(255,255,255,0.2);
            padding: 35px;
            border: 2px solid #fff;
            border-radius: 20px/50px;
            background-clip: padding-box;
            text-align: center;
            text-decoration: none;
        }

    </style>
    <?php error_reporting(0);?>
    <?php score.session.session_start();
    $cookie_name = "score";
    if(!isset($_COOKIE[$cookie_name])) {
    } else {

    }
    ?>
</head>
<body>
<div class="left">
    <a href="logout.php" class="nav-link btn-outline btn-highlight">Log Out</a>
    <a href="index.php" class="nav-link btn-outline btn-highlight">Home</a>
</div>
<h1>Jeopardy</h1>
<div class="left">Welcome, <?= $_SESSION['Username'] ?></div>

<div class="right"><a href="logout.php">Log Out</a></div>

<div class="title">
    JEOPARDY</a><br>
    <a href="index.php" class="nav-link btn-outline btn-highlight"></a>
</div>
<a href="register.php" class="nav-link btn-outline btn-highlight">Register</a>
<a href="" class="nav-link btn-outline btn-highlight">Score: <?=$_COOKIE[$cookie_name]?></a>

</body>
</html>


<div class="nav-container" style="display: block; opacity: 1;">
    <ul class="nav-top">
        <li class="active"><a href="/" class="nav-link">Home</a></li>
        <li><a href="/features" class="nav-link">Features</a></li>
        <li><a href="/pricing" class="nav-link">Pricing</a></li>
        <li><a href="/contact" class="nav-link">Contact</a></li>
        <li><a href="https://app.workstack.io/login" class="nav-link btn-outline">Login</a></li>
        <li><a href="https://app.workstack.io/register" class="nav-link btn-outline btn-highlight">Register</a></li>
    </ul>
</div>