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
              echo "Rejestracja przebiegła pomyślnie. Zostaniesz teraz przekierowany do strony głownej. <meta http-equiv='Refresh' content='3;url=index.php'>";
              }
          }
          else echo "Nie uzupełniono wszystkich pól!!! <meta http-equiv='Refresh' content='3;url=logowanie.php'>";
        
        $conn->close();


            ?>