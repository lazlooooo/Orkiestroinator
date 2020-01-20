<?php
include 'config.php';

$values = explode(':',$_POST['selectSong']);
$id_piosenki =$values[1];

$sql = "Delete from piosenki where id_piosenki='$id_piosenki'";
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
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

?>