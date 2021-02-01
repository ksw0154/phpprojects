<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // literal : 어떤 데이터를 그 언어에서 표현할 때 쓰는 기호 ('', "")
        // string을 표현하는 기호 : single quoted, double quoted
    ?>

    <h1>String & String Operator</h1>
    <?php
        // 'Hello world!' 자체는 string literal이라고 해서 문자를 표현하는 방법
        // 이 상태로 쓸 수 없으니 echo를 붙여줘야 함
        echo 'Hello World!';

        // 작은 따옴표(') : single quoted
        // 큰 따옴표 안에 작은 따옴표를 넣어서 표현 가능하고 " 안에 "가 있을 수 없음
        // 역슬래시(\)를 이용해서 사용 가능
    ?>

    <?php
        echo "Hello 'w'orld!";
        echo "Hello \"w\"orld!";
    ?>
    
    <h2>concatenation operator</h2>
    <?php
        // 결합 연산자 (.) : 좌항과 우항을 결합해 하나의 문자열을 만들어낼 수 있음
        echo "Hello "."world";
    ?>

    <h2>String length function</h2>

    <?php
        echo "Hello world";
        echo strlen("Hello world");
    ?>

</body>
</html>