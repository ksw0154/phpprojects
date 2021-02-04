<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href= "index2.php">WEB</a></h1>
    <ol>
        <?php
            $list = scandir('./data');
            // scandir을 사용하면 0, 1번째 원소가 ., ..으로 나타남
            var_dump($list);
            echo '<br>';
            echo count($list);

            $list2 = ['Abel', 'Smith', 'Adam'];
            var_dump($list2);
            echo '<br>';
        ?>
    </ol>
</body>
</html>