<html>
<head>
 <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/efekty.css" rel="stylesheet">
  <link href="css/lakeland.min.css" rel="stylesheet">    



  <!-- Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Styles template -->
  
  <link href="css/oriestroinator.min.css" rel="stylesheet">
</head>
<body>



<?php
    session_start();
    if(empty($_SESSION["zalogowany"]))$_SESSION["zalogowany"]=0;
    
    include "config.php";

       
          if(!empty($_POST["imie_rej"]) && !empty($_POST["email_rej"]) && !empty($_POST["haslo_rej"]) && !empty($_POST["haslo_rej2"])){	//oraz czy uzupełniono wszystkie dane
                $sql = "select * from uzytkownicy where email='".htmlspecialchars($_POST["email_rej"])."'";
                $result = $conn->query($sql);                                                           
            if($result->num_rows > 0 ) echo "Użytkownik o podanym loginie już istnieje!!!"; // sprawdzanie czy użytkownik o podanej nazwie już istnieje
            else{
              $conn->query("insert into uzytkownicy values(NULL, '".htmlspecialchars($_POST["imie_rej"])."', '".htmlspecialchars($_POST["haslo_rej"])."', '".htmlspecialchars($_POST["email_rej"])."', 0)"); // zapisywanie rekordu do bazy
              echo "<center>Rejestracja przebiegła pomyślnie. Zostaniesz teraz przekierowany do strony głownej.</center><meta http-equiv='Refresh' content='3;url=index_USER.php'>";
              }
          }
          else echo "<center>Nie uzupełniono wszystkich pól!!!</center><meta http-equiv='Refresh' content='3;url=logowanie.php'>";
        
        $conn->close();


            ?>
    
    
    </body>
</html>