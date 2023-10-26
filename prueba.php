<?php
require_once './functions-prueba.php'
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./prueba.css">
    </link>
</head>

<body>
    <div class="page">
        <div class="container">
            <?php if ($married) {
                echo "<h1>I´m married.🌝</h1>";
            } else {
                echo "<h1>I´m not married.😥</h1>";

            }

            echo $children ? "<h1>I have two children👪</h1>" : "<h1>I have no children.🐱</h1>";
            echo haveJob(true);
            echo haveJob(false);
            ?>


        </div>

    </div>



</body>

</html>