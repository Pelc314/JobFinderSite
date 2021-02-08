<?php session_start(); ?>
<html lang="pl-PL">
<head>
<meta charset="utf-8">

</head>
<body>

<h1 style="margin:auto; text-align:center; display:block;"> Przeglądaj ogłoszenia</h1>
<p>

<a href="menu.php"><input type="submit" value="Powrót do menu" id="przycisk"></a>
</br>
</br>


<?php

            try {
		include 'baza_link.php';
		$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT firma,tytul,kwalifikacje,tresc,data_zam,dom_tech,login FROM Ogloszenie WHERE id_ogloszenie=:id_ogloszenie";
             
                $sql2 = "SELECT MAX(id_ogloszenie) FROM Ogloszenie";
                
                $res = $conn->query($sql2);
                $ilosc = $res->fetchColumn(); // id najwiekszego rekordu
                $statement = $conn->prepare($sql);
                
                
                
                for($i=1;$i<=$ilosc;$i++) // PETLA 
{
           
                $id_ogloszenie=$i;
                $statement->bindValue(":id_ogloszenie", $id_ogloszenie);
//Execute our statement.
                $statement->execute();
 
//Fetch our rows. Array (empty if no rows). False on failure.
                $row = $statement->fetch(PDO::FETCH_ASSOC);

                 $zdjecie=$row[dom_tech];
                 $tytul_ogloszenia=$row[tytul];
                 $kwalifikacje=$row[kwalifikacje];
                 $data_ogloszenia=$row[data_zam];
                 $firma=$row[firma];
                 $tresc_ogloszenia=$row[tresc];
                 $login_ogloszenia=$row[login];


if ($data_ogloszenia!=null)
{
    echo "<form>";
    echo "</br>".$tytul_ogloszenia."    ";
    echo "<button type=".submit.">Szczegóły</button>";
    echo "<input type=".hidden." id=".postId." name=".postId." value=".$id_ogloszenie.">";
    echo "</form>";

}


}



} catch(PDOException $err)
		{
			echo "<h2>"."Blad"."</h2>" . $err->getMessage();
		}


?>

<?php 

$postId=$_GET[postId];

            try {
    	include 'baza_link.php';
		$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT firma,tytul,kwalifikacje,tresc,data_zam,dom_tech,login FROM Ogloszenie WHERE id_ogloszenie=:postId";
             
                $statement = $conn->prepare($sql);

                $id_ogloszenie=$i;
                $statement->bindValue(":postId", $postId);
//Execute our statement.
                $statement->execute();
 
//Fetch our rows. Array (empty if no rows). False on failure.
                $row = $statement->fetch(PDO::FETCH_ASSOC);

                 $zdjecie=$row[dom_tech];
                 $tytul_ogloszenia=$row[tytul];
                 $kwalifikacje=$row[kwalifikacje];
                 $data_ogloszenia=$row[data_zam];
                 $firma=$row[firma];
                 $tresc_ogloszenia=$row[tresc];
                 $login_ogloszenia=$row[login];


    echo "</br>".$tresc_ogloszenia;




} catch(PDOException $err)
		{
			echo "<h2>"."Blad"."</h2>" . $err->getMessage();
		}

?>
</body>
</html>	