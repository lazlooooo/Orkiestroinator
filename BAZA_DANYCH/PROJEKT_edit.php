<?php

include 'config.php';

 $id = $_POST['id'];
 if(isset($_POST['edycja']))
 {
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$data_urodzenia = $_POST['data_urodzenia'];
$tytul_naukowy = $_POST['tytul_naukowy'];
$przedmiot = $_POST['przedmiot'];
$sql = "UPDATE nauczyciele SET imie='$imie', nazwisko='$nazwisko', data_urodzenia='$data_urodzenia', tytul_naukowy='$tytul_naukowy', przedmiot='$przedmiot' WHERE id='$id'";
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
        header('location: PROJEKTcz2.php');
    
    }

 }
else
    {
        $sql = "SELECT * FROM nauczyciele where id='$id'"; 
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
                $nazwisko = $rekord['nazwisko'];
                $data_urodzenia = $rekord['data_urodzenia'];
                $tytul_naukowy = $rekord['tytul_naukowy'];
                $przedmiot = $rekord['przedmiot'];
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
            <label for="nazwisko">Nazwisko </label>
            <input type="text" name="nazwisko" required value='<?php echo $nazwisko; ?>'/> <br />
            <label for="data_urodzenia">Data urodzenia </label>
            <input type="date" name="data_urodzenia" required value='<?php echo $data_urodzenia; ?>'/><br />
            <label for="tytul_naukowy">Tytuł Naukowy </label>
            <input type="text" name="tytul_naukowy" required value='<?php echo $tytul_naukowy; ?>'/> <br />
            <label for="przedmiot">Przedmiot </label>
            <input type="text" name="przedmiot" required value='<?php echo $przedmiot; ?>'/><br />
            <button type="submit" value="post" name="edycja">Zapisz</button>
        </form>
    </body>
</html>