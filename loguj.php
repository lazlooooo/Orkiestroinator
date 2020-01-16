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
          echo "<meta http-equiv='Refresh' content='0;url=index_ADMIN.html'>";
        break;
      }
      else { 
        echo "<meta http-equiv='Refresh' content='0;url=index.html'>";
        $_SESSION["zalogowany"]=1;}
      }
    }
		else echo "Wprowadzono złe dane spróbój ponownie <meta http-equiv='Refresh' content='0;url=logowanie.php'>";
		}
	//else {};
//}
//else{};


            ?>