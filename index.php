<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP Jeopardy</title>
        <style>
            @font-face {
                font-family: GyparodyHV;
                src: url("fonts/gyparodyhv.ttf");
            }
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
                font: 10rem GyparodyHV, sans-serif;
            }

            form{
                display: inline-block;
            }
            .btn {
                border:none;
                border-radius: 5px;
                display:inline-block;
                padding:1rem 2rem;
                vertical-align:middle;
                overflow:hidden;
                text-decoration:none;
                color:inherit;
                background-color:inherit;
                text-align:center;
                cursor:pointer;
                white-space:nowrap;
                font: 2rem GyparodyRG, sans-serif;
            }
            .btn:hover {
                box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
            }
            .white {
                color:#000!important;
                background-color:#fff!important;
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
        </style>
    </head>
    <body>
        <div class="main">
            <h1>PHP JEOPARDY!</h1>
            <a href="login.php">
                <span class="btn white">Login</span>
            </a>
        </div>
    </body>
</html>
