<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Array</h1>
    <?php
        $coworkers = array('egoing', 'leezche', 'duru', 'taeho');
        echo $coworkers[1].'<br>';
        echo $coworkers[2].'<br>';
        var_dump(count($coworkers));
        echo '<br>';
        // 배열 끝에 원소 추가
        array_push($coworkers, 'graphittie'); //$coworkers[] = 'graphittie';와 동일
        array_splice($coworkers, 2, 0, 'Abel'); // $coworkers[2] 앞에 Abel 추가 ($coworkers[2] == Abel)
        var_dump($coworkers);
    ?>
</body>
</html>