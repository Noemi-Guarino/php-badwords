<?php
    $usertext= $_GET["usertext"];

    $censored= $_GET["censored"];

    $word=str_replace($censored, '***' , $usertext);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Testo originale</h2>
    <p>
        <?php
            echo $usertext;
            echo '. La lunghezza del testo è:' . strlen($usertext); 
        ?>
    </p>

    <hr>

    <h2>Testo modificato</h2>
    <p>
        <?php
            echo $word;
            echo '. La lunghezza del testo è:' . strlen($word);
        ?>
    </p>


    
</body>
</html>