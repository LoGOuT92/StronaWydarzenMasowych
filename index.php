<?php
session_start();



?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilety</title>
    <link rel="stylesheet" href ="style1.css"type="text/css" />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
      $(document).ready(function(){
        $(".btn1").click(function(){
          $("p").animate({borderRightWidth: "1000px"});
          $("o").animate({borderRightWidth: "1000px"});
          
        });
        $(".btn2").click(function(){
          $("p").animate({borderRightWidth: "0px"});
          $("o").animate({borderRightWidth: "0px"});
        });
      });
      </script>
</head>


<body>
    <div class="cont">

        <div id="menu">

            
            
            <div id="imag"></div>
            
            <div class="scroll-text">↓scroll↓</div>

            <div class="kafel"id="grey"></div>
            <div class="kafel"id="yellow"></div>
            <div class="kafel"id="blue"></div>
            <div class="kafel"id="green"></div>
            <div class="kafel"id="purple"></div>
            <div class="kafel"id="red"></div>
            <div class="kafel"id="blue2"></div>

        </div>




        <?php
     


if(!isset($_SESSION['zalogowany']))
{
echo<<<END
  <div id="main"style="border: 2px solid rgb(255, 0, 0);" >
  <button class="btn1"id="go2">GO!</button>
  <button class="btn2"id="go2">Re</button><br></br>
  <a href="logowanie.php">
<div class="wyloguj">
Zaloguj
        

</div></a>

<p style="border:0px solid rgb(200, 31, 252)">,. </?>
<o style="border:0px solid rgb(0, 255, 42)"> </o>


     
        
    <button id="go"> </button>


<div class="block"></div>
    
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <div id="overlay" onclick="off()"></div>

    <a id="myLink" href="#" onclick="on(); return false;">
    <div id="logo">
    </div></a>

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

    <div id="text">
        <center>       <h1>   <b>"Tablica"</b>  </h1>     </center>
        <center><h2>AAA 1111</h2></center>
        <h3><p>Lorem ipsum dolor sit amet. A provident molestiae et voluptas nesciunt sit corrupti voluptas. Id eligendi ratione 33 reiciendis rerum hic sint eligendi ex culpa dignissimos. </p><ol><li>Qui exercitationem voluptatem non nesciunt maiores. </li><li>Ab quod quae est voluptatem quia At error modi ut modi corrupti. </li><li>In perferendis corrupti cum omnis rerum quo labore voluptas! </li><li>Eos voluptatem quod 33 eius culpa et debitis ipsam sed asperiores vero. </li><li>Aut beatae voluptatem ea veritatis dolor ea dicta aspernatur. </li></ol><p>Aut suscipit iure qui odit voluptas est voluptatum totam! Qui dolore quia quo numquam commodi sed doloremque cumque et eligendi voluptatem in magni quis. Et ipsa culpa eos assumenda autem est dolorem beatae et deleniti repellat? </p><p>Nam quod veniam sed adipisci amet et minus autem. Ex voluptatem illo id nobis rerum sit iusto libero eum ratione temporibus. Aut fugiat quia est commodi nulla qui sunt omnis hic quod natus At temporibus illo  omnis commodi. Est dicta asperiores sit nobis error aut ullam quae est rerum doloremque et pariatur tempore. </p><ul><li>Et cumque debitis est provident quia in similique harum? </li><li>Ut magnam quia qui quas officiis eum doloremque deleniti! </li><li>Ut voluptatibus numquam est tempora internos ut rerum ipsa vel esse consequuntur. </li><li>At eaque expedita quo voluptatibus doloribus.</p>  </li></ul>
        </h3>
        <table style="width:100%">
          <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Age</th>
          </tr>
          <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
          </tr>
          <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
          </tr>
        </table>
        <p></p>
        <center><h2>AAAAA 2222</h2></center>
        <h3><p>Lorem ipsum dolor sit amet. In repellendus tenetur qui magni  et velit saepe est incidunt quidem ut aliquid fugiat et omnis sint. Qui nobis nesciunt in temporibus facilis <em>Et quasi ea ipsa omnis et sunt voluptates rem modi quaerat</em> sit minus consequatur. Est harum ipsum in amet consequaturut accusamus non galisum placeat vel ipsum nisi. Ut mollitia nulla hic molestiae enim cum eligendi excepturi. </p><dl><dt><dfn>Et nulla dolorem. </dfn></dt><dd>Qui reiciendis ullam id soluta labore quo dignissimos consequuntur qui facere quibusdam. </dd><dt><dfn>Sed iste vitae aut eaque magnam. </dfn></dt><dd>Hic tenetur eaque in veritatis excepturi ut pariatur voluptate. </dd><dt><dfn>Sed sint temporibus est omnis magni! </dfn></dt><dd>Qui corrupti eius sed deleniti inventore aut minus recusandae aut laboriosam libero. </dd></dl><p>Qui consequatur magnam et dolore officiis <strong>Eum quos non eveniet corporis ut veniam repudiandae ad mollitia harum</strong>. Eos dolorem corrupti ut obcaecati ducimus ea laudantium omnis et veniam maxime est rerum illum et galisum labore. </p><blockquote cite="https://www.loremipzum.com">Rem distinctio ipsum sed nulla velit est quos consequatur ut vitae dolor eos velit assumenda est atque quidem. </blockquote><p>Ut dolor veritatis in autem commodi non sapiente deleniti ut consectetur repudiandae aut adipisci vitae hic deserunt obcaecati non molestiae odit. Est vero aspernatur <em>Sit dolor</em> aut consequatur voluptatem qui consectetur sequi. Sed atque odio rem laborum quidem <strong>Ex quasi</strong>. </p>
        </h3>


    </div> 

</div>

END;
    exit();

}
else{
echo<<<END

<div id="main"style="border: 2px solid rgb(124,252,0);" >
<button class="btn1"id="go2">GO!</button>
<button class="btn2"id="go2">Re</button><br></br>
<a href="logout.php">
<div class="wyloguj">
Wyloguj 
        

</div></a>



<div class="info2">
END;
echo"<h2>Witaj ".$_SESSION['user']."</h2>";
echo"Twoj Email  : ".$_SESSION['email'];
echo"<p>twoje srodki na koncie ".$_SESSION['test']."</p>";


  if($_SESSION['user']=="Login")
  {
      require_once"connect.php";

      $polaczeie = @new mysqli($host,$db_user,$db_password,$db_name);
      if($polaczeie->connect_errno!=0)
      {
          echo"Error: ".$polaczeie->connect_errno;
      }
      else
      {
      echo '<form method="post"></br>';

      echo ' ID : <br/><input type="text" name="ID2"/><br/>';
      echo '<input type="submit" value="ENTER"/>';

     // $sql1= "select użytkownicy.login,kupno.bilety_id from użytkownicy,kupno where użytkownicy.ID=kupno.użytkownicy_id";

    //  if( $rezultat = @$polaczeie->query($sql))
    //  {
      
          
         //     $wiersz2 = $rezultat->fetch_assoc();
         //     $_SESSION['HAHA1'] = $wiersz2['użytkownicy.login'];
        //      $_SESSION['HAHA2'] = $wiersz2['kupno.bilety_id'];
       //       echo"222";
            
      
           
          
      
      
   //   }
    //  echo"</BR>";
   //   echo  $_SESSION['HAHA1'].'</BR>';
    //  echo  $_SESSION['HAHA2'];
    //  
      






if(isset($_POST['ID2']))
{
  $ID2=$_POST['ID2'];
  $rezultat= $polaczeie->query("DELETE  from użytkownicy WHERE ID='$ID2'");
  
}


        echo '</form>';


       
      }




      $polaczeie->close();

   // exit();
  }



echo<<<END


    
</div>


<p style="border:0px solid rgb(200, 31, 252)">,. </?>
<o style="border:0px solid rgb(0, 255, 42)"> </o>


   
      
  <button id="go"> </button>


<div class="block"></div>
  
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  <div id="overlay" onclick="off()"></div>

  <a id="myLink" href="#" onclick="on(); return false;">
  <div id="logo">
  </div></a>

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

  <div id="text">
      <center>       <h1>   <b>"Tablica"</b>  </h1>     </center>
      <center><h2>AAA 1111</h2></center>
      <h3><p>Lorem ipsum dolor sit amet. A provident molestiae et voluptas nesciunt sit corrupti voluptas. Id eligendi ratione 33 reiciendis rerum hic sint eligendi ex culpa dignissimos. </p><ol><li>Qui exercitationem voluptatem non nesciunt maiores. </li><li>Ab quod quae est voluptatem quia At error modi ut modi corrupti. </li><li>In perferendis corrupti cum omnis rerum quo labore voluptas! </li><li>Eos voluptatem quod 33 eius culpa et debitis ipsam sed asperiores vero. </li><li>Aut beatae voluptatem ea veritatis dolor ea dicta aspernatur. </li></ol><p>Aut suscipit iure qui odit voluptas est voluptatum totam! Qui dolore quia quo numquam commodi sed doloremque cumque et eligendi voluptatem in magni quis. Et ipsa culpa eos assumenda autem est dolorem beatae et deleniti repellat? </p><p>Nam quod veniam sed adipisci amet et minus autem. Ex voluptatem illo id nobis rerum sit iusto libero eum ratione temporibus. Aut fugiat quia est commodi nulla qui sunt omnis hic quod natus At temporibus illo  omnis commodi. Est dicta asperiores sit nobis error aut ullam quae est rerum doloremque et pariatur tempore. </p><ul><li>Et cumque debitis est provident quia in similique harum? </li><li>Ut magnam quia qui quas officiis eum doloremque deleniti! </li><li>Ut voluptatibus numquam est tempora internos ut rerum ipsa vel esse consequuntur. </li><li>At eaque expedita quo voluptatibus doloribus.</p>  </li></ul>
      </h3>
      <table style="width:100%">
        <tr>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Age</th>
        </tr>
        <tr>
          <td>Jill</td>
          <td>Smith</td>
          <td>50</td>
        </tr>
        <tr>
          <td>Eve</td>
          <td>Jackson</td>
          <td>94</td>
        </tr>
      </table>
      <p></p>
      <center><h2>AAAAA 2222</h2></center>
      <h3><p>Lorem ipsum dolor sit amet. In repellendus tenetur qui magni  et velit saepe est incidunt quidem ut aliquid fugiat et omnis sint. Qui nobis nesciunt in temporibus facilis <em>Et quasi ea ipsa omnis et sunt voluptates rem modi quaerat</em> sit minus consequatur. Est harum ipsum in amet consequaturut accusamus non galisum placeat vel ipsum nisi. Ut mollitia nulla hic molestiae enim cum eligendi excepturi. </p><dl><dt><dfn>Et nulla dolorem. </dfn></dt><dd>Qui reiciendis ullam id soluta labore quo dignissimos consequuntur qui facere quibusdam. </dd><dt><dfn>Sed iste vitae aut eaque magnam. </dfn></dt><dd>Hic tenetur eaque in veritatis excepturi ut pariatur voluptate. </dd><dt><dfn>Sed sint temporibus est omnis magni! </dfn></dt><dd>Qui corrupti eius sed deleniti inventore aut minus recusandae aut laboriosam libero. </dd></dl><p>Qui consequatur magnam et dolore officiis <strong>Eum quos non eveniet corporis ut veniam repudiandae ad mollitia harum</strong>. Eos dolorem corrupti ut obcaecati ducimus ea laudantium omnis et veniam maxime est rerum illum et galisum labore. </p><blockquote cite="https://www.loremipzum.com">Rem distinctio ipsum sed nulla velit est quos consequatur ut vitae dolor eos velit assumenda est atque quidem. </blockquote><p>Ut dolor veritatis in autem commodi non sapiente deleniti ut consectetur repudiandae aut adipisci vitae hic deserunt obcaecati non molestiae odit. Est vero aspernatur <em>Sit dolor</em> aut consequatur voluptatem qui consectetur sequi. Sed atque odio rem laborum quidem <strong>Ex quasi</strong>. </p>
      </h3>


  </div> 

</div>


END;
}

    
       





        ?>


        
    </div>

    <script>
        function on() {
          document.getElementById("overlay").style.display = "block";
        }
        
        function off() {
          document.getElementById("overlay").style.display = "none";
        }
        </script>

<script>
    var mybutton = document.getElementById("myBtn");
    
 
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    

    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>

<script>
    var url = "https://code.jquery.com/color/jquery.color.js";
    $.getScript( url, function() {
      $( "#go2" ).click(function() {
        $( "#text" )
          .animate({
            backgroundColor: "rgb(202, 55, 55)"
          }, 1000 )
          .delay( 500 )
          .animate({
            backgroundColor: "rgb(1, 236, 13)"
          }, 1000 )
          .delay( 500 )
          .animate({
            backgroundColor: "rgb(69, 50, 241)"
          }, 1000 )
          .delay( 500 )
          .animate({
            backgroundColor: "rgb(162, 0, 255)"
          }, 1000 )
          .delay( 500 )
          .animate({
            backgroundColor: "rgb(255, 255, 2551)"
          }, 1000 );
          
      });
    });
    </script>

</body>
</html>