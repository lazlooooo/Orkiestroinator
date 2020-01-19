<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Jakub Lenart, Dominik Koziak, Jakub Lazar, Adrianna Kurzawa">

  <title>Projekt zaliczeniowy</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/efekty.css" rel="stylesheet">
  

  <!-- Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Styles template -->
  <link href="css/oriestroinator.min.css" rel="stylesheet">

  <!-- silnik szczek i tabs -->
  <script type="text/javascript" src="js/silnik_szczek.js"></script>
  <script type="text/javascript" src="js/tabs.js"></script>
    

</head>


  
  
  <!-- Navigation -->
  <?php
  session_start();
  if(empty($_SESSION["zalogowany"])==1){ 
    $_SESSION["zalogowany"] = 0;
  include 'menuGuest.html';
  }
  else if($_SESSION["zalogowany"] == 1){
  include 'menuUser.html';
  }
  else if ($_SESSION["zalogowany"] == 2){
  include 'menuAdmin.html' ;
  }
  ?>
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/piano.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>ZAGRAJ NA PIANINIE</h1>
            <span class="subheading"></span>
              
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Main Content -->
      <hr>
  <div class="container">
    <div class="row">    
                            
        
        
                        <div class="float-left">
                        <a onclick="play('z');" ><img style="position: relative; left: 225px; z-index: 1" src="img/piano/z_2.png" alt="zdj" ></a>
                                <div class="card-body">
                                    
                                     
                                </div>
                        </div>
        
                        <div class="float-left">
                           <a onclick="play('s');" ><img style="position:relative; left: 200px; z-index: 2" src="img/piano/s_3.png" alt="zdj" ></a>
                              <div class="card-body">
                                   
                                     
                         </div>  
                                    
                        </div>
        
        
        
                        <div class="float-left">
                        <a onclick="play('x');" ><img style="position: relative; left: 175px; z-index: 1" src="img/piano/x_1.png" alt="zdj" ></a>
                                <div class="card-body">
                                    
                                </div>
                        </div>
        
        
        
                        <div class="float-left">
                        <a onclick="play('d');" ><img style="position: relative; left: 150px; z-index: 2"src="img/piano/d_3.png" alt="zdj" ></a>
                                <div class="card-body">
                                   
                                     
                                </div>
                        
                        </div>
        
        
                        <div class="float-left">
                           <a onclick="play('c');" ><img style="position: relative; left: 125px;z-index: 1" src="img/piano/c_2.png" alt="zdj" ></a>
                              <div class="card-body">
                                   
                                     
                                </div> 
                        </div>
            
        
        
                        <div class="float-left">
                           <a onclick="play('v');" ><img style="position: relative; left: 125px; z-index: 1" src="img/piano/v_1.png" alt="zdj" ></a>
                              <div class="card-body">
                                   
                                     
                                </div> 
                        </div>
                
        
                
                        <div class="float-left">
                           <a onclick="play('g');" ><img style="position: relative;left: 100px; z-index: 2" src="img/piano/g_3.png" alt="zdj" ></a>
                              <div class="card-body">
                                   
                                     
                                </div> 
                    
                        </div>
                            
        
        
                        <div class="float-left">
                           <a onclick="play('b');" ><img style="position: relative;left: 75px; z-index: 1" src="img/piano/b_1.png" alt="zdj" ></a>
                              <div class="card-body">
                                   
                                     
                                </div> 
                        
                        </div>
        
        
        
                        <div class="float-left">
                            <a onclick="play('h');" ><img style="position: relative;left: 50px; z-index: 2" src="img/piano/h_2.png" alt="zdj" ></a>
                              <div class="card-body">
                                   
                                     
                                </div> 
                            
                        </div>
        
        
        
                        <div class="float-left">
                           <a onclick="play('n');" ><img style="position: relative; left: 25px; z-index: 1" src="img/piano/n_3.png" alt="zdj" ></a>
                              <div class="card-body">
                                   
                                     
                                </div> 
                        </div>
        
        
        
        
                        <div class="float-left">
                           <a onclick="play('j');" ><img style="position: relative;left: 0px; z-index: 2" src="img/piano/j_4.png" alt="zdj" ></a>
                              <div class="card-body">
                                   
                                     
                                </div> 
                                        
                        </div>
        
        
        
                        <div class="float-left">
                           <a onclick="play('m');" ><img style="position: relative; right: 25px; z-index: 1" src="img/piano/m_1.png" alt="zdj" ></a>
                              <div class="card-body">
                                   
                                     
                                </div> 
                                            
                        </div>
                            
        
        
                        <div class="float-left">
                           <a onclick="play(',');" ><img style="position: relative; right: 25px; z-index: 1" src="img/piano/przecinek_1.png" alt="zdj" ></a>
                              <div class="card-body">
                                   
                                     
                                </div> 
                                                
                        </div>
                                                
        
        
                        <div class="float-left">
                           <a onclick="play('l');" ><img style="position: relative;right: 50px; z-index: 2" src="img/piano/l_3.png" alt="zdj" ></a>
                              <div class="card-body">
                                   
                                     
                                </div> 
                                                    
                        </div>
        
                                                    
        
                        <div class="float-left">
                           <a onclick="play('.');" ><img style="position: relative;right: 75px; z-index: 1" src="img/piano/kropka.png" alt="zdj" ></a>
                              <div class="card-body">
                                   
                                     
                                </div> 
                                                        
                        </div>
        
        
                            
        
                        <div class="float-left">
                           <a onclick="play(';');" ><img style="position: relative; right: 100px; z-index: 2" src="img/piano/srednik_1.png" alt="zdj" ></a>
                              <div class="card-body">
                                   
                                     
                                </div> 
                                                            
                        </div>
        
        
        
                        <div class="float-left">
                           <a onclick="play('/');" ><img style="position: relative; right: 125px; z-index: 1" src="img/piano/slash_1.png" alt="zdj" ></a>
                              <div class="card-body">
                                   
                                     
                                </div> 
                                                            
                        </div>
        
                                
                                
                                        
                    
      </div>
      <div style="text-align: center;">
        
        <textarea id="in" rows="5" cols="40"></textarea><br>
