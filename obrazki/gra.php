<?php
    session_start();

    if(!isset($_SESSION['zalogowany']))
    {
        header('location: index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo"<p>Witaj ".$_SESSION['user'].'![<a href="logout.php">Wyloguj sie</a>]</p>';
        echo"<p>Komunikat ".$_SESSION['test']."</p>";
        echo"Email  : ".$_SESSION['email'];
    ?>


    
</body>
</html>