<!DOCTYPE html>
<html>
<head>
    <title>Questions</title>
    <link href="questions.css" type="text/css" rel="stylesheet"/>
</head>

<body>



<pre>
<!--    --><?php //score.session_start();
//    error_reporting(0);
//    $cookie_name = "score";
//    echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];
//
//
//?>


</pre>

    <?php
    $id = $_GET['id'];
//    echo $id;
    ?>
    </pre>

<?php
if($id == "tables-100") {?>

<form action="answer.php" method="post">
    <fieldset>
        <h2>What tag defines a HTML table?</h2><br>

        <strong class="column">What is:</strong>
        <input type="text" name="tables-100" size="17" maxlength="16" id="tables-100"><br><br>

        <input name="sub" type="submit" value="Submit">
    </fieldset>
<?php
}
else if($id == "tables-200"){?>

    <form action="answer.php" method="post">
        <fieldset>
            <h2>What tags are used within the table tag</h2><br>

            <strong class="column">What is:</strong>
            <input type="text" name="tables-100" size="17" maxlength="16" id="tables-200"><br><br>

            <input name="sub" type="submit" value="Submit">
        </fieldset>
        <?php
}
else if($id == "tables-300"){?>

        <form action="answer.php" method="post">
            <fieldset>
                <h2>What is the colgroup tag?</h2><br>

                <strong class="column">What is:</strong>
                <input type="text" name="tables-300" size="17" maxlength="16" id="tables-300"><br><br>

                <input name="sub" type="submit" value="Submit">
            </fieldset>
            <?php
}
else if($id == "tables-400"){?>

            <form action="answer.php" method="post">
                <fieldset>
                    <h2>By default, the text in table header tag is what?</h2><br>

                    <strong class="column">What is:</strong>
                    <input type="text" name="tables-400" size="17" maxlength="16" id="tables-400"><br><br>

                    <input name ="tables-400" type="submit" value="Submit">
                </fieldset>
                <?php
} else if($id == "tables-500"){?>

                <form action="answer.php" method="post">
                    <fieldset>
                        <h2>What are two attributes define how far rows and columns reach in a table?</h2><br>

                        <strong class="column">What is:</strong>
                        <input type="text" name="tables-500" size="17" maxlength="16" id="tables-500"><br><br>

                        <input type="submit" value="Submit">
                    </fieldset>
                    <?php
}else if($id == "image-100"){?>

                    <form action="answer.php" method="post">
                        <fieldset>
                            <h2>What tag defines a HTML image map?</h2><br>

                            <strong class="column">What is:</strong>
                            <input type="text" name="image-100" size="17" maxlength="16" id="tables-500"><br><br>

                            <input type="submit" value="Submit">
                        </fieldset>
                        <?php

}else if($id == "image-200"){?>

                        <form action="answer.php" method="post">
                            <fieldset>
                                <h2>
                                    What defines the clickable region inside of an image map?
                                </h2><br>

                                <strong class="column">What is:</strong>
                                <input type="text" name="image-200" size="17" maxlength="16" id="tables-500"><br><br>

                                <input type="submit" value="Submit">
                            </fieldset>
                            <?php

}else if($id == "image-300"){ ?>

                            <form action="answer.php" method="post">
                                <fieldset>
                                    <h2>What attribute of image element points to an image map?</h2><br>

                                    <strong class="column">What is:</strong>
                                    <input type="text" name="image-300" size="17" maxlength="16" id="tables-200"><br><br>

                                    <input name="sub" type="submit" value="Submit">
                                </fieldset>
                                <?php
                                }
else if($id == "image-400"){ ?>

                                <form action="answer.php" method="post">
                                    <fieldset>
                                        <h2>What shape options are there for the clickable region of an image map?</h2><br>

                                        <strong class="column">What is:</strong>
                                        <input type="text" name="image-400" size="17" maxlength="16" id="tables-200"><br><br>

                                        <input name="sub" type="submit" value="Submit">
                                    </fieldset>
                                    <?php
                                    }
