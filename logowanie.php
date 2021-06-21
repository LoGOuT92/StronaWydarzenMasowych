<?php
    session_start();

    if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))
    {
        header('Location: index.php');
        exit();
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href ="logowanie1.css"type="text/css" />
    <title>Document</title>
</head>
<body>

<div id="container">
        <div id="klocki">
            <div class="kafel"id="grey"></div>
            <div class="kafel"id="yellow"></div>
            <div class="kafel"id="blue"></div>
            <div class="kafel"id="green"></div>
            <div class="kafel"id="purple"></div>
            <div class="kafel"id="red"></div>
            <div class="kafel"id="blue2"></div>
        </div>

        <a href="index.php">
        <div class="wyloguj">
        POWROT
        </div></a>

    <div id="logowanie">

<form action="login.php"method="post">
<br/>

Login: 

<input type="text" name="login" /> <br/>
<br/><br/>

Haslo:        
<input type="password"name="haslo"/><br/><br/>

<input type="submit"value="Zaloguj" name="przycisk" />   <br/>
</form>
<a href="rejestracja.php">
        <div class="reje">
        rejestracja
        

        </div></a>

        <?php
                if(isset($_SESSION['udana']))

                {
                    echo '<div >Rejestracja sie udala!</div>';
                    unset($_SESSION['udana']);
                }
        ?>



<?php
if(isset($_SESSION['blad']))
{
    echo$_SESSION['blad'];
}
?>   
    </div>
</div>


</body>
</html>