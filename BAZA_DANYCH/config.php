<?php
$polaczenie = new mysqli('localhost','root','','orkiestroinator' );

if(mysqli_connect_errno() !=0)
{ echo 'Wystąpił błąd podczas łączenia z bazą danych: '.mysqli_connect_error();
    
  exit;
} 
?>