<button onclick="read();">Zagraj</button>
<button onclick="stop();">Stop</button>
<input type="checkbox" id="czyGra" checked> Graj
  <div class="slidecontainer" style="margin-top: 50px;">
  <input type="range" min="200" max="2000" id="zakres" style="width: 400px;"> </div>
  <p>Prędkość odtwarzania w ms: <b id="demo"></b></p>
  <script>
 
 
var suwak = document.getElementById("zakres"); 
var output = document.getElementById("demo");
 
output.innerHTML = suwak.value;               
 
suwak.oninput = function()                  
{
  output.innerHTML = this.value;
}
 
</script>
   
<div>
  
  <button onclick="generuj();">Generuj ukulele</button>
  <button onclick="generuj2();">Generuj gitarę</button>

</div>
<!--tu się wyświetla tabulatura-->
<div id='tab' style="font-family: monospace;"></div>
        
      </div>
      <audio style="visibility: hidden;" id="z" src="pianino/pianoZ.mp3" volume="0.2"></audio>
<audio style="visibility: hidden;" id="s" src="pianino/pianoS.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="x" src="pianino/pianoX.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="d" src="pianino/pianoD.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="c" src="pianino/pianoC.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="v" src="pianino/pianoV.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="g" src="pianino/pianoG.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="b" src="pianino/pianoB.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="h" src="pianino/pianoH.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="n" src="pianino/pianoN.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="j" src="pianino/pianoJ.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="m" src="pianino/pianoM.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="," src="pianino/pianoPrzecinek.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="l" src="pianino/pianoL.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="." src="pianino/pianoKropka.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id=";" src="pianino/pianoSrednik.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="/" src="pianino/pianoSlash.mp3" volume="0.1"></audio>
    </div>
      
  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
            <br><hr>
            
            <p class="copyright text-muted">&copy;Orkiestroinator2019</p>   
                       
        </div>
      </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- scripts template -->
  <script src="js/clean-blog.min.js"></script>
        
  



</body>

</html>
