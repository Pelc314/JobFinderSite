<?php session_start(); ?>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
  <style><?php include_once"css/projekt_logowanie_style.css" ?></style>

</head>
<div class="scale-in-center">
<?php 
$login_pass = $_SESSION['varname'];
if ($login_pass=="") {echo "<h1>"."Nie jesteś zalogowany"."</h1>";
} else echo "<h1>"."Jesteś zalogowany jako: ".$login_pass."</h1>";
?>

<div id="blur" class="scale-in-center">

<h1>Logowanie użytkownika:</h1>
<form action="" method="post">
<h2>Login:</h2>
<input type="text" name="login" id="menu_option" class="scale-in-center">
<h2>Hasło:</h2>
<input type="password" name="haslo" id="menu_option" class="scale-in-center">

<input type="submit" name="akcja" value="Zaloguj" id="menu_option" class="scale-in-center">

</form>

<a href="menu.php"><input type="submit" value="Powrót do menu" id="menu_option" class="scale-in-center"></a>

<?php

$akcja=$_POST[akcja];

if(!empty($_POST['login']) && !empty($_POST['haslo']) && $akcja=='Zaloguj') {
    
    $p_login = $_POST['login'];
    $p_password= $_POST['haslo'];
    
    try {

    include 'baza_link.php';
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT Login FROM Uzytkownik where Login='$p_login' and Haslo='$p_password'";
 
    $stmt = $conn->query($sql);
    $rows = $stmt->fetchAll();
    $num_rows = count($rows);

    if ($num_rows==1) {
    $login_pass=$p_login;
    echo "<h2>"."Zalogowano "."</h2>";
    
    $secondsWait=0;
    header("Refresh:$secondsWait");

    
} else echo "<h2>"."Niepoprawne dane "."</h2>";
} catch(PDOException $err) 
    {
    echo "<h2>"."Błąd: brak połączenia z bazą danych! " . $err->getMessage();
    }
} else if ($akcja=='Zaloguj') {
    echo "<h2>"."Pola muszą być wypełnione "."</h2>";
}

$_SESSION['varname'] = $login_pass;

?>

</div>
</body>
</html>		