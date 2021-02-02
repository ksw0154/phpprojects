<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="index.php">WEB</h1>
    <ol>
        <?php 
            $list = scandir('data');
            $i = 0;
            while($i < count($list)) {
                if($list[$i] != '.') {
                    if($list[$i] != '..') {
                        ?>
                        <li><a href="index.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
                        <!-- <li><a href="index.php?id=CSS">CSS</a></li> -->
                        <?php
                    }
                }
                $i = $i + 1;
            }
        ?>
    </ol>

    <h2>
        <?php
            echo $_GET['id'];
        ?>
    </h2>
    <?php
        // 조건문 활용
        if($_GET['id']) {
        // == isset($_GET['id']) 사용 가능 isset : 변수에 값이 있으면 true, 없으면 false 반환
            echo file_get_contents("./data/".$_GET['id']);
        }
        else {
            echo 'WELCOME!!';
        }
        
    ?>
    <?php
        $dir = 'data';
        $file1 = scandir($dir);
        $file2 = scandir($dir, 1); // 거꾸로 실행
        print_r($file1);
        print_r($file2);
    ?>
    
</body>
</html>