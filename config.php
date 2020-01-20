<?php
$server='localhost';
$username='root';
$password='';
$database='orkiestroinator';
$conn = new mysqli($server,$username,$password,$database);

if(mysqli_connect_errno() !=0)
{ echo 'Wystąpił błąd podczas łączenia z bazą danych: '.mysqli_connect_error();
    
  exit;
} 
?>