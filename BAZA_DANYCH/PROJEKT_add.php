<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <form method="POST">
            <label for="imie">Imie</label>
            <input type="varchar" name="imie" required/><br>
            <label for="nazwisko">Nazwisko</label>
            <input type="varchar" name="nazwisko" required/><br>
            <label for="login">Login</label>
            <input type="varchar" name="login" required/><br>
            <label for="haslo">Hasło</label>
            <input type="varchar" name="haslo" required/><br>
            <label for="email">Email</label>
            <input type="varchar" name="email" required/><br>
            <label for="admin">Admin</label>
            <input type="bool" name="admin" required/><br>
            <button type="submit" value="post" name="dodaj">Zapisz</button>
        </form>
    </body>
</html>
<?php

if(isset($_POST['dodaj']))
{
 
include 'config.php';
    
$Imie=$_POST['imie'];
$Nazwisko=$_POST['nazwisko'];
$Login=$_POST['login'];
$Haslo=$_POST['haslo'];
$Email=$_POST['email'];
$Admin=$_POST['admin'];

$sql="insert into uzytkownicy (imie, nazwisko, login, haslo, email, admin) values ('$Imie','$Nazwisko','$Login','$Haslo','$Email','$Admin')";
    
if($wynik = $polaczenie->query($sql) === TRUE)
    { 
        echo "Dodano nowego użytkownika!"; 
        $polaczenie->close(); 
        header("location: PROJEKTcz2.php"); 
    }
    else 
        {   
            echo "Error: ".$sql."<br />".$polaczenie->error;
        }
            $polaczenie->close();
}


?>
<!doctype html>
