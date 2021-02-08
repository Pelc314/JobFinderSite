<?php session_start(); ?>
<?php require("botdetect.php"); ?>
<html lang="pl-PL">
<head>
  <meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
  <style><?php include_once"css/projekt_edytowanie_uzytkownik_style.css" ?></style>

</head>
<div class="scale-in-ver-top">

<?php
$login_pass = $_SESSION['varname'];
if ($login_pass=="") {echo "<h1>"."Nie jesteś zalogowany"."</h1>";
} else echo "<h1>"."Jesteś zalogowany jako: ".$login_pass."</h1>";
?>
<?php


  try {

    include "baza_link.php";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT Haslo, Imie, Nazwisko, E_mail, Telefon, Miasto, Wyksztalcenie FROM Uzytkownik WHERE Login='".$login_pass."' ";
    $p_lp=0;
    
    foreach ($conn->query($sql) as $row) 
            {
    $p_password= $row['Haslo'];
    $p_imie = $row['Imie'];
    $p_nazwisko = $row['Nazwisko'];
    $p_email = $row['E_mail'];
    $p_telefon = $row['Telefon'];
    $p_miasto = $row['Miasto'];
    $p_wyksztalcenie = $row['Wyksztalcenie'];
            }


    $conn = null;

  }
  catch(PDOException $err) 
    {
    	echo "Błąd połączenia z bazą: " . $err->getMessage();
  	}
   

?>



<div id="blur" class="scale-in-ver-top">

<form action="" method="post">

<h1>Edytowanie profilu:</h1>
<h2>Hasło:</h2>
<input type="password" name="haslo" id="menu_option" value="<?php echo (isset($p_password))?$p_password:'';?>"><br>
<h2>Imię:</h2>
<input type="text" name="imie" id="menu_option" value="<?php echo (isset($p_imie))?$p_imie:'';?>"><br>
<h2>Nazwisko:</h2>
<input type="text" name="nazwisko" id="menu_option" value="<?php echo (isset($p_nazwisko))?$p_nazwisko:'';?>"><br>
<h2>E-mail:</h2>
<input type="text" name="email" id="menu_option" value="<?php echo (isset($p_email))?$p_email:'';?>"><br>
<?php 
$email_b = $_POST['email'];

if (!empty($_POST['email']) && !filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
    echo "<h2>"."Niepoprawny format adresu e-mail  "."</h2>";
}
?>
<h2>Telefon:</h2>
<input type="text" name="telefon" id="menu_option" value="<?php echo (isset($p_telefon))?$p_telefon:'';?>"><br>
<h2>Miasto:</h2>
<input type="text" name="miasto" id="menu_option" value="<?php echo (isset($p_miasto))?$p_miasto:'';?>"><br>
<h2>Wykształcenie:</h2>
<input type="text" name="wyksztalcenie" id="menu_option" value="<?php echo (isset($p_wyksztalcenie))?$p_wyksztalcenie:'';?>"><br>

<div id="captcha_edit">
<?php // Adding BotDetect Captcha to the page 
  $ExampleCaptcha = new Captcha("ExampleCaptcha");
  $ExampleCaptcha->UserInputID = "CaptchaCode";
  echo $ExampleCaptcha->Html(); 
?>
</div>

<h2>Captcha:</h2>
<input name="CaptchaCode" id="CaptchaCode" type="text"/>
<input type="submit" name="akcja" value="Edytuj" id="menu_option">
</form>
<a href='menu.php'><input type="submit" value="Powrót" id="menu_option"></a>

<?php

$isHuman = $ExampleCaptcha->Validate();
$akcja=$_POST[akcja];


if ($akcja=='Edytuj' && !$isHuman) {
    echo "<h2>"."Niepoprawna captcha "."</h2>";

        $conn = null;
        
        echo "<script>

        window.scrollTo(0,document.body.scrollHeight);


        </script>";
}

if(!empty($_POST['haslo']) && !empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['email']) && !empty($_POST['telefon']) && !empty($_POST['miasto']) && !empty($_POST['wyksztalcenie']) && $akcja=='Edytuj' && $isHuman && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    
    $p_password= $_POST['haslo'];
    $p_imie = $_POST['imie'];
    $p_nazwisko = $_POST['nazwisko'];
    $p_email = $_POST['email'];
    $p_telefon = $_POST['telefon'];
    $p_miasto = $_POST['miasto'];
    $p_wyksztalcenie = $_POST['wyksztalcenie'];

    try {
    include "baza_link.php";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE `Uzytkownik` SET `Haslo`='$p_password', `Imie`='$p_imie', `Nazwisko`='$p_nazwisko',`E_mail`='$p_email',`Telefon`='$p_telefon',`Miasto`='$p_miasto', `Wyksztalcenie`='$p_wyksztalcenie' WHERE Login='".$login_pass."'";
      $conn->exec($sql);
    	echo "<h2>"."Edytowano profil "."</h2>";
        echo "<h2>"."Za chwilę strona zostanie odświeżona"."</h2>"."<div class=".loader."></div>"."<h2>";

    	$conn = null;
        
        echo "<script>

        window.scrollTo(0,document.body.scrollHeight);


        </script>";
        
        $secondsWait=3;
        header("Refresh:$secondsWait");
        
       }
    catch(PDOException $err) 
    {
    echo "<h2>"."Przepraszamy, wystąpił błąd  "."</h2>" . $err->getMessage();
    }

} else if ($akcja=='Edytuj') {
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