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

//if($_GET["wyloguj"]=="tak"){$_SESSION["zalogowany"]=0;echo "Zostałeś wylogowany z serwisu";}
//if($_SESSION["zalogowany"]!=1){
	if(!empty($_POST["login"]) && !empty($_POST["haslo"])){
        //zdefiniowanie kodu sql
        $sql = "SELECT id, admin FROM uzytkownicy WHERE email = '".htmlspecialchars($_POST["login"])."' AND haslo = '".htmlspecialchars($_POST["haslo"])."'";
        //przypisanie rezultatu wykonania kodu sql
        $result = $conn->query($sql);
        
		if($result->num_rows > 0){
      while($row = $result->fetch_assoc()) {
        $_SESSION["id"]= $row["id"];
        if($row["admin"] == 1) {
          $_SESSION["zalogowany"]=2;
          echo "<meta http-equiv='Refresh' content='0;url=index_ADMIN.php'>";
        break;
      }
      else { 
        echo "<meta http-equiv='Refresh' content='0;url=index_USER.php'>";
        $_SESSION["zalogowany"]=1;}
      }
    }
		else echo "<center>Wprowadzono złe dane spróbój ponownie</center> <meta http-equiv='Refresh' content='0;url=logowanie.php'>";
		}
	//else {};
//}
//else{};

    

            ?>
    </body>
</html>