else if($id == "image-500"){ ?>

                                    <form action="answer.php" method="post">
                                        <fieldset>
                                            <h2>What tags are used within the table tag</h2><br>

                                            <strong class="column">What is:</strong>
                                            <input type="text" name="image-500" size="17" maxlength="16" id="tables-200"><br><br>

                                            <input name="sub" type="submit" value="Submit">
                                        </fieldset>
                                        <?php
                                        }

else if($id == "forms-100"){ ?>

                                            <form action="answer.php" method="post">
                                                <fieldset>
                                                    <h2>What container is used for multiple image resources?</h2><br>

                                                    <strong class="column">What is:</strong>
                                                    <input type="text" name="forms-100" size="17" maxlength="16" id="tables-200"><br><br>

                                                    <input name="sub" type="submit" value="Submit">
                                                </fieldset>
                                                <?php
                                                }
else if($id == "forms-200"){ ?>

                                                <form action="answer.php" method="post">
                                                    <fieldset>
                                                        <h2>What is the most used form element?</h2><br>

                                                        <strong class="column">What is:</strong>
                                                        <input type="text" name="forms-200" size="17" maxlength="16" id="tables-200"><br><br>

                                                        <input name="sub" type="submit" value="Submit">
                                                    </fieldset>
                                                    <?php
                                                    }
else if($id == "forms-300"){ ?>

                                                    <form action="answer.php" method="post">
                                                        <fieldset>
                                                            <h2>What is the function of a radio button?</h2><br>

                                                            <strong class="column">What is:</strong>
                                                            <input type="text" name="forms-300" size="17" maxlength="16" id="tables-200"><br><br>

                                                            <input name="sub" type="submit" value="Submit">
                                                        </fieldset>
                                                        <?php
                                                        }
else if($id == "forms-400"){ ?>

                                                        <form action="answer.php" method="post">
                                                            <fieldset>
                                                                <h2>What element is useful for screen-reader users, because the screen-reader will read out loud the label when the user focus on the input element?</h2><br>

                                                                <strong class="column">What is:</strong>
                                                                <input type="text" name="forms-400" size="17" maxlength="16" id="tables-200"><br><br>

                                                                <input name="sub" type="submit" value="Submit">
                                                            </fieldset>
                                                            <?php
                                                            }
else if($id == "forms-500"){ ?>

                                                            <form action="answer.php" method="post">
                                                                <fieldset>
                                                                    <h2>How many input types are there for forms?</h2><br>

                                                                    <strong class="column">What is:</strong>
                                                                    <input type="text" name="forms-500" size="17" maxlength="16" id="tables-200"><br><br>

                                                                    <input name="sub" type="submit" value="Submit">
                                                                </fieldset>
                                                                <?php
                                                                }
else if($id == "css-100"){ ?>

                                            <form action="answer.php" method="post">
                                                <fieldset>
                                                    <h2>What does CSS stand for?</h2><br>

                                                    <strong class="column">What is:</strong>
                                                    <input type="text" name="css-100" size="17" maxlength="16" id="tables-200"><br><br>

                                                    <input name="sub" type="submit" value="Submit">
                                                </fieldset>
                                                <?php
                                                }
else if($id == "css-200"){ ?>

                                                <form action="answer.php" method="post">
                                                    <fieldset>
                                                        <h2>What are the 3 ways CSS can be added to HTML document?</h2><br>

                                                        <strong class="column">What is:</strong>
                                                        <input type="text" name="css-200" size="17" maxlength="16" id="tables-200"><br><br>

                                                        <input name="sub" type="submit" value="Submit">
                                                    </fieldset>
                                                    <?php
                                                    }
