<?php session_start(); ?>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
  <style><?php include_once"css/projekt_rejestrowanie_wybor_style.css" ?></style>

</head>

<body>
<div class="scale-in-center">
<?php
$login_pass = $_SESSION['varname'];
if ($login_pass=="") {echo "<h1>"."Nie jesteś zalogowany"."</h1>";
} else echo "<h1>"."Jesteś zalogowany jako: ".$login_pass."</h1>";
?>
</div>

<div id="blur" class="scale-in-center">

<a href="projekt_rejestrowanie_uzytkownik.php"><input type="submit" value="Utwórz konto pracownicze" id="menu_option" class="scale-in-center"></a>
<a href="projekt_rejestrowanie_firma.php"><input type="submit" value="Utwórz konto firmowe" id="menu_option" class="scale-in-center"></a>
<a href="menu.php"><input type="submit" value="Powrót do menu" id="menu_option" class="scale-in-center"></a>

</div>
</body>
</html>    	