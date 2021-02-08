<!DOCTYPE html>

<?php session_start(); ?>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
  <style><?php include_once"css/menu_style.css" ?></style>

</head>

<body>
<div >
<?php 
$login_pass = $_SESSION['varname'];
if ($login_pass=="") {echo "<h1>"."Nie jesteś zalogowany"."</h1>";
} else echo "<h1>"."Jesteś zalogowany jako: ".$login_pass."</h1>";
?>
</div>

<div id="logreg" >
<a href="projekt_logowanie.php"><input type="submit" value="Logowanie" id="logowanie" ></a>
<a href="projekt_rejestrowanie_wybor.php"><input type="submit" value="Rejestracja" id="logowanie" ></a>
<form action="" method="post" style="text-align:center; margin-top:1%;">
<input type="submit" name="akcja" value="Wyloguj" id="logowanie" >
<input type="submit" name="akcja" value="Edytuj profil" id="logowanie" >
</form>
</div>

<?php
$akcja=$_POST[akcja];
if ($akcja=='Wyloguj') {
    session_destroy();
    $secondsWait = 0;
    header("Refresh:$secondsWait");
    }
?>

<?php
$akcja=$_POST[akcja];
if ($akcja=='Edytuj profil' && $login_pass=="") {
    echo "<h1>"."Do wykonania tej czynności musisz być zalogowany"."</h1>";
    } else if ($akcja=='Edytuj profil' && $login_pass!="") {

  try {
    include "baza_link.php";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT czy_firma FROM Uzytkownik WHERE Login='".$login_pass."' ";
    $p_lp=0;


        foreach ($conn->query($sql) as $row) 
            {
                $czy_firma=$row['czy_firma'];
                
                
        if ($czy_firma) {
            header("Location: http://maciejnmaciej.cba.pl/projekt/projekt_edytowanie_firma.php");
            exit();
    	} else {
            header("Location: http://maciejnmaciej.cba.pl/projekt/projekt_edytowanie_uzytkownik.php");
            exit();
    	}
            }
        
    $conn = null;

  }
  catch(PDOException $err) 
	{
    	echo "Błąd połączenia z bazą: " . $err->getMessage();
  	}
   
    } 
?>

<div id="sitename">
<h1 >IT Jobs</h1>
</div>
  
<div id="blur" >
<a href="projekt_przeglad.php"><input type="submit" value="Przeglądaj ogłoszenia" id="menu_option" ></a>
<a href="projekt_dod_ogloszenia.php"><input type="submit" value="Dodaj ogłoszenie" id="menu_option" ></a>
<a href="Edycja_ogloszenia.php"><input type="submit" value="Zarządzaj ogłoszeniem" id="menu_option" ></a>
</div>

<?php
$_SESSION['varname'] = $login_pass;
?>

</body>
</html>