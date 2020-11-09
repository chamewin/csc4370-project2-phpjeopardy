<html>
<head>
    <?php include "head.php"?>
    <link href="board.css" rel="stylesheet" />
    <meta http-equiv = "refresh" content = "3; url = gameboard.php" />
</head>
<body>
<?php
$cookie_name = "score";
$cookie_value = 0;
define($cookie_name, $_COOKIE[$cookie_name]);

?>


<?php score.session_start();

error_reporting(E_ERROR | E_PARSE);

setcookie($cookie_name, $cookie_value);


?>
<html>
<body>

<?php
error_reporting(E_ERROR | E_PARSE);


if (isset($_POST["tables-100"])) {
    $answer = $_POST["tables-100"];
    if ($answer == "table tag") {
        ?>
        <h1>CORRECT!</h1><br>

        <a href="gameboard.php"><h2>Back to game</h2></a>

        <?php score.session.session_start();

        error_reporting(E_ERROR | E_PARSE);
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = (int) $_COOKIE["$cookie_name"] + 100;
        setcookie($cookie_name, $value);
        ?>



        <?php

    }else{?>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>

        <?php
    }
}
elseif (isset($_POST["tables-200"])) {
    error_reporting(E_ERROR | E_PARSE);
    $answer = $_POST["tables-200"];
    if ($answer == "tr tag") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a><br><br>

        <?php score.session.session_start();


        error_reporting(E_ERROR | E_PARSE);
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = (int) $_COOKIE["$cookie_name"] + 200;
        setcookie($cookie_name, $value);
        ?>





        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}
elseif (isset($_POST["tables-300"])) {
    $answer = $_POST["tables-300"];
    if ($answer == "colgroup tag") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 300;

        setcookie($cookie_name, $value);
        ?>


        <?php


    }else{?>
        <h1>WRONG!</h1><br>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 300;

        setcookie($cookie_name, $value);
        ?>
        <a href="gameboard.php">Back to game</a>
        <?php
    }
}
elseif (isset($_POST["tables-400"])) {
    $answer = $_POST["tables-400"];
    if ($answer == "bold") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 400;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}
elseif (isset($_POST["tables-500"])) {
    $answer = $_POST["tables-500"];
    if ($answer == "rowspan") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 500;

        setcookie($cookie_name, $value);
        ?>


        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>

        <?php
    }
}


//image
elseif (isset($_POST["image-100"])) {
    $answer = $_POST["image-100"];
    if ($answer == "map tag") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 100;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}
elseif (isset($_POST["image-200"])) {
    $answer = $_POST["image-200"];
    if ($answer == "area tag") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 200;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}

elseif (isset($_POST["image-300"])) {
    $answer = $_POST["image-300"];
    if ($answer == "usemap") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 300;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}

elseif (isset($_POST["image-400"])) {
    $answer = $_POST["image-400"];
    if ($answer == "rect, circle, poly, default") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 400;

        setcookie($cookie_name, $value);
        ?>



        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}

elseif (isset($_POST["image-500"])) {
    $answer = $_POST["image-500"];
    if ($answer == "picturee tag") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 500;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}

//forms

elseif (isset($_POST["forms-100"])) {
    $answer = $_POST["forms-100"];
    if ($answer == "form tag") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 100;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}
elseif (isset($_POST["forms-200"])) {
    $answer = $_POST["forms-200"];
    if ($answer == "input tag") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 200;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}

elseif (isset($_POST["forms-300"])) {
    $answer = $_POST["forms-300"];
    if ($answer == "elect one button") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 300;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}

elseif (isset($_POST["forms-400"])) {
    $answer = $_POST["forms-400"];
    if ($answer == "label tag") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 400;

        setcookie($cookie_name, $value);
        ?>



        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}

elseif (isset($_POST["forms-500"])) {
    $answer = $_POST["forms-500"];
    if ($answer == "22") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 500;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}

//css

elseif (isset($_POST["css-100"])) {
    $answer = $_POST["css-100"];
    if ($answer == "cascading style sheets") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 100;

        setcookie($cookie_name, $value);
        ?>

        <center>YOUR SCORE IS <?php echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];?></center>


        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        You will be redirected...<br>
        <a href="gameboard.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}
elseif (isset($_POST["css-200"])) {
    $answer = $_POST["css-200"];
    if ($answer == "inline, interenal, external") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 200;

        setcookie($cookie_name, $value);
        ?>

        <center>YOUR SCORE IS <?php echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];?></center>


        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}

elseif (isset($_POST["css-300"])) {
    $answer = $_POST["css-300"];
    if ($answer == "*.") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 300;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}

elseif (isset($_POST["css-400"])) {
    $answer = $_POST["css-400"];
    if ($answer == "elements") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 400;

        setcookie($cookie_name, $value);
        ?>



        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>

        <?php
    }
}

elseif (isset($_POST["css-500"])) {
    $answer = $_POST["css-500"];
    if ($answer == "!important") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 500;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}


//media

elseif (isset($_POST["media-100"])) {
    $answer = $_POST["media-100"];
    if ($answer == "multimedia") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 100;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}
elseif (isset($_POST["media-200"])) {
    $answer = $_POST["media-200"];
    if ($answer == "file extension") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 200;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];
        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}

elseif (isset($_POST["media-300"])) {
    $answer = $_POST["media-300"];
    if ($answer == "embed tag") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 300;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}

elseif (isset($_POST["media-400"])) {
    $answer = $_POST["media-400"];
    if ($answer == "3") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 400;

        setcookie($cookie_name, $value);
        ?>



        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>

        <?php
    }
}

elseif (isset($_POST["media-500"])) {
    $answer = $_POST["media-500"];
    if ($answer == "mp4") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
    <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 400;

        setcookie($cookie_name, $value);
    ?>

    <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}
//echo "Your score is: ".$_COOKIE[$cookie_name];
?>






















