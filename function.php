<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>function</h1>
    <?php
        $str = "Lorem ipsum dolor
        sit amet...
        another problem is...
        ";
        echo $str;
    ?>

    <h2>strlen()</h2>
    <?php
        // 괄호 안에 길이를 알고 싶은 문자를 넣어라
        echo strlen($str);
    ?>

    <h2>nl2br</h2>
    <?php
        // 줄바꿈(enter)를 누른 곳에서는 nl2br이 일어나기 때문에 줄바꿈이 발생
        echo nl2br($str);
        echo "줄바꿈 완료~"
    ?>
</body>
</html>