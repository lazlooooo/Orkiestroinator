<?php
session_start();
if(isset($_POST['submit_login']))
{   
    if ( (isset($_POST['username'])) && (isset($_POST['password'])) )
    {
        $_SESSION['logowanie']=$_POST['username'];
        header('Location: PROJEKT_log_ok.php');
        
    }

    else
        echo 'Wystąpił błąd podczas logowania! Proszę spróbować ponownie!';
    
}
 
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Projek zaliczeniowy z przedmiotu Programowanie aplikacji internetowych">
	<title>Projekt</title>
    <link rel="stylesheet" type="text/css" href="stylePROJEKT.css">
</head>
<body>
    <div id="panel">
    <form action="PROJEKT.php" method="post">
    <label for="username">Nazwa użytkownika:</label>
    <input type="text" id="username" name="username" required>
    <label for="password">Hasło:</label>
    <input type="password" id="password" name="password" required>
    <div id="lower">
    <input type="submit" value="Zaloguj" name="submit_login">
    </div>
    </form>
    </div>
</body>
</html>

