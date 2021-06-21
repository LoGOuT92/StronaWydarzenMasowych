<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDM</title>
    <link rel="stylesheet" href ="styleEDM.css"type="text/css" />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>


<body>


    <div id="main"> 

      <button id="go">&raquo; Run</button>



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
                
                        <a href="podstrona2.php">    
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
                

               

          




        <div id="text"><h1>temat Wydarzen 1</h1>




      
            
               
            <a id="myLink" href="#" onclick="myFunction1(); return false;">
                
            <div class="artist" id="Garrix" >zdjecie artysty1</div></a>

            <div id="artysta1">
                <h1>Szczegolowy opis Artysty1</h1> 
                <h3> <p>Lorem ipsum dolor sit amet. Non omnis repudiandae id fugiat dolore ad perspiciatis iste et nostrum quibusdam est adipisci dolorem. Nam consequatur dolorum ea officia consequatur est doloribus fugiat in maiores cupiditate qui magnam illo? </p><p>Vel voluptatem corrupti id velit libero At dignissimos voluptate eos libero nulla. Aut voluptatum earum quo deserunt temporibus qui fugit itaque a facilis quia aut excepturi repellat eum tenetur sint est quidem placeat. </p>
                 </h3>
                 </div>
 
                 <a id="myLink" href="#" onclick="myFunction2(); return false;">
             <div class="artist"id="Tiesto">zdjecie artysty2</div></a>
             <div id="artysta2">
                 <h1>Szczegolowy opis Artysty 2</h1> 
                 <h3>
                   <p>Lorem ipsum dolor sit amet. Et quae sint id rerum consequatur quo magni asperiores. Aut suscipit veniam At adipisci inventore et recusandae tempora est eius earum. Ea consequatur quia et deleniti temporibus id dolores sunt quo recusandae harum. </p><p>Quo animi mollitia nam laborum nulla sed delectus soluta quo quia soluta et galisum illum sit aperiam saepe quo possimus enim? Non soluta assumenda et molestiae debitis sit suscipit perferendis eum natus facere non ducimus natus. Id quia asperiores hic commodi voluptatem est optio consequuntur aut exercitationem tempora non aspernatur necessitatibus  nihil illo? </p>


                 </h3>
                 
                 </div>
 
                 <a id="myLink" href="#" onclick="myFunction3(); return false;">
             <div class="artist"id="Hardwell">zdjecie artysty3</div></a>
             <div id="artysta3">
                 <h1>Szczegolowy opis Artysty 3</h1> 
                 <h3>
                 <p>Lorem ipsum dolor sit amet. Ea quasi eius id placeat repudiandae cum soluta vero et quaerat voluptatibus. Hic incidunt repudiandae a sapiente voluptatem et saepe nemo? Quam quisquam sed necessitatibus quod est enim autem. Eum magnam expedita eos alias laborum a molestiae internos ex quia suscipit est perferendis commodi! </p><p>Est eligendi dicta eos placeat nihil ea minus autem ut molestias eaque? Sit eveniet eveniet rem deleniti libero ut veritatis explicabo ut labore quibusdam sit blanditiis expedita. Harum corporis eos omnis velit et voluptas aliquid ut voluptate eaque non mollitia omnis  maxime debitis! Qui odio praesentium et voluptatem animi At modi quam rem vitae molestiae aut provident molestias est incidunt tempore est nulla sapiente. </p>
                </h3>
                 </div>
 
             <a id="myLink" href="#" onclick="myFunction4(); return false;">
             <div class="artist"id="CalvinHarris">zdjecie artysty4</div></a>
             <div id="artysta4">
                 <h1>Szczegolowy opis Artysty 4</h1> 
                 <h3>
                 <p>Lorem ipsum dolor sit amet. Sit impedit voluptatem qui dolorem consequatur est nobis quia ut illum numquam et cumque deleniti sed odio quisquam. Vel consequatur dolores quo nulla facere et temporibus quasi aut placeat cupiditate ut quia minus? Sit quasi voluptas aut quasi repellat est harum voluptatem. Non provident provident eum assumenda voluptas qui maxime quis in recusandae dolorem sit assumenda illum aut aliquam voluptas aut consequatur optio. </p><p>Non explicabo corrupti ea natus atque et quasi adipisci nam vero magnam et voluptate internos rem necessitatibus nihil. Eos atque aperiam eum odit perspiciatis quo commodi numquam eum corporis quas sit saepe voluptates vel rerum quod a eveniet vitae. Sed nihil cumque non quis dolorem eum omnis distinctio et adipisci fugit ea explicabo quia et blanditiis omnis. Est itaque sequi rem laborum dolor et accusamus tempore. </p>
                </h3>
                 </div>
        </div> 

    </div>

<script>
        document.getElementById("artysta1").style.display = "none";
        document.getElementById("artysta2").style.display = "none";
        document.getElementById("artysta3").style.display = "none";
        document.getElementById("artysta4").style.display = "none";


</script>

    <script>
        function myFunction1() {
            var x = document.getElementById("artysta1");
          if (x.style.display === "none") {
            x.style.display = "block";
          } else {
            x.style.display = "none";
          }
        }
        </script>

<script>
    function myFunction2() {
        var x = document.getElementById("artysta2");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
    </script>

<script>
    function myFunction3() {
        var x = document.getElementById("artysta3");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
    </script>

<script>
    function myFunction4() {
        var x = document.getElementById("artysta4");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
    </script>



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
    $( "#go" ).click(function() {
      $( "#main" )
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