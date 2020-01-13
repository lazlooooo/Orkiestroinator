<?php
session_start();

if (!isset($_SESSION['logowanie']))
{
    header('Location: PROJEKT.php');
    exit;
}

echo 'Witamy: '.$_SESSION['logowanie'];
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<br><br>
<form action="PROJEKTcz2.php" method="post">
        <input type="submit" value="Przejdź do Głównego Menu" name="Dalej" >
</form>
<?php
if(isset($_POST['Dalej']))
{
    header('Location: PROJEKTcz2.php');
    exit;
}


?>