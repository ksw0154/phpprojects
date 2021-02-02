<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Conditional</h1>
        <?php 
        // 시간 순서에 따라 동작한다!
        echo '1<br>';
        echo '2<br>';
        echo '3<br>';
        ?>

        <h2>if</h2>
        <?php 
            echo '1<br>';
            if(true) {
                echo '2<br>';
            }
            else {
                echo '3<br>';
            }
            echo '4<br>';
            
        ?>
    </body>
</html>