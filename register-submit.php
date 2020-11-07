<?php

$username = $_POST["username"];
$password = $_POST["password"];
$filename = 'accounts.txt';
$file = file($filename);
$users = [];

for ($i = 0; $i < count($file); $i++) {
    $temp = explode(",", $file[$i]);
    $k = $temp[0];
    $users[$i] = $k;
}

$error = false;
$exists = false;

if (empty($username) || empty($password)) {
    $error = true;
}

foreach ($users as $u) {
    if ($u == $username) {
        $exists = true;
    }
}
if (!$error && !$exists) {
    $new_user = array($username,$password . "\n");
    $str = join(',', $new_user);
    file_put_contents($filename, $str, FILE_APPEND);
}

?>

<!DOCTYPE html>
<html>
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
                color: white;
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
            a {
                outline: 0;
                background: #f2f2f2;
                width: 100%;
                border: 0;
                border-radius: 0.5rem;
                margin: 0 0 1rem;
                padding: 0.75rem;
                box-sizing: border-box;
                font: 2rem GyparodyRG, sans-serif;
            }
            h1 {
                font: 5rem GyparodyHV, sans-serif;
                margin-bottom: 2rem;
            }
            p {
                font: 2rem GyparodyRG, sans-serif;
                margin-bottom: 2rem;
            }
        </style>
    </head>
    <body>
        <div class="main">
        <?php if ($error) { ?>
            <h1>Error!</h1>
            <p>We're sorry. You've left some fields empty. Please try again.</p><br>
            <a href="register.php">back</a>
        <?php } else if ($exists) { ?>
            <h1>Error!</h1>
            <p>We're sorry. The username you have chosen already exists. Please try again.</p>
            <a href="register.php">back</a>
        <?php } else { ?>
            <h1>Welcome, <?= $username ?>!</h1>
            <a href="index.php">continue</a>
        <?php } ?>
        </div>
    </body>
</html>
