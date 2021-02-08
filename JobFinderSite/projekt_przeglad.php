<?php session_start(); ?>
<html lang="pl-PL">
<head>
<meta charset="utf-8">
 <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">

<style>
.scale-in-center {
    -webkit-animation: scale-in-center 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
            animation: scale-in-center 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
}
@-webkit-keyframes scale-in-center {
  0% {
    -webkit-transform: scale(0);
            transform: scale(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
    opacity: 1;
  }
}
@keyframes scale-in-center {
  0% {
    -webkit-transform: scale(0);
            transform: scale(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
    opacity: 1;
  }
}





* {
font-family: 'Roboto Condensed', sans-serif;
}

@media only screen and (min-width: 600px){

.ogloszenie {
          background-color: rgba(0, 0, 0, 0.5);
          backdrop-filter: blur(1px);
          margin-left:auto;
          margin-right:auto;
          margin-top:5%;
          padding:2%;
          height:25%;
          width: 90%;
          border-radius: 25px;
          border-color:white;
          border-style: solid;
          border-width: 3px;

}

h1 {
          margin-left:200px;
          margin-top:5%;
          color: white;
          font-size: 200%;
          position:relative;
 }
h2 {
          margin-top:-10%;
          margin-left:0%;
          color: white;
          font-size: 100%;
          position:relative;

      }
img {
  border: 0;
  float: right;

  width: 90px;
  height:90px;

}
.nazwa{

          color: white;
          font-size: 125%;
          position: absolute;
          margin-left:0%;
          margin-top: 0%;
          font-family: 'DM Sans', sans-serif;
          font-weight: 700;
padding: 10px;
 }
.data{

          color: white;
          font-size: 85%;
          position: absolute;
                    margin-left:80%;
          margin-top: 35%;
          font-family: 'DM Sans', sans-serif;
padding: 10px;
          height:40%;
 }
.firma{

          color: white;
          font-size: 150%;
          position: absolute;
          margin-left:72%;
          margin-top: 20%;
          font-family: 'DM Sans', sans-serif;
          padding: 10px;
          word-break: break-all;
 }
.tresc{

          color: white;
          font-size: 150%;
          position: absolute;
          margin-left:0%;
          margin-top: 0%;
          font-family: 'DM Sans', sans-serif;
      padding: 0px;    
 }
.kwalifikacje{

          color: white;
          font-size: 115%;
          position: absolute;
          margin-left:0%;
          margin-top: 5%;
          font-family: 'DM Sans', sans-serif;
padding: 10px;
word-break: normal;
width:60%;
 }

.kontakt{

          color: white;
          font-size: 150%;
          position: absolute;
          margin-left:81%;
          margin-top: -9%;
          font-family: 'DM Sans', sans-serif;
          padding: 10px;
 }
 #przycisk{
          margin-top:0%;
          margin-left:77%;
          margin-bottom:3%;
          background-color: rgba(0, 0, 0, 0.5);
          font-size: 125%;
          padding: 1%;
          font-family: 'DM Sans', sans-serif;
          color: white;
          border-color:white;
          border-style: solid;
          border-width: 3px;
          width:25%;
          border-radius: 25px;
          position:relative;
padding: 10px;
	   }
 .tekst {
          background-color: rgba(0, 0, 0, 0.2);
          backdrop-filter: blur(1px);
          width: 60%;
          height: 60%;
          margin-left:0%;
          border-radius: 25px;
          padding:2%;
          margin-top:12%;
          border-color:white;
          border-style: solid;
          border-width: 3px;

          border-radius: 25px;
      }
body {
 background: url('obrazy/imageedit_9_2668110698.png') no-repeat center center fixed;
          font-family: 'DM Sans', sans-serif;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
}
}



@media only screen and (min-width: 1300px)  {

.ogloszenie {
          background-color: rgba(0, 0, 0, 0.5);
          backdrop-filter: blur(1px);
          margin-left:auto;
          margin-right:auto;
          margin-top:1%;
          padding:2%;
          height:45%;
          width: 50%;
          border-radius: 25px;
          border-color:white;
          border-style: solid;
          border-width: 3px;

}

h1 {
          margin-left:200px;
          margin-top:5%;
          color: white;
          font-size: 200%;
          position:relative;
 }
h2 {
          margin-top:-2%;
          margin-left:0%;
          color: white;
          font-size: 150%;
          position:fixed;

      }
img {
  border: 0;
  float: right;

  width: 90px;
  height:90px;

}
.nazwa{

          color: white;
          font-size: 135%;
          position: absolute;
          margin-left:0%;
          margin-top: 0%;
          font-family: 'DM Sans', sans-serif;
          font-weight: 700;
padding: 10px;
 }
.data{

          color: white;
          font-size: 75%;
          margin-left:75%;
          margin-top: 35%;
          font-family: 'DM Sans', sans-serif;
      padding: 10px;
          display: inline-block;
 }
.firma{

          color: white;
          font-size: 100%;
          position: absolute;
          margin-left:70%;
          margin-top: 25%;
          font-family: 'DM Sans', sans-serif;
          padding: 10px;
          word-break: break-all;
 }
.tresc{

          color: white;
          font-size: 100%;
          position: static;
          margin-left:0%;
          margin-top: 0%;
          font-family: 'DM Sans', sans-serif;
      padding: 0px;    
 }
.kwalifikacje{

          color: white;
          font-size: 115%;
          position: absolute;
          margin-left:0%;
          margin-top: 10%;
          font-family: 'DM Sans', sans-serif;
padding: 10px;
word-break: normal;
 }

.kontakt{

          color: white;
          font-size: 115%;
          position: absolute;
          margin-left:80%;
          margin-top: -15%;
          font-family: 'DM Sans', sans-serif;
          padding: 10px;
 }
 #przycisk{
          margin-top:-2%;
          margin-left:77%;
          margin-bottom:3%;
          background-color: rgba(0, 0, 0, 0.5);
          font-size: 150%;
          padding: 1%;
          font-family: 'DM Sans', sans-serif;
          color: white;
          border-color:white;
          border-style: solid;
          border-width: 3px;
          width:20%;
          border-radius: 25px;
          position:fixed;
padding: 10px;
	   }
 .tekst {
          background-color: rgba(0, 0, 0, 0.2);
          backdrop-filter: blur(1px);
          width: 60%;
          height: 45%;
          margin-left:0%;
          border-radius: 25px;
          padding:2%;
          margin-top:20%;
          border-color:white;
          border-style: solid;
          border-width: 3px;

          border-radius: 25px;
      }
body {
 background: url('obrazy/imageedit_9_2668110698.png') no-repeat center center fixed;
          font-family: 'DM Sans', sans-serif;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
}
}