else if($id == "css-300"){ ?>

                                                    <form action="answer.php" method="post">
                                                        <fieldset>
                                                            <h2>What is the universal selector in CSS that has low specificity?</h2><br>

                                                            <strong class="column">What is:</strong>
                                                            <input type="text" name="css-300" size="17" maxlength="16" id="tables-200"><br><br>

                                                            <input name="sub" type="submit" value="Submit">
                                                        </fieldset>
                                                        <?php
                                                        }
else if($id == "css-400"){ ?>

                                                        <form action="answer.php" method="post">
                                                            <fieldset>
                                                                <h2>What is the lowest level in CSS specificity hierarchy?</h2><br>

                                                                <strong class="column">What is:</strong>
                                                                <input type="text" name="css-400" size="17" maxlength="16" id="tables-200"><br><br>

                                                                <input name="sub" type="submit" value="Submit">
                                                            </fieldset>
                                                            <?php
                                                            }
else if($id == "css-500"){ ?>

                                                            <form action="answer.php" method="post">
                                                                <fieldset>
                                                                    <h2>What is used to override all of element, class, ID selectors, and inline style attributes of CSS element?</h2><br>

                                                                    <strong class="column">What is:</strong>
                                                                    <input type="text" name="css-500" size="17" maxlength="16" id="tables-200"><br><br>

                                                                    <input name="sub" type="submit" value="Submit">
                                                                </fieldset>
                                                                <?php
                                                                }
else if($id == "media-100"){ ?>

                                                                <form action="answer.php" method="post">
                                                                    <fieldset>
                                                                        <h2>Images, music, sound videos, records, film, animations, and more are all different formats of what?</h2><br>

                                                                        <strong class="column">What is:</strong>
                                                                        <input type="text" name="media-100" size="17" maxlength="16" id="tables-200"><br><br>

                                                                        <input name="sub" type="submit" value="Submit">
                                                                    </fieldset>
                                                                    <?php
                                                                    }
else if($id == "media-200"){ ?>

                                                                    <form action="answer.php" method="post">
                                                                        <fieldset>
                                                                            <h2>What can you look at to tell what type of multimedia a file is?</h2><br>

                                                                            <strong class="column">What is:</strong>
                                                                            <input type="text" name="media-200" size="17" maxlength="16" id="tables-200"><br><br>

                                                                            <input name="sub" type="submit" value="Submit">
                                                                        </fieldset>
                                                                        <?php
                                                                        }
else if($id == "media-300"){ ?>

                                                                        <form action="answer.php" method="post">
                                                                            <fieldset>
                                                                                <h2>What tag caused the browser itself to include controls for the multimedia automatically?</h2><br>

                                                                                <strong class="column">What is:</strong>
                                                                                <input type="text" name="media-300" size="17" maxlength="16" id="tables-200"><br><br>

                                                                                <input name="sub" type="submit" value="Submit">
                                                                            </fieldset>
                                                                            <?php
                                                                            }
else if($id == "media-400"){ ?>

                                                                            <form action="answer.php" method="post">
                                                                                <fieldset>
                                                                                    <h2>How many common audio formats are supported with HTML standard?</h2><br>

                                                                                    <strong class="column">What is:</strong>
                                                                                    <input type="text" name="media-400" size="17" maxlength="16" id="tables-200"><br><br>

                                                                                    <input name="sub" type="submit" value="Submit">
                                                                                </fieldset>
                                                                                <?php
                                                                                }
else if($id == "media-500"){ ?>

                                                                                <form action="answer.php" method="post">
                                                                                    <fieldset>
                                                                                        <h2>What are the common video formats that are supported by HTML standard?</h2><br>

                                                                                        <strong class="column">What is:</strong>
                                                                                        <input type="text" name="media-500" size="17" maxlength="16" id="tables-200"><br><br>

                                                                                        <input name="sub" type="submit" value="Submit">
                                                                                    </fieldset>
                                                                                    <?php
                                                                                    }








?>




<center><?php
    echo "YOUR SCORE IS " .$_COOKIE["score"];
    ?></center>

</body>
</html>
