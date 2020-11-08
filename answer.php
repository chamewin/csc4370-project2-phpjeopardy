<!DOCTYPE>
<html>
<head>
    <link href="questions.css" rel="stylesheet" />
</head>
<body>
<?php error_reporting(0);?>

<!---->
<?php score.session.session_start();
error_reporting(0);
$cookie_name = "score";
$cookie_value = 0;
setcookie($cookie_name, $cookie_value);


//echo "VALUE: ".$_COOKIE[$cookie_name]."<br>";
//$cookie_value = (int)$_COOKIE[$cookie_name]+100;
//echo "PLUS: ".$cookie_value."<br>";
//setcookie($cookie_name, $cookie_value);

echo "Your score is: ".$_COOKIE[$cookie_name];
?>
<html>
<body>

<?php
//if(!isset($_COOKIE[$cookie_name])) {
//    echo "Cookie named '" . $cookie_name . "' is not set!";
//} else {
//    echo "Cookie " . $cookie_name . " is set!<br>";
//    echo "Value is: " . $_COOKIE[$cookie_name];
//    //$value = $_COOKIE[$cookie_name] + 100;
//    $value = (int) $_COOKIE["$cookie_name"]++;
//    echo $value."<br>";
//    $value += 100;
//    echo $value."<br>";
//
//    echo"value is: ".$_COOKIE[$cookie_name]+100;
//}
//?>


<?php


if (isset($_POST["tables-100"])) {
    $answer = $_POST["tables-100"];
    if ($answer == "table tag") {
        ?>
        <h1>CORRECT!</h1><br>

        <a href="gameboard.php"><h2>Back to game</h2></a>

        <?php score.session.session_start();

        error_reporting(0);
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = (int) $_COOKIE["$cookie_name"]+100;
        setcookie($cookie_name, $value);
        ?>



        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
    }
}
elseif (isset($_POST["tables-200"])) {
    $answer = $_POST["tables-200"];
    if ($answer == "table tag") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a><br><br>

        <?php score.session.session_start();
        error_reporting(0);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = $cookie_value+200;
        echo "VALUE: ".$value."<br>";


        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = (int) $_COOKIE["$cookie_name"]+100;
        setcookie($cookie_name, $value);


        setcookie($cookie_name, $value);
        ?>

        <center>YOUR SCORE IS <?php echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];?></center>



        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
    }
}
elseif (isset($_POST["tables-300"])) {
    $answer = $_POST["tables-300"];
    if ($answer == "table tag") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(0);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = $cookie_value+300;
        setcookie($cookie_name, $value);
        ?>

        <center>YOUR SCORE IS <?php echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];?></center>


        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
    }
}
elseif (isset($_POST["tables-400"])) {
    $answer = $_POST["tables-400"];
    if ($answer == "table tag") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(0);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = $cookie_value+400;
        setcookie($cookie_name, $value);
        ?>

        <center>YOUR SCORE IS <?php echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];?></center>





        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
    }
}
elseif (isset($_POST["tables-500"])) {
    $answer = $_POST["tables-500"];
    if ($answer == "table tag") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(0);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = $cookie_value+500;
        setcookie($cookie_name, $value);
        ?>
        <center>YOUR SCORE IS <?php echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];?></center>


        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
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
        error_reporting(0);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = $cookie_value+100;
        setcookie($cookie_name, $value);
        ?>

        <center>YOUR SCORE IS <?php echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];?></center>


        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
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
        error_reporting(0);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = $cookie_value+200;
        setcookie($cookie_name, $value);
        ?>

        <center>YOUR SCORE IS <?php echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];?></center>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
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
        error_reporting(0);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = $cookie_value+300;
        setcookie($cookie_name, $value);
        ?>

        <center>YOUR SCORE IS <?php echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];?></center>




        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
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
        error_reporting(0);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = $cookie_value+400;
        setcookie($cookie_name, $value);
        ?>



        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
    }
}

elseif (isset($_POST["image-500"])) {
    $answer = $_POST["image-500"];
    if ($answer == "pictue tag") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(0);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = $cookie_value+500;
        setcookie($cookie_name, $value);
        ?>
        <center>YOUR SCORE IS <?php echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];?></center>



        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
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
        error_reporting(0);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = $cookie_value+100;
        setcookie($cookie_name, $value);
        ?>

        <center>YOUR SCORE IS <?php echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];?></center>


        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
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
        error_reporting(0);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = $cookie_value+200;
        setcookie($cookie_name, $value);
        ?>

        <center>YOUR SCORE IS <?php echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];?></center>


        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
    }
}

elseif (isset($_POST["forms-300"])) {
    $answer = $_POST["forms-300"];
    if ($answer == "lets a user select one button") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(0);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = $cookie_value+300;
        setcookie($cookie_name, $value);
        ?>

        <center>YOUR SCORE IS <?php echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];?></center>





        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
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
        error_reporting(0);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = $cookie_value+400;
        setcookie($cookie_name, $value);
        ?>



        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
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
        error_reporting(0);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = $cookie_value+500;
        setcookie($cookie_name, $value);
        ?>
        <center>YOUR SCORE IS <?php echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];?></center>



        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
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
        error_reporting(0);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = $cookie_value+100;
        setcookie($cookie_name, $value);
        ?>

        <center>YOUR SCORE IS <?php echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];?></center>


        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
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
        error_reporting(0);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = $cookie_value+200;
        setcookie($cookie_name, $value);
        ?>

        <center>YOUR SCORE IS <?php echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];?></center>


        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
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
        error_reporting(0);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = $cookie_value+300;
        setcookie($cookie_name, $value);
        ?>

        <center>YOUR SCORE IS <?php echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];?></center>





        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
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
        error_reporting(0);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = $cookie_value+400;
        setcookie($cookie_name, $value);
        ?>



        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
    }
}

elseif (isset($_POST["css-500"])) {
    $answer = $_POST["css-500"];
    if ($answer == "!impotant") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(0);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = $cookie_value+500;
        setcookie($cookie_name, $value);
        ?>
        <center>YOUR SCORE IS <?php echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];?></center>



        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
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
        error_reporting(0);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = $cookie_value+100;
        setcookie($cookie_name, $value);
        ?>

        <center>YOUR SCORE IS <?php echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];?></center>


        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
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
        error_reporting(0);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = $cookie_value+200;
        setcookie($cookie_name, $value);
        ?>

        <center>YOUR SCORE IS <?php echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];?></center>



        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
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
        error_reporting(0);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = $cookie_value+200;
        setcookie($cookie_name, $value);
        ?>

        <center>YOUR SCORE IS <?php echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];?></center>


        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
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
        error_reporting(0);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = $cookie_value+400;
        setcookie($cookie_name, $value);
        ?>



        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
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
    error_reporting(0);
    $cookie_name = "score";
    $_COOKIE[$cookie_name];
    $cookie_value = $_COOKIE[$cookie_value];
    $value = $cookie_value+500;
    setcookie($cookie_name, $value);
    ?>
    <center>YOUR SCORE IS <?php echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];?></center>




    <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="gameboard.php">Back to game</a>
        <?php
    }
}























