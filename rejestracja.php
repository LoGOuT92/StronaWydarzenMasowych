<?php
    session_start();

    if(isset($_POST['nick']))
    {

        $wszystko_OK=true;
//[][][][][][][][][][][][][][][][][][][][]NICK[][][][][][][][][][][][][][][][]
        $nick=$_POST['nick'];

        if((strlen($nick)<3)||(strlen($nick)>20))
        {
            $wszystko_OK=false;
            $_SESSION['e_nick']="Nick musi posiadac od 3 do 20 znakow";
        }

		if (ctype_alnum($nick)==false)
		{
			$wszystko_OK=false;
			$_SESSION['e_nick']="Nick może skladac sie tylko z liter i cyfr";
		}
//[][][][][][][][][][][][][][][][][][][][]EMAIL[][][][][][][][][][][][][][][][]

        $email=$_POST['Email'];
//[][][][][][][][][][][][][][][][][][][][]haslo[][][][][][][][][][][][][][][][]

        $haslo1 =$_POST['haslo1'];
        $haslo2 =$_POST['haslo2'];

        if($haslo1 != $haslo2)
        {
            $wszystko_OK==false;
            $_SESSION['e_haslo']="Podane hasla nie sa identyczne!";
        }

        if(strlen($haslo1)<5)
        {
            $wszystko_OK==false;
            $_SESSION['e_haslo']="Podane haslo jest za krotkie! ";
        }
        if(strlen($haslo1)>20)
        {
            $wszystko_OK==false;
            $_SESSION['e_haslo']="Podane haslo jest za dlugie! ";
        }
//[][][][][][][][][][][][][][][][][][][][]regulamin[][][][][][][][][][][][][][][][]

       // if(!isset($_SESSION['regulamin']))
       // {
        //    $wszystko_OK==false;
      //      $_SESSION['e_regulamin']="Muszisz zaakceptować regulamin!";
     //   }
//[][][][][][][][][][][][][][][][][][][][]czy istnieje w bazie ?[][][][][][][][][][][][][][][][]

        require_once"connect.php";

        $polaczeie = @new mysqli($host,$db_user,$db_password,$db_name);
        if($polaczeie->connect_errno!=0)
        {
            echo"Error: ".$polaczeie->connect_errno;
        }
        else       
        {
            //mail
            $rezultat= $polaczeie->query("SELECT ID from użytkownicy WHERE Email='$email'");

            $ile_takich_maili = $rezultat->num_rows;
            if($ile_takich_maili>0)
            {
                $wszystko_OK=false;
                $_SESSION['e_email']="Istnieje już konto przypisane do tego adresu e-mail!";
            }	

            //login
            $rezultat= $polaczeie->query("SELECT ID from użytkownicy WHERE Login ='$nick'");

            $ile_takich_nickow = $rezultat->num_rows;
            if($ile_takich_nickow>0)
            {
                $wszystko_OK=false;
                $_SESSION['e_nick']="Istnieje uzytkownik o takim nicku!";
            }	




            if($wszystko_OK==true)
            {
                    if($polaczeie->query("INSERT INTO użytkownicy VALUES(3,'$nick','$haslo1','$email',10)"))
                    {
                        $_SESSION['udana']=true;
                        header("Location: logowanie.php");
                    }
                    else
                    {
                        echo "cos poszlo nie tak :G";
                    }
            }
            $polaczeie->close();
        }
    }

//[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href ="rejestracja2.css"type="text/css" />
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

        <a href="logowanie.php">
        <div class="wyloguj">
        POWROT
        </div></a>

        <div id="logowanie1">

<form method="post">

    Login: <br/><input type="text" name="nick"/><br/>
    <?php
			if (isset($_SESSION['e_nick']))
			{
				echo '<div class="error1">'.$_SESSION['e_nick'].'</div>';
				unset($_SESSION['e_nick']);
			}
    ?>


    Email: <br/><input type="text" name="Email"/><br/>
            <?php
                if(isset($_SESSION['e_email']))
                {
                    echo '<div class="error1">'.$_SESSION['e_email'].'</div>';
                    unset($_SESSION['e_email']);
                }
            ?>



    Haslo: <br/><input type="password" name="haslo1"/><br/>
    Powtorz Haslo: <br/><input type="password" name="haslo2"/><br/>
    <?php
        if(isset($_SESSION['e_haslo']))
        {
            echo '<div class="error1">'.$_SESSION['e_haslo'].'</div>';
            unset($_SESSION['e_haslo']);
        }
    ?>


    <input type="checkbox" name="regulamin"/> Akceptuje regulamin
    <?php
        if(isset($_SESSION['e_regulamin']))
        {
            echo '<div class="error1">'.$_SESSION['e_regulamin'].'</div>';
            unset($_SESSION['e_regulamin']);
        }
    ?>
        <br/>
    <input type="submit" value="rejestracja"/>

</form>

        </div>

</div>
    
</body>
</html>