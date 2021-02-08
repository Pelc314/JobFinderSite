<?php session_start(); ?>
<?php require("botdetect.php"); ?>
<html lang="pl-PL">
<head>
  <meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
  <style><?php include_once"css/projekt_rejestrowanie_firma_style.css" ?></style>

</head>
<div class="scale-in-ver-top">
<?php
$login_pass = $_SESSION['varname'];
if ($login_pass=="") {echo "<h1>"."Nie jesteś zalogowany"."</h1>";
} else echo "<h1>"."Jesteś zalogowany jako: ".$login_pass."</h1>";
?>

<div id="blur" class="scale-in-ver-top">

<form action="" method="post">

<h1>Rejestracja firmy:</h1>
<h2>Login:</h2>
<input type="text" name="login" id="menu_option"><br>
<h2>Hasło:</h2>
<input type="password" name="haslo" id="menu_option"><br>
<h2>Nazwa Firmy:</h2>
<input type="text" name="nazwafirmy" id="menu_option"><br>
<h2>E-mail:</h2>
<input type="text" name="email" id="menu_option"><br>
<?php 
$email_b = $_POST['email'];

if (!empty($_POST['email']) && !filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
    echo "<h2>"."Niepoprawny format adresu e-mail  "."</h2>";
}
?>
<h2>Telefon:</h2>
<input type="text" name="telefon" id="menu_option"><br>
<h2>Miasto:</h2>
<input type="text" name="miasto" id="menu_option"><br>
<h2>NIP:</h2>
<input type="text" name="nip" id="menu_option"><br>

<div id="captcha_edit">
<?php // Adding BotDetect Captcha to the page 
  $ExampleCaptcha = new Captcha("ExampleCaptcha");
  $ExampleCaptcha->UserInputID = "CaptchaCode";
  echo $ExampleCaptcha->Html(); 
?>
</div>

<h2>Captcha:</h2>
<input name="CaptchaCode" id="CaptchaCode" type="text"/>
<input type="submit" name="akcja" value="Zarejestruj" id="menu_option">
</form>
<a href='menu.php'><input type="submit" value="Powrót" id="menu_option"></a>

<?php

$isHuman = $ExampleCaptcha->Validate();
$akcja=$_POST[akcja];


if ($akcja=='Zarejestruj' && !$isHuman) {
    echo "<h2>"."Niepoprawna captcha "."</h2>";

        $conn = null;
        
        echo "<script>

        window.scrollTo(0,document.body.scrollHeight);


        </script>";
}

if(!empty($_POST['login']) && !empty($_POST['haslo']) && !empty($_POST['nazwafirmy']) && !empty($_POST['email']) && !empty($_POST['telefon']) && !empty($_POST['miasto']) && !empty($_POST['nip']) && $akcja=='Zarejestruj' && $isHuman && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    
    $p_login = $_POST['login'];
    $p_password= $_POST['haslo'];
    $p_nazwafirmy = $_POST['nazwafirmy'];
    $p_email = $_POST['email'];
    $p_telefon = $_POST['telefon'];
    $p_miasto = $_POST['miasto'];
    $p_nip = $_POST['nip'];
    
    try {

    include 'baza_link.php';
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT Login FROM Uzytkownik where Login='$p_login'";
 
    $stmt = $conn->query($sql);
    $rows = $stmt->fetchAll();
    $num_rows = count($rows);

    if ($num_rows==0) {
    try {
    include "baza_link.php";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO `Uzytkownik`(`Login`, `Haslo`, `Imie`, `Nazwisko`, `Nazwa_firmy`, `E_mail`, `Telefon`, `Miasto`, `Wyksztalcenie`, `Czy_firma`, `NIP`, `Data_dolaczenia`) VALUES ('$p_login','$p_password','','','$p_nazwafirmy','$p_email','$p_telefon','$p_miasto','','1','$p_nip',sysdate())";
      $conn->exec($sql);
    	echo "<h2>"."Użytkownik został dodany "."</h2>";

    	$conn = null;
        
        echo "<script>

        window.scrollTo(0,document.body.scrollHeight);


        </script>";
        
       }
    catch(PDOException $err) 
    {
    echo "<h2>"."Przepraszamy, wystąpił błąd  "."</h2>" . $err->getMessage();
    }
}
else echo "<h2>"."Podane dane są nieprawidłowe lub uzytkownik o takim loginie już istnieje "."</h2>";
}
catch(PDOException $err) 
    {
    echo "<h2>"."Przepraszamy, wystąpił błąd "."</h2>" . $err->getMessage();
    }
} else if ($akcja=='Zarejestruj') {
    echo "<h2>"."Wszystkie pola muszą być wypełnione "."</h2>";

        $conn = null;
        
        echo "<script>

        window.scrollTo(0,document.body.scrollHeight);


        </script>";
}
$_SESSION['varname'] = $login_pass;
?>
</div>
</html>		