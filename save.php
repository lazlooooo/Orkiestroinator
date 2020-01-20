<?php
session_start();
include "config.php";
if(empty($_POST['tytul'])==1 OR empty($_POST['songToSave'])==1){

echo "<center>Błąd zapisu. Uzupełnij wszystkie pola i spróbuj ponownie.</center><meta http-equiv='Refresh' content='3;url=instrumenty.php'>";
}
else{
$conn->query("insert into piosenki values(NULL, '".htmlspecialchars($_SESSION["id"])."', '".htmlspecialchars($_POST["instrumentId"])."', '".htmlspecialchars($_POST["tytul"])."', '".htmlspecialchars($_POST["songToSave"])."')"); // zapisywanie rekordu do bazy
header('Location: ' . $_SERVER['HTTP_REFERER']);
}
exit;
?>