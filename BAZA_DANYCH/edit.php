<?php

include 'config.php';

 $id = $_POST['id'];
 if(isset($_POST['edycja']))
 {
$imie = $_POST['imie'];
$email = $_POST['email'];
$haslo = $_POST['haslo'];
$admin = $_POST['admin'];
$sql = "UPDATE uzytkownicy SET imie='$imie', email='$email', haslo='$haslo', admin='$admin' WHERE id='$id'";
$wynik = $polaczenie->query($sql);
if($wynik==false)
    {
        echo 'cos poszło nie tak z zapytaniem';
        $polaczenie->close();
        exit;
    }
else
    {
        $polaczenie->close();
        header('location: baza.php');
    
    }

 }
else
    {
        $sql = "SELECT * FROM uzytkownicy where id='$id'"; 
        $wynik = $polaczenie->query($sql);
        if($wynik==false)
        {
        echo 'cos poszło nie tak z zapytaniem';
        $polaczenie->close();
        exit;
        }
    while(($rekord= $wynik ->fetch_assoc())  !=null)
    {
                $imie = $rekord['imie'];
                $email = $rekord['email'];
                $haslo = $rekord['haslo'];
                $admin = $rekord['admin'];
    }
    }
    
    
?>

<!DOCTYPE html>
<html>
    <head>
    
    </head>
    <body>
        <form method="POST">
            <input type="hidden" name='id' value="<?php echo $_POST['id']; ?>" />
            <label for="imie">Imie </label>
            <input type="text" name="imie" required value='<?php echo $imie; ?>'/><br />
            <label for="email">Email </label>
            <input type="text" name="email" required value='<?php echo $email; ?>'/> <br />
            <label for="haslo">Haslo </label>
            <input type="password" name="haslo" required value='<?php echo $haslo; ?>'/><br />
            <label for="admin">Admin </label>
            <input type="text" name="admin" required value='<?php echo $admin; ?>'/> <br />
            <button type="submit" value="post" name="edycja">Zapisz</button>
        </form>
    </body>
</html>