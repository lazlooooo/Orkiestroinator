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
        if($row["admin"] == 1) {
          echo "Witaj adminie! <meta http-equiv='Refresh' content='2;url=index_ADMIN.html'>";
        break;}
      else { echo "Gratulacje! Zalogowałeś się pomyślnie! <meta http-equiv='Refresh' content='2;url=index.html'>";}
      }
			$_SESSION["zalogowany"]=1;
            //$row = $result->fetch_assoc();
            //$_SESSION["id"] .= $row['id'];
            while($row = $result->fetch_assoc()) {
            $_SESSION["id"]= $row["id"];
            }
			}
		else echo "Wprowadzono złe dane spróbój ponownie <meta http-equiv='Refresh' content='2;url=logowanie.php'>";
		}
	//else {};
//}
//else{};


            ?>