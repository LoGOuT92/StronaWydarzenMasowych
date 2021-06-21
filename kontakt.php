<?php
    session_start();

    $flaga3=false;
    $zmienna10=0;
    //$imie1=$_POST['imie'];
    //$nazisko1=$_POST['nazwisko'];
    //$email1=$_POST['email'];
   // $powod=$_POST['powod'];
   // $uwagi=$_POST['uwagi'];
    $zmienna=0;
    $zmienna33=0;
    if(isset($_POST['imie']))
    {
      $flaga3=true;
      $imie1=$_POST['imie'];

      if(isset($_POST['email']))
      {
        $email1=$_POST['email'];
        $zmienna10+=1;
      }
      if(isset($_POST['nazwisko']))
      {
        $nazisko1=$_POST['nazwisko'];
        $zmienna10+=1;
      }
      if(isset($_POST['powod']))
      {
        $powod=$_POST['powod'];
        $zmienna10+=1;
      }
      if(isset($_POST['uwagi']))
      {
        $uwagi=$_POST['uwagi'];
        $zmienna10+=1;
      }
      require_once"connect.php";

      $polaczeie = @new mysqli($host,$db_user,$db_password,$db_name);
      if($polaczeie->connect_errno!=0)
      {
          echo"Error: ".$polaczeie->connect_errno;
          $flaga=false;
          echo "nie";
      }
      else       
      {
        if($zmienna10==4)
        {
        $rezultat= $polaczeie->query("INSERT INTO formularz VALUES(NULL,'$imie1','$nazisko1','$email1','$powod','$uwagi','0')");
        $flaga=true;
        $zmienna33+=1;
        echo "takkkk";

        }
        echo "tak";
  
        $polaczeie->close();
      }



    }




   

?>



<!DOCTYPE html>

<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilety</title>
    <link rel="stylesheet" href ="styleKontakt.css"type="text/css" />
</head>


<body>
        <div id="cont">
            <div id="cont-menu">

                <a href="index.php">
                    <div class="nav"id="a1">
                         HOME
                    </div > </a>

                            <a href="EDM.php">
                     <div class="nav"id="a2">
                         podstrona1
                    </div> </a>
                    
                            <a href="Podstrona2.php">    
                    <div class="nav"id="a3">
                         podstrona2
                    </div>  </a>

                            <a href="Wydarzenia.php">      
                    <div class="nav"id="a4">
                        Wydarzenia
                    </div>  </a>

                            <a href="kontakt.php">
                    <div class="nav"id="a5">
                        Kontakt
                    </div>  </a>
                </div>

                <div id="kontakt">


                    <div class="container">

                    <form method="post">
                       
                          <div class="Pole">
                            <div class="col-25">
                              <label for="fname">Podaj imie</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="imie"  placeholder="Twoje Imie..."name="imie">
                            </div>

                          </div>

                          <div class="Pole">
                            <div class="col-25">
                              <label for="Nazwisko">Podaj Nazwisko</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="nazwisko"  placeholder="Twoje Nazwisko..."name="nazwisko">
                            </div>
                          </div>

                          <div class="Pole">
                            <div class="col-25">
                              <label for="fname">Podaj swoj adres email</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="email"  placeholder="Twoj email"name="email">
                            </div>

                          </div>

                          <div class="row">
                            <div class="col-25">
                              <label for="Powod">Podaj powod</label>
                            </div>

                            <div class="col-75">
                              <select id="pwood"name ="powod" >
                                <option value="powod1">Powod 1</option>
                                <option value="powod2">Powod 2</option>
                                <option value="powod3">Powod 3</option>
                              </select>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-25">
                              <label for="uwagi">Twoje uwagi</label>
                            </div>
                            <div class="col-75">
                              <textarea id="uwagi" name="uwagi" placeholder="Twoje uwagi" style="height:200px"name="uwagi"></textarea>
                            </div>
                          </div>

                          <div class="row">
                            <input type="submit" value="wyślij">
                          </div>
                      </form>
                      <form action="kontakt.php" method="POST" enctype="multipart/form-data">
         <input type="submit" value="Wyślij pliki"/>
            <input type="file" class="custom-file-input"  name="image[]" multiple="">
</form>






<?php
      if(isset($_POST["delete"])){
        echo $_POST["delete"];
        unlink("files/".$_POST["delete"]);
    }
 if(isset($_FILES['image'])){
       $errors= array();
           $file_name = $_FILES['image']['name'];
           $file_size =$_FILES['image']['size'];
           $file_tmp =$_FILES['image']['tmp_name']; 
           $file_type=$_FILES['image']['type'];
$extensions= array("jpeg","jpg","png"); 
   foreach($file_name as $key => $value){ 
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'][$key])));
           if(in_array($file_ext,$extensions)=== false){
              $errors[]="Rozszerzenie niedozwolone.";
           } 
           if($file_size[$key] > 2097152){
              $errors[]='Plik nie może być większy niż 2 MB.';
           } 
      }  
   if(empty($errors)==true){        
      foreach($file_name as $key => $value){ 
         move_uploaded_file($file_tmp[$key],"files/".$_GET["folder"]."/".$file_name[$key]);
      echo "Success";
    } 
   }
   else{
      print_r($errors);
   }
}
                   
                        if(isset($zmienna33)&&(isset($_POST['imie'])))
                        { 
                          
                            echo '<div>';

                            echo 'imie: '.$_POST['imie'].'</br>'; 
                            

                            echo 'Nazwisko: '.$_POST['nazwisko'].'</br>';
                            
                           

                            echo 'email: '.$_POST['email'].'</br>';
                            
  
                              echo 'Powod: '.$_POST['powod'].'</br>';
   

                              echo 'Uwagi: '.$_POST['uwagi'].'</br>';
                           
                            echo '</div>';    
                          
                          $zmienna==0;
                        }
                      ?>
                      </div>


                </div>


              

        </div>




</body>
</html>