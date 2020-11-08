

<!DOCTYPE>
<html>
<head>
    <link href="board.css" rel="stylesheet" />
</head>
<pre><center>
        <?php error_reporting(0);?>
<?php score.session.session_start();
$cookie_name = "score";
if(!isset($_COOKIE[$cookie_name])) {
//    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];


}



//
//$cookie_name = "score";
//$cookie_value = $_COOKIE[];
//setcookie(score, $cookie_value); // 86400 = 1 day
//echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];
?>
</pre>
</center>

<body>

<div id="gameplay">
    <div class="grid grid-play" style="height:100vh; ">
        <div class="grid-row grid-row-cats" style="">

            <div class="grid-cell " data-row="0" data-col="0">
                <div class="cell">
                    <div class="cell-inner cat-cell">Tables</div>
                </div>
            </div>
            <div class="grid-cell " data-row="0" data-col="1">
                <div class="cell">
                    <div class="cell-inner cat-cell">Image Maps</div>
                </div>
            </div>
            <div class="grid-cell " data-row="0" data-col="2">
                <div class="cell">
                    <div class="cell-inner cat-cell">Forms</div>
                </div>
            </div>
            <div class="grid-cell " data-row="0" data-col="3">
                <div class="cell">
                    <div class="cell-inner cat-cell">CSS</div>
                </div>
            </div>
            <div class="grid-cell " data-row="0" data-col="4">
                <div class="cell">
                    <div class="cell-inner cat-cell">Multimedia</div>
                </div>
            </div>
        </div>

        <div class="grid-row grid-row-questions  grid-first-row">
            <div class="cell-group grid-cell" data-row="1" data-col="0">
                <div class="cell points">
                    <div class="value">
                        <!--<a href="card.php" id="tables-1">$100</a>&ndash;&gt;-->
                        <a href='card.php?id=tables-100'>$100</a>





                        <!--                        <div class="value">-->
                        <!--                            <a class="button" href="card.php" id="tables-1">100$</a>-->
                        <!--                        </div>-->

                        <!--                        <div id="popup" class="overlay">-->
                        <!--                            <div class="popup">-->
                        <!--                                <h2>Tables for 100$</h2>-->
                        <!--                                <a class="close" href="#">&times;</a>-->
                        <!--                                <div class="content">-->


                        <!--                                    What tag defines a HTML table?<br>-->

                        <!--                                    <form action="card.php" method="post">-->
                        <!--                                        What is: <input type="text" name="tables-1"><br>-->

                        <!--                                        <input type="submit">-->
                        <!--                                    </form>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->










                    </div>















                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="1" data-col="1">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=image-100'>$100</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="1" data-col="2">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=forms-100'>$100</a></div>

                    <div class="question">Question</div>
                    <div class="answer">WAnswer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="1" data-col="3">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=css-100'>$100</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="1" data-col="4">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=media-100'>$100</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
        </div>

        <div class="grid-row grid-row-questions  grid-second-row">
            <div class="cell-group grid-cell" data-row="2" data-col="0">
                <div class="cell points">
                    <div class="value">
                        <a href='card.php?id=tables-200'>$200</a>
                    </div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="2" data-col="1">
                <div class="cell points">
                    <div class="value">
                        <a href='card.php?id=maps-200'>$200</a>
                    </div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="2" data-col="2">
                <div class="cell points">
                    <div class="value">    <a href='card.php?id=forms-200'>$200</a></div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell"  data-row="2" data-col="3">
                <div class="cell points">
                    <div class="value">    <a href='card.php?id=css-200'>$200</a></div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="2" data-col="4">
                <div class="cell points">
                    <div class="value">    <a href='card.php?id=media-200'>$200</a></div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
        </div>
        <div class="grid-row grid-row-questions ">
            <div class="cell-group grid-cell"  data-row="3" data-col="0">
                <div class="cell points">
                    <div class="value">    <a href='card.php?id=tables-300'>$300</a></div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="3" data-col="1">
                <div class="cell points">
                    <div class="value">    <a href='card.php?id=image-300'>$300</a></div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="3" data-col="2">
                <div class="cell points">
                    <div class="value">    <a href='card.php?id=-forms'>$300</a></div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="3" data-col="3">
                <div class="cell points">
                    <div class="value">    <a href='card.php?id=css-300'>$300</a></div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="3" data-col="4">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=media-300'>$300</a></div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
        </div>
        <div class="grid-row grid-row-questions  grid-forth-row">
            <div class="cell-group grid-cell" data-row="4" data-col="0">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=tables-400'>$400</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="4" data-col="1">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=image-400'>$400</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="4" data-col="2">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=forms-400'>$400</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="4" data-col="3">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=css-400'>$400</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="4" data-col="4">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=media-400'>$400</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
        </div>
        <div class="grid-row grid-row-questions grid-last-row ">
            <div class="cell-group grid-cell"data-row="5" data-col="0">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=tables-500'>$500</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="5" data-col="1">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=image-500'>$500</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="5" data-col="2">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=forms-500'>$500</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="5" data-col="3">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=css-500'>$500</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="5" data-col="4">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=media-500'>$500</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>

        </div>
    </div>
</div>
<center>
<!--    --><?php
//    echo "YOUR SCORE IS " .$_COOKIE['score'];
//    ?>
</center>
</body>
</html>