@media only screen and (min-width: 1900px) {

.ogloszenie {
          background-color: rgba(0, 0, 0, 0.5);
          backdrop-filter: blur(1px);
          margin-left:auto;
          margin-right:auto;
          margin-top:1%;
          padding:2%;
          height:25%;
          width: 50%;
          border-radius: 25px;
          border-color:white;
          border-style: solid;
          border-width: 3px;

}

h1 {
          margin-left:200px;
          margin-top:10%;
          color: white;
          font-size: 200%;
          position:relative;
 }
h2 {
          margin-top:-2%;
          margin-left:0%;
          color: white;
          font-size: 150%;
          position:fixed;

      }
img {
  border: 0;
  float: right;

  width: 90px;
  height:90px;

}
.nazwa{

          color: white;
          font-size: 135%;
          position: absolute;
          margin-left:0%;
          margin-top: 0%;
          font-family: 'DM Sans', sans-serif;
          font-weight: 700;
padding: 10px;
 }
.data{

          color: white;
          font-size: 75%;
          position: absolute;
          margin-left:83%;
          margin-top: 21%;
          font-family: 'DM Sans', sans-serif;
          padding: 10px;
          height:40%;
 }
.firma{

          color: white;
          font-size: 100%;
          position: absolute;
          margin-left:75%;
          margin-top: 10%;
          font-family: 'DM Sans', sans-serif;
          padding: 10px;
          word-break: break-all;
 }
.tresc{

          color: white;
          font-size: 100%;
          position: static;
          margin-left:0%;
          margin-top: 0%;
          font-family: 'DM Sans', sans-serif;
      padding: 0px;    
 }
.kwalifikacje{

          color: white;
          font-size: 115%;
          position: absolute;
          margin-left:0%;
          margin-top: 5%;
          font-family: 'DM Sans', sans-serif;
padding: 10px;
word-break: normal;
 }

.kontakt{

          color: white;
          font-size: 115%;
          position: absolute;
          margin-left:81%;
          margin-top: -9%;
          font-family: 'DM Sans', sans-serif;
          padding: 10px;
 }
 #przycisk{
          margin-top:-2%;
          margin-left:77%;
          margin-bottom:3%;
          background-color: rgba(0, 0, 0, 0.5);
          font-size: 150%;
          padding: 1%;
          font-family: 'DM Sans', sans-serif;
          color: white;
          border-color:white;
          border-style: solid;
          border-width: 3px;
          width:20%;
          border-radius: 25px;
          position:fixed;
padding: 10px;
	   }
 .tekst {
          background-color: rgba(0, 0, 0, 0.2);
          backdrop-filter: blur(1px);
          width: 60%;
          height: 35%;
          margin-left:0%;
          border-radius: 25px;
          padding:2%;
          margin-top:12%;
          border-color:white;
          border-style: solid;
          border-width: 3px;

          border-radius: 25px;
      }
