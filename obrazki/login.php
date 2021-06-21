
<?php
session_start();

if((!isset($_POST['login']))||(!isset($_POST['haslo'])))
{
        header('Location: index.php');
        exit();
}

require_once"connect.php";

$polaczeie = @new mysqli($host,$db_user,$db_password,$db_name);
if($polaczeie->connect_errno!=0)
{
    echo"Error: ".$polaczeie->connect_errno;
}
else 
{
$login = $_POST['login'];
$haslo = $_POST['haslo'];

$sql= "SELECT*FROM użytkownicy WHERE Login='$login' AND Haslo = '$haslo'";

if( $rezultat = @$polaczeie->query($sql))
{
    $ilu_userow= $rezultat->num_rows;
    if($ilu_userow>0)
    {
        $_SESSION['zalogowany']=true;

        $wiersz = $rezultat->fetch_assoc();

        $_SESSION['id']=$wiersz['ID'];

        $_SESSION['user'] = $wiersz['Login'];
        $_SESSION['test'] = $wiersz['test'];
        $_SESSION['email'] =$wiersz['Email'];
        
        unset($_SESSION['blad']);

        $rezultat->close();
        header('Location: gra.php');




    }else{
        $_SESSION['blad']= '<span style="color:red">Nieprawidlowy Login Lub Haslo   </span>';
        header('Location: index.php');
    }

}

$polaczeie->close();

}


?>
