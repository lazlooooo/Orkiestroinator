<?php
include '../config.php';

$id =$_POST['id'];

$sql = "Delete from uzytkownicy where id='$id'";
$wynik=$conn -> query($sql);

if($wynik==false)
{
   echo 'cos poszło nie tak z zapytaniem';
   $conn->close();
   exit;
}
else
{
    $conn->close();
    header("location: baza.php");
}

?>