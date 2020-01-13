<?php
include 'config.php';

$id =$_POST['id'];

$sql = "Delete from nauczyciele where id='$id'";
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
    header("location: PROJEKTcz2.php");
}

?>