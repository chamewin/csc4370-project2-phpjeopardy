<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Jeopardy</title>
        <style>
            @font-face {
                font-family: GyparodyRG;
                src: url("fonts/gyparodyrg.ttf");
            }
            body {
                height: 100vh;
                width: 100vw;
                background: #2a3698;
                overflow: hidden;
            }
            .header {
                display: block;
                margin: 2rem 1rem 0 0;
            }
            .header a {
                outline: 0;
                background: #f2f2f2;
                border: 0;
                border-radius: 0.5rem;
                padding: 0.75rem;
                box-sizing: border-box;
                font: 2rem GyparodyRG, sans-serif;
            }
            .header p {
                float: left;
                margin-right: 2rem;
                font: 2rem GyparodyRG, sans-serif;
                color: white;
            }
            .right {
                float: right;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <div class="right">
                <p>Welcome, <?= $_SESSION['Username'] ?></p>
                <a href="logout.php">Log Out</a>
            </div>
        </div>
    </body>
</html>
