<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Jakub Lenart, Dominik Koziak, Jakub Lazar, Adrianna Kurzawa">
  <title>Projekt zaliczeniowy</title>
  <style type="text/css">
    .marginesy {
      margin: 0px;
      padding: 0px;
    }
  </style>
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
  <header class="masthead" style="background-image: url('img/ukulelebg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>ZAGRAJ NA UKULELE</h1>
            <span class="subheading"></span>
              
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Main Content -->
      <hr>
  <div class="container ">
    <div class="row d-none d-xl-block">    
                            
        
        
                    
        
        
                         <div  class="col-sm marginesy">
                        <a onclick="play('q');" ><img  src="img/Ukulele-C-Q.png" alt="zdj" class="sepia card-img-top" ></a>
                                <div class="card-body">
                                    
                                     
                                </div>
                        </div>
        
                        <div  class="col-sm marginesy">
                        <a onclick="play('w');" ><img  src="img/Ukulele-D-W.png" alt="zdj" class="sepia card-img-top" ></a>
                                <div class="card-body">
                                    
                                     
                                </div>
                            </div>
                        <div class="col-sm marginesy">
                        <a onclick="play('e');" ><img  src="img/Ukulele-E-E.png" alt="zdj" class="sepia card-img-top" ></a>
                                <div class="card-body">
                                    
                                     
                                </div>
                    </div>
                    
        
                    
                        <div class="col-sm marginesy">
                        <a onclick="play('r');" ><img src="img/Ukulele-F-R.png" alt="zdj" class="sepia card-img-top" ></a>
                                <div class="card-body">
                                    
                                     
                                </div>
                    </div>
    
    
                        
                        <div class="col-sm marginesy">
                        <a onclick="play('t');" ><img src="img/Ukulele-G-T.png" alt="zdj" class="sepia card-img-top" ></a>
                                <div class="card-body">
                                    
                                     
                                </div>
                        </div>
                        <div class="col-sm marginesy">
                        <a onclick="play('y');" ><img src="img/Ukulele-A-Y.png" alt="zdj" class="sepia card-img-top" ></a>
                                <div class="card-body">
                                    
                                     
                                </div>
                    </div>
        
                    <div class="col-sm marginesy">
                        <a onclick="play('u');" ><img src="img/Ukulele-B-U.png" alt="zdj" class="sepia card-img-top" ></a>
                                <div class="card-body">
                                    
                                     
                                </div>
                    </div>
        
                                
                                
                                        
                    
      </div>
      <div class="row d-none d-xl-block">
          
          <div  class="col-sm marginesy">
                        <a onclick="play('a');" ><img src="img/Ukulele-Cm-A.png" alt="zdj" class="sepia card-img-top" ></a>
                                <div class="card-body">
                                    
                                     
                                </div>
                        </div>
        
                        <div  class="col-sm marginesy">
                        <a onclick="play('s');"><img src="img/Ukulele-Dm-S.png" alt="zdj" class="sepia card-img-top" ></a>
                                <div class="card-body">
                                    
                                     
                                </div>
                            </div>
                        <div class="col-sm marginesy">
                        <a onclick="play('d');" ><img src="img/Ukulele-Em-D.png" alt="zdj" class="sepia card-img-top" ></a>
                                <div class="card-body">
                                    
                                     
                                </div>
                    </div>
                    
        
                    
                        <div class="col-sm marginesy">
                        <a onclick="play('f');" ><img src="img/Ukulele-Fm-F.png" alt="zdj" class="sepia card-img-top" ></a>
                                <div class="card-body">
                                    
                                     
                                </div>
                    </div>
    
    
                        
                        <div class="col-sm marginesy">
                        <a onclick="play('g');" ><img src="img/Ukulele-Gm-G.png" alt="zdj" class="sepia card-img-top" ></a>
                                <div class="card-body">
                                    
                                     
                                </div>
                        </div>
                        <div class="col-sm marginesy">
                        <a onclick="play('h');" ><img src="img/Ukulele-Am-H.png" alt="zdj" class="sepia card-img-top" ></a>
                                <div class="card-body">
                                    
                                     
                                </div>
                    </div>
        
                    <div class="col-sm marginesy">
                        <a onclick="play('j');" ><img src="img/Ukulele-Bm-J.png" alt="zdj" class="sepia card-img-top" ></a>
                                <div class="card-body">
                                    
                                     
                                </div>
                    </div>
          
          
          
          
          
      </div>
      <div class="row d-none d-xl-block">
          
          <div  class="col-sm marginesy">
                        <a onclick="play('z');" ><img src="img/Ukulele-C7-Z.png" alt="zdj" class="sepia card-img-top" ></a>
                                <div class="card-body">
                                    
                                     
                                </div>
                        </div>
        
                        <div  class="col-sm marginesy">
                        <a onclick="play('x');" ><img src="img/Ukulele-D7-X.png" alt="zdj" class="sepia card-img-top" ></a>
                                <div class="card-body">
                                    
                                     
                                </div>
                            </div>
                        <div class="col-sm marginesy">
                        <a onclick="play('c');" ><img src="img/Ukulele-E7-C.png" alt="zdj" class="sepia card-img-top" ></a>
                                <div class="card-body">
                                    
                                     
                                </div>
                    </div>
                    
        
                    
                        <div class="col-sm marginesy">
                        <a onclick="play('v');"><img src="img/Ukulele-F7-V.png" alt="zdj" class="sepia card-img-top" ></a>
                                <div class="card-body">
                                    
                                     
                                </div>
                    </div>
    
    
                        
                        <div class="col-sm marginesy">
                        <a onclick="play('b');" ><img src="img/Ukulele-G7-B.png" alt="zdj" class="sepia card-img-top" ></a>
                                <div class="card-body">
                                    
                                     
                                </div>
                        </div>
                        <div class="col-sm marginesy">
                        <a onclick="play('n');" ><img src="img/Ukulele-A7-N.png" alt="Ukulele-A7-N" class="sepia card-img-top"></a>
                                <div class="card-body">
                                    
                                     
                                </div>
                    </div>
        
                    <div class="col-sm marginesy">
                        <a onclick="play('m');" ><img src="img/Ukulele-B7-M.png" alt="Ukulele-B7-M" class="sepia card-img-top" ></a>
                                <div class="card-body">
                                    
                                     
                                </div>
                    </div>
          
          
          
          
      </div>
      
      
       <div class="row">
      <div class="col-sm" style="text-align: center;">
        <!--TEXTAREA-->
        <textarea id="in" rows="5" cols="40"></textarea><br>
        <button onclick="read();">Zagraj</button>
        <button onclick="stop();">Stop</button>
        <input type="checkbox" id="czyGra" checked> Graj
  
        <!--SUWACZEK-->
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
        <hr>
        <!--WYBIERANIE PIOSENKI Z BAZY-->
        <form action="">
            <select id="piosenka">
              <option>Wlazł kotek na płotek</option>
              <option>Wlazł i spadł</option>
            </select><br><br>
          <button onclick="funkcja_zapisz();">Zapisz</button><button onclick="funkcja_wczytaj();">Wczytaj</button>
        </form>

        <!--WYBIERANIE PIOSENKI Z BAZY end-->
      </div>
  

      <div class="col-sm">
        <!--INSTRUKCJA-->
        <div>
          <h3>Instrukcja</h3>
          <p class="d-none d-xl-block">Możesz grać bezpośrednio klikając myszką w obrazki przedstawiające akordy lub naciskając klawisze na klawiaturze.</p>
          
          <p>Obok znajduje się miejsce na tekst, który przy pomocy przycisku <b>Zagraj</b> przekonwertujesz na dźwięk. Aby stworzyć pauzę pomiędzy dźwiękami możesz wstawiać znaki spacji.</p>

          <p><b>Suwakiem</b> zmienisz prędkość odtwarzania.</p>
            <p><b>Stop</b> służy do zatrzymywania dźwięku. Aby rozpocząć odtwarzanie od pewnego fragmentu ustaw kursor <b>|</b> w odpowiednim miejscu.</p>
          <p>Jeśli nie chcesz słyszeć na żywo klikanych klawiszy odznacz <b>Graj</b></p>
          <p>Wczytaj lub zapisz piosenkę wybierając odpowiednią pozycję na liście rozwijalnej.</p>                       
         </div>
        </div>                        
    </div>
   
 </div>
<audio style="visibility: hidden;" id="q" src="ukulele/ukuleleC.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="w" src="ukulele/ukuleleD.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="e" src="ukulele/ukuleleE.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="r" src="ukulele/ukuleleF.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="t" src="ukulele/ukuleleG.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="y" src="ukulele/ukuleleA.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="u" src="ukulele/ukuleleB.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="a" src="ukulele/ukuleleCm.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="s" src="ukulele/ukuleleDm.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="d" src="ukulele/ukuleleEm.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="f" src="ukulele/ukuleleFm.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="g" src="ukulele/ukuleleGm.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="h" src="ukulele/ukuleleAm.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="j" src="ukulele/ukuleleBm.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="z" src="ukulele/ukuleleC7.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="x" src="ukulele/ukuleleD7.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="c" src="ukulele/ukuleleE7.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="v" src="ukulele/ukuleleF7.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="b" src="ukulele/ukuleleG7.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="n" src="ukulele/ukuleleA7.mp3" volume="0.1"></audio>
<audio style="visibility: hidden;" id="m" src="ukulele/ukuleleB7.mp3" volume="0.1"></audio>
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
