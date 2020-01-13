<?php

include 'config.php';
$sql = "SELECT  * from nauczyciele ";
$wynik = $polaczenie->query($sql);
$nazwa = $_POST['file'];
$dokument = fopen("$nazwa.csv", "w") or die("Wystąpił błąd!");
    
foreach($wynik as $linia)
{
    fputcsv($dokument,$linia);
}

fclose($dokument);

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
   
        
        