<!DOCTYPE html>
<html>
<head>
    <title>Questions</title>
    <link href="questions.css" type="text/css" rel="stylesheet"/>
</head>

<body>



<pre>
    <?php score.session_start();
    $id = $_GET['id'];
    error_reporting(0);
    $cookie_name = "score";
    echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];


?>


</pre>

    <?php
    $id = $_GET['id'];
//    echo $id;
    ?>
</pre>





<center><?php
    echo "YOUR SCORE IS " .$_COOKIE["score"];
    ?></center>

</body>
</html>
