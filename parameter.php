<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    안녕하세요. <?php echo $_GET['address'];?>에 사시는 <?php echo $_GET['name'];?> 님
    <!--
        parameter.php?name=Abel
        URL로 전달된 name의 값에 해당하는, PHP에서 약속된 특수한 이름의 변수($_GET['name'])을 넣음
        변수를 추가할 경우 & 기호 추가
        parameter.php?address=Seoul&name=Abel -> PHP와 상관없는 URL의 규칙
    -->
</body>
</html>