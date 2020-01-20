<?php
session_start();
if($_SESSION["zalogowany"]!=2)echo "Witryna dostępna tylko z poziomu admina!";
else{

include '../config.php';

echo '
        <h1>BAZA DANYCH ZAREJESTROWANYCH UŻYTKOWNIKÓW: </h1><br>
 
        <table style="width: 100%;" border="1" cellpadding="3">
        <tbody>
        <tr style="background:#17a2b8;">
            <td style="width:10%">ID</td>
            <td style="width:20%">IMIĘ</td>
            <td style="width:20%">HASŁO</td>
            <td style="width:20%">EMAIL</td>
            <td style="width:20%">ADMIN</td>
            <td style="width:10%">EDYTUJ</td>
            <td style="width:10%">USUŃ</td>
        </tr>
        ';

$sql = 'select * from uzytkownicy';

$wynik=$conn -> query($sql);

    if($wynik==false)
    {
        echo 'cos poszło nie tak z zapytaniem';
        $conn->close();
        exit;
    }
    while(($rekord= $wynik ->fetch_assoc())  !=null)
    {
            $id=$rekord['id'];
            echo "<form method='post'>";
            echo "<input type='hidden' name='id' value='$id'/>";
            echo '<tr>';
            echo '<td>'.$rekord['id'].'</td>';
            echo '<td>'.$rekord['imie'].'</td>';
            echo '<td>'.$rekord['haslo'].'</td>';
            echo '<td>'.$rekord['email'].'</td>';
            echo '<td>'.$rekord['admin'].'</td>';
            echo '<td>'."<button type='submit' formaction='edit.php'><img src='https://st2.depositphotos.com/5266903/11961/v/950/depositphotos_119619980-stock-illustration-edit-document-stroke-vector-icon.jpg' width='12' height='12'></button>".'</td>';
            echo '<td>'."<button type='submit' formaction='remove.php';><img src='https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/129/cross-mark_274c.png' width='12' height='12'></button>".'</td>';
            echo '</tr>';
            echo '</form>';
                
            
    }
}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    </head>
    <body>
        <br><br>    
    </body>
</html>