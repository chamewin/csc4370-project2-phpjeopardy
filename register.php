<?php

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP Jeopardy</title>
        <style>
            @font-face {
                font-family: GyparodyRG;
                src: url("fonts/gyparodyrg.ttf");
            }
            body {
                height: 100vh;
                width: 100vw;
                background-color: #2a3698;
            }
            h1 {
                color: white;
                text-align: center;
            }
            .main {
                margin: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                text-align: center;
            }
            .form {
                position: relative;
                background: #FFFFFF;
                margin: 0 auto;
                padding: 3rem;
                text-align: center;
                box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            }
            .form input {
                font: 0.8rem GyparodyRG, sans-serif;
                outline: 0;
                background: #f2f2f2;
                width: 100%;
                border: 0;
                margin: 0 0 1rem;
                padding: 1rem;
                box-sizing: border-box;
            }
            .form input[type="submit"] {
                text-transform: uppercase;
                background: #1155CC;
                color: white;
                cursor: pointer;
            }
            .form input[type="submit"]:hover {
                background: #0d419d;
            }
            .form h1 {
                font: 3rem GyparodyRG, sans-serif;
                color: #1155cc;
            }
            .form p {
                font-family: "Roboto Light", sans-serif;
                margin: 0.5rem 0 0;
                font-size: 0.75rem;
            }
        </style>
    </head>
    <body>
        <div class="main">
            <div class="form">
                <form action="register-submit.php" method="post" class="login-form">
                    <h1>Sign Up</h1>
                    <input type="text" name="username" placeholder="username">
                    <input type="password" name="password" placeholder="password">
                    <input type="submit" value="create">
                    <p>Already registered? <a href="login.php">Sign In</a></p>
                </form>
            </div>
        </div>
    </body>
</html>