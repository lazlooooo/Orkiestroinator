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

<body>
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
    
                
                
    <!-- Register form -->            
      <div class="form">
        <form class="register-form" action ="rejestruj.php" method="post">
          <input type="text" name="imie_rej" placeholder="Imię" required/>   
          <input type="text" name="email_rej" placeholder="Adres e-mail" required/>
          <input type="password" name="haslo_rej" placeholder="Hasło" required/>
          <input type="password" name="haslo_rej2" placeholder="Powtórz hasło" required/>
          <button type="submit" value="post" name="zarejestruj">Zarejestruj</button>
          <p class="message">Już zarejetrowany? <a href="#">Zaloguj się!</a></p>
        </form>
          
   <!-- Login form -->
            <form class="login-form" action="loguj.php" method="post">
              <input type="text" name="login" id="login_log" placeholder="Nazwa użytkowanika" required/>
              <input type="password" name="haslo" id="haslo_log" placeholder="Hasło" required/>
              <button type="submit" value="post" name="zaloguj">Zaloguj</button>
              <p class="message">Jescze nie stworzyłeś konta? <a href="#">Zarejestruj się!</a></p>
            </form>
          </div>
        </div>      
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
