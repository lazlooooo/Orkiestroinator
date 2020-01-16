<?php
include 'config.php';

$id =$_POST['id'];

$sql = "Delete from uzytkownicy where id='$id'";
$wynik=$polaczenie -> query($sql);

if($wynik==false)
{
   echo 'cos poszło nie tak z zapytaniem';
   $polaczenie->close();
   exit;
}
else
{
    $polaczenie->close();
    header("location: baza.php");
}

?>