body {
 background: url('obrazy/imageedit_9_2668110698.png') no-repeat center center fixed;
          font-family: 'DM Sans', sans-serif;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
}
}



 
</style> 
</head>
<body>

<h1 style="margin:auto; text-align:center; display:block;"> Przeglądaj ogłoszenia</h1>
<p>

<a href="menu.php"><input type="submit" value="Powrót do menu" id="przycisk"></a>


<?php
$login_pass = $_SESSION['varname'];
if ($login_pass == "")
{
    echo "<h2>" . "Nie jesteś zalogowany" . "</h2>";
}
else echo "<h2>" . "Jesteś zalogowany jako: " . $login_pass . "</h2>";

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

                 
                 $sql3= "SELECT e_mail, telefon FROM Uzytkownik where login=:login";
                 $statement2=$conn->prepare($sql3);
                 $statement2->bindValue(":login", $login_ogloszenia);
                 $statement2->execute();
                 $row2=$statement2->fetch(PDO::FETCH_ASSOC);
                 $e_mail=$row2[e_mail];
                 $telefon=$row2[telefon];


if ($data_ogloszenia!=null)
{

?>
 <div class = "ogloszenie">

<?php 

if($zdjecie=="Java")
{
?>
<img alt="Chwilowy brak zdjęcia" src="obrazy/java1.png" >
<?php
}
else if($zdjecie=="Kotlin")
{
?>
<img alt="Chwilowy brak zdjęcia" src="obrazy/kotlin.png" >
<?php
}

else if($zdjecie=="PHP")
{
?>
<img alt="Chwilowy brak zdjęcia" src="obrazy/php1.png" >
<?php
}

else if($zdjecie=="C#")
{
?>
<img alt="Chwilowy brak zdjęcia" src="obrazy/csharp.png" >
<?php
}

else if($zdjecie=="C++")
{
?>
<img alt="Chwilowy brak zdjęcia" src="obrazy/c++.png" >
<?php
}

else if($zdjecie=="Python")
{
?>
<img alt="Chwilowy brak zdjęcia" src="obrazy/python1.png" >
<?php
}

else
{
?>
<img alt="Chwilowy brak zdjęcia" src="obrazy/sql1.png">
<?php
}

// MIEJSCE NA WYSWIETLANIE TRESCI OGLOSZEN
?>

<div class = "nazwa">
<?php echo "Tytuł: ".$tytul_ogloszenia; ?> 
</div>
<div class = "data">
<?php echo "".$data_ogloszenia."<br>"; ?>
</div>
<div class = "kwalifikacje">
<?php echo "Wymagane kwalifikacje: ".$kwalifikacje."<br>"; ?>
</div>
<div class = "firma">
<?php 
echo "<b>Firma: ".$firma."</b><br>";
if ($login_pass == ""){
echo "Zaloguj się, aby zobaczyć dane kontaktowe"; }
else {
echo "E-mail: ".$e_mail."<br>Nr. Tel: ".$telefon;
}
 ?>
</div>
<div class="tekst">
<div class = "tresc">
<?php echo "".$tresc_ogloszenia."<br>"; ?>
</div>
</div>
<div class = "kontakt">


</div>
</div>


<?php
}
}
}

	    catch(PDOException $err)
		{
			echo "<h2>"."Blad"."</h2>" . $err->getMessage();
		}


?>








<p>
<?php


?>




</body>
</html>	