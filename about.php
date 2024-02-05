<?php
    $usertext= $_get["usertext"];
    echo $usertext

    $censored= $_get["censored"];
    echo $censored

    $word=str_replace($censored, '***' , $usertext);
    echo $word
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p>
        <?php
        echo $usertext;
        echo strlen($usertext)
        ?>
    </p>

    <p>
        <?php
        echo $word;
        echo strlen($word)
        ?>
    </p>

    
</body>
</html>