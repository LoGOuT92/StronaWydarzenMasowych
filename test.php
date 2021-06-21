<form action="kontakt.php" method="POST" enctype="multipart/form-data">
         <input type="submit" value="Wyślij pliki"/>
            <input type="file" class="custom-file-input"  name="image[]" multiple="">
</form>
<div class="card-body">
   <h4 class="card-title">Pliki w trakcie wysyłania, nie zamykaj tego okna… <i class="fa fa-upload"></i></h4>
   <div class="progress m-t-20">
      <div class="progress-bar bg-success" style="width: 0%; height:15px;" role="progressbar">0%</div>
   </div>
</div>





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