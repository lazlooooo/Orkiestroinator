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
  <link href="css/panel.css" rel="stylesheet">
   

  <!-- Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Styles template -->
  <link href="css/oriestroinator.min.css" rel="stylesheet">

</head>

<body onload="zegarek()">
  <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-light fixed-top " id="mainNav">
    <div class="container"> 
        
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Strona Główna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logowanie.php">Logowanie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="instrumenty.html">Instrumenty</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kontakt.html">Kontakt</a>
          </li>
        </ul>
            
      </div>

    </div>
  </nav>
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/music3.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>LOGOWANIE</h1>
            <span class="subheading">Dołącz do tysiąca zadowolonych użytkowników!</span>
          </div>
        </div>
      </div>
    </div>
  </header>

    
                       
  <!-- Main Content -->
  <div class="container">
      <div class="col-lg-4 col-md-10 mx-auto">
          <div class="login-page">
  
              
              
              
    <div class="form">
    <form method="POST" class="register-form">
      <input type="text" name="imie_rej" placeholder="Imię" required/>
      <input type="text" name="nazwisko_rej" placeholder="Nazwisko" required/>
      <input type="text" name="login_rej" placeholder="Login" required/>    
      <input type="password" name="haslo_rej" placeholder="Hasło" required/>
      <input type="text" name="email_rej" placeholder="Adres e-mail" required/>
      <button type="submit" value="post" name="zarejestruj">Zarejestruj</button>
      <p class="message">Już zarejetrowany? <a href="#">Zaloguj się!</a></p>
    </form>
        
        <?php
    
            //connect
    
            $polaczenie = new mysqli('localhost','root','','orkiestroinator' );

            //check connect

            if(mysqli_connect_errno() !=0)
            { echo 'Wystąpił błąd podczas łączenia z bazą danych: '.mysqli_connect_error();
    
            exit;
            } 


            //adding

            if(isset($_POST['zarejestruj']))
            {

            include 'BAZA_DANYCH\config.php';

            $Imie = $_POST['imie_rej'];
            $Nazwisko = $_POST['nazwisko_rej'];
            $Login = $_POST['login_rej'];
            $Haslo = $_POST['haslo_rej'];
            $Email = $_POST['email_rej'];

            $sql="insert into uzytkownicy (imie, nazwisko, login, haslo, email) values ('$Imie','$Nazwisko','$Login','$Haslo','$Email')";

            if($wynik = $polaczenie->query($sql) === TRUE)
                { 
                    echo "Zarejestrowano nowego użytkownika!!"; 
                    $polaczenie->close(); 
                    header("location: logowanie.php"); 
                }
                else 
                    {   
                        echo "Error: ".$sql."<br />".$polaczenie->error;
                    }
                        $polaczenie->close();
            }


            ?>
      
      
      

      
      
      
      
      
    <form class="login-form" action="instrumenty.html" method="post">
      <input type="text" id="login_log" placeholder="Nazwa użytkowanika" required/>
      <input type="password" id="haslo_log" placeholder="Hasło" required/>
      <button type="submit" value="post" name="zaloguj">Zaloguj</button>
      <p class="message">Jescze nie stworzyłeś konta? <a href="#">Zarejestruj się!</a></p>
    </form>
  </div>
</div>
          
          <?php
    
            //connect
    
            $polaczenie = new mysqli('localhost','root','','orkiestroinator' );

            //check connect

            if(mysqli_connect_errno() !=0)
            { echo 'Wystąpił błąd podczas łączenia z bazą danych: '.mysqli_connect_error();
    
            exit;
            } 


            //adding

            if(isset($_POST['zaloguj']))
            {

            include 'BAZA_DANYCH\config.php';

            
            $Login=$_POST['login_log'];
            $Haslo=$_POST['haslo_log'];
            

            $sql="Select count(*) from uzytkownicy where login='".$Login."' and haslo='".$Haslo;

            if($wynik = $polaczenie->query($sql) == 1)
                { 
                    echo "Pomyślnie zalogowano!"; 
                    $polaczenie->close(); 
                    header("location: instrumenty.php"); 
                }
                else 
                    {   
                        echo "Error: ".$sql."<br />".$polaczenie->error;
                    }
                        $polaczenie->close();
            }


            ?>
          
          
          
                    
        
        </div>
    </div>
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

  

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>
        
  <!-- JS panel -->                

  <script type="text/javascript" src="js/panel.js"></script>


</body>

</html>
