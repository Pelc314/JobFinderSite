<?php session_start(); ?>
<html lang="pl-PL">
<head>
  <meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
<style>
 .scale-in-ver-top {
    -webkit-animation: scale-in-ver-top 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
            animation: scale-in-ver-top 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
}


@-webkit-keyframes scale-in-ver-top {
  0% {
    -webkit-transform: scaleY(0);
            transform: scaleY(0);
    -webkit-transform-origin: 100% 0%;
            transform-origin: 100% 0%;
    opacity: 1;
  }
  100% {
    -webkit-transform: scaleY(1);
            transform: scaleY(1);
    -webkit-transform-origin: 100% 0%;
            transform-origin: 100% 0%;
    opacity: 1;
  }
}
@keyframes scale-in-ver-top {
  0% {
    -webkit-transform: scaleY(0);
            transform: scaleY(0);
    -webkit-transform-origin: 100% 0%;
            transform-origin: 100% 0%;
    opacity: 1;
  }
  100% {
    -webkit-transform: scaleY(1);
            transform: scaleY(1);
    -webkit-transform-origin: 100% 0%;
            transform-origin: 100% 0%;
    opacity: 1;
  }
}

      @media only screen and (min-width: 600px) {
      body {
          background: url('obrazy/imageedit_2_5720686348.png') no-repeat center center fixed ;
          font-family: 'DM Sans', sans-serif;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
      }
      #sitename {
          margin-left:auto;
          margin-right:auto;
          width:50%;
          color: white;
          font-size: 450%; 
      }
      h1 {
          margin-top:3%;
          margin-left:auto;
          margin-right:auto;
          text-align:center;
          color:white;
      }
      h2 {
          margin-left:auto;
          margin-right:auto; 
          color: white;
          font-size: 300%;
      }
	  #blur {
          background-color: rgba(0, 0, 0, 0.4);
          backdrop-filter: blur(1px);
          width: 100%;
          margin-left:auto;
          margin-right:auto;
          padding:2%;
          margin-top:1%;
	  }
      #blur2 {
          background-color: rgba(0, 0, 0, 0.1);
          backdrop-filter: blur(1px);
          width: 90%;
          margin-left:auto;
          margin-right:auto;
          padding:2%;
          margin-top:1%;
      }
	  a {
          text-align:center;
          width: 100%;
          margin-left:auto;
          margin-right:auto;
	  }
	   #menu_option {
          margin-top:3%;
          margin-left:5%;
          margin-bottom:3%;
          background: transparent;
          font-size: 300%;
          padding: 1%;
          font-family: 'DM Sans', sans-serif;
          color: white;
          border-color:white;
          border-style: solid;
          border-width: 3px;
          width:90%;
          border-radius: 25px;
	   }
       option {
       background-color: rgba(0, 0, 0, 0.4);
       }
      }
	    @media only screen and (min-width: 1300px) { 
       body {
          background: url('obrazy/imageedit_2_5720686348.png') no-repeat center center fixed;
          font-family: 'DM Sans', sans-serif;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
      }
	  #sitename {
          margin-left:auto;
          margin-right:auto;
          width:30%;
          color: white;
          font-size: 400%; 
      }
	   a {
          text-align:center;
          width: 100%;
          margin-left:auto;
          margin-right:auto;
      }
	   h1 {
          margin-left:auto;
          margin-right:auto;
          color: white;
          font-size: 200%;
          text-align:center;
      }
      h2 {
      margin-top:2%;
          margin-left:5%;
          color: white;
          font-size: 150%;
      }
      #blur {
          background-color: rgba(0, 0, 0, 0.4);
          backdrop-filter: blur(1px);
          width: 40%;
          margin-left:auto;
          margin-right:auto;
          padding:2%;
          margin-top:1%;
      }
	   #menu_option {
          margin-top:1%;
          margin-left:5%;
          margin-bottom:1%;
          background: transparent;
          font-size: 150%;
          padding: 1%;
          font-family: 'DM Sans', sans-serif;
          color: white;
          border-color:white;
          border-style: solid;
          border-width: 3px;
          width:90%;
	   }
	    }
	     @media only screen and (min-width: 1900px) {
      body {
          background: url('obrazy/imageedit_2_5720686348.png') no-repeat center center fixed;
          font-family: 'DM Sans', sans-serif;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
      }
      #sitename {
          margin-left:auto;
          margin-right:auto;
          width:25%;
          color: white;
          font-size: 450%; 
      }
      a {
          text-align:center;
          width: 100%;
          margin-left:auto;
          margin-right:auto;
      }
      h1 {
          margin-left:auto;
          margin-right:auto;
          color: white;
          font-size: 300%;
          text-align:center;
      }
      h2 {
          margin-top:2%;
          margin-left:5%;
          color: white;
          font-size: 150%;
      }
      #blur {
          background-color: rgba(0, 0, 0, 0.4);
          backdrop-filter: blur(1px);
          width: 40%;
          margin-left:auto;
          margin-right:auto;
          padding:2%;
          margin-top:1%;
      }
      #menu_option {
          margin-top:1%;
          margin-left:5%;
          margin-bottom:1%;
          background: transparent;
          font-size: 150%;
          padding: 1%;
          font-family: 'DM Sans', sans-serif;
          color: white;
          border-color:white;
          border-style: solid;
          border-width: 3px;
          width:90%;
      }
	        #menu_option2 {
          margin-top:1%;
          margin-left:5%;
          margin-bottom:1%;
          background: transparent;
          font-size: 150%;
          padding: 1%;
          font-family: 'DM Sans', sans-serif;
          color: white;
          border-color:white;
          border-style: round;
          border-width: 3px;
          width:90%;
      }
		 }
	  
	  
	  
	  
</style> 
</head>
<div class="scale-in-ver-top">

<?php
$login_pass = $_SESSION['varname'];
if ($login_pass == "")
{
    echo "<h1>" . "Nie jesteś zalogowany" . "</h1>";
}
else echo "<h1>" . "Jesteś zalogowany jako: " . $login_pass . "</h1>";
?>
</div>
<div id="blur" class="scale-in-ver-top">
<form action="" method="post">

<h1>Edycja Ogłoszenia:</h1>
<h2>Tytuł ogłoszenia, które chcesz edytować:</h2>
<input type="text" name="tytul"id="menu_option">

<input type="submit" name="akcja1" value="Wybierz Ogłoszenie do Edycji" id="menu_option" >

<input type="submit" name="akcja3" value="Usuń Ogłoszenie o tym tytule" id="menu_option" >


</form>

<?php
$akcja1 = $_POST[akcja1];
$akcja3 = $_POST[akcja3];
if ($akcja1 == "Wybierz Ogłoszenie do Edycji" && !empty($_POST['tytul']) && $login_pass != "")
{
    try
    {

        include "baza_link.php";
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT tytul, kwalifikacje, tresc, dom_tech FROM Ogloszenie WHERE Login='" . $login_pass . "' AND tytul = '" . $_POST['tytul'] . "' ";
        $p_lp = 0;
        foreach ($conn->query($sql) as $row)
        {
            $p_tytul_old = $row['tytul'];
            $p_kwalifikacje = $row['kwalifikacje'];
            $p_tresc = $row['tresc'];
            $p_dom_tech = $row['dom_tech'];
           // echo "p_tytul_old: " . $p_tytul_old;
         //   echo "p_kwalifikacje: " . $p_kwalifikacje;
         //   echo "p_tresc: " . $p_tresc;
        //    echo "p_dom_tech: " . $p_dom_tech;
       //     echo "login_pass: " . $login_pass;
        }

        $conn = null;
        
        $_SESSION['tytul'] = $p_tytul_old;

        if (empty($p_tytul_old))
        {
            echo "<h2>" . "Ogłoszenie o takim tytule nie istnieje" . "</h2>";
        }

    }
    catch(PDOException $err)
    {
        echo "<h2>" . "Błąd połączenia z bazą: " . $err->getMessage() . "</h2>";
    }
}
else if ($akcja1 == "Wybierz Ogłoszenie do Edycji" && $login_pass != "")
{
    echo "<h2>" . "Podaj tytuł przed przejściem dalej" . "</h2>";
}
else if ($akcja1 == "Wybierz Ogłoszenie do Edycji")
{
    echo "<h2>" . "Zaloguj się" . "</h2>";
}

if ($akcja3 == "Usuń Ogłoszenie o tym tytule" && !empty($_POST['tytul']) && $login_pass != "")
{
    try
    {

        include "baza_link.php";
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT  tytul FROM Ogloszenie WHERE tytul = Login='" . $login_pass . "' AND tytul = '" . $_POST['tytul'] . "' ";
        $p_lp = 0;
        foreach ($conn->query($sql) as $row)
        {
            $p_tytul_old = $row['tytul'];
            
        }

        $conn = null;
        if (empty($p_tytul_old))
        {
            echo "<h2>" . "Ogłoszenie o takim tytule nie istnieje" . "</h2>";
        }
        else
        {

            include "baza_link.php";
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "DELETE FROM Ogloszenie WHERE Login='" . $login_pass . "' AND tytul = '" . $p_tytul_old . "' ";
            $conn->exec($sql);
            
            $conn = null;
            echo "<h2>" . "Ogłoszenie usunięte" . "</h2>";
        }

    }
		catch(PDOException $err)
		{
			echo "<h2>" . "Błąd połączenia z bazą: " . $err->getMessage() . "</h2>";
		}
	}
	else if ($akcja3 == "Usuń Ogłoszenie o tym tytule" && $login_pass != "")
		{
			echo "<h2>" . "Podaj tytuł przed przejściem dalej" . "</h2>";
		}
	else if ($akcja3 == "Usuń Ogłoszenie o tym tytule")
		{
			echo "<h2>" . "Zaloguj się" . "</h2>";
		}


?>



<div id="blur2" class="scale-in-ver-top">

<form action="" method="post">


<h2>Edycja tytułu:</h2>
<input type="text" name="tytul2" id="menu_option" value="<?php echo (!empty($p_tytul_old)) ? $p_tytul_old : ''; ?>"><br>
<h2>Edycja kwalifikacji:</h2>
<input type="text" name="kwalifikacje2" id="menu_option" value="<?php echo (!empty($p_kwalifikacje)) ? $p_kwalifikacje : ''; ?>"><br>
<h2>Edycja treści ogłoszenia:</h2>
<textarea id="menu_option" name="tresc2" rows="4" cols="50">
<?php echo (!empty($p_tresc)) ? $p_tresc : ''; ?>
</textarea><br>
<h2>Wybór dominującej technologii:</h2>
     <select name="dom_tech2" id = "menu_option">
		<option value="<?php echo (!empty($p_dom_tech)) ? $p_dom_tech : ''; ?>"><?php echo (!empty($p_dom_tech)) ? $p_dom_tech : ''; ?></option>
        <option value="Java">Java</option>
        <option value="Kotlin">Kotlin</option>
        <option value="PHP">PHP</option>
		<option value="C#">C#</option>
		<option value="C++">C++</option>
		<option value="Python">Python</option>
		<option value="SQL">SQL</option>
     </select>
    


<input type="submit" name="akcja2" value="Edytuj" id="menu_option" >



</div>
</form>
<a href="menu.php"><input type="submit" value="Powrót do menu" id="menu_option"></a>

<?php
$akcja = $_POST[akcja2];
$p_tytul_old_from_session = $_SESSION['tytul'];


if (!empty($_POST['tytul2']) && !empty($_POST['kwalifikacje2']) && !empty($_POST['tresc2']) && !empty($_POST['dom_tech2']) && $akcja == 'Edytuj')
{

    $p_tytul_new = $_POST['tytul2'];
    $p_kwalifikacje = $_POST['kwalifikacje2'];
    $p_tresc = $_POST['tresc2'];
    $p_dom_tech = $_POST['dom_tech2'];


    try
    {

        include 'baza_link.php';
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT tytul FROM Ogloszenie WHERE tytul='" . $p_tytul_new . "'";

        $stmt = $conn->query($sql);
        $rows = $stmt->fetchAll();
        $num_rows = count($rows);

        if ($num_rows <= 1)
        {

            try
            {
                include "baza_link.php";
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "UPDATE Ogloszenie SET tytul='$p_tytul_new', kwalifikacje='$p_kwalifikacje',tresc='$p_tresc',dom_tech='$p_dom_tech' WHERE Login='" . $login_pass . "'AND tytul = '" . $p_tytul_old_from_session . "'";
                $conn->exec($sql);
                echo "<h2>" . "Edytowano Ogłoszenie " . "</h2>";
              

                $conn = null;

                echo "<script>

				window.scrollTo(0,document.body.scrollHeight);


				</script>";

            }
            catch(PDOException $err)
            {
                echo "<h2>" . "Przepraszamy, wystąpił błąd  " . "</h2>" . $err->getMessage();
            }
        }
        else echo "<h2>" . " Inne ogłoszenie o takim tytule już istnieje" . "</h2>";

    }
    catch(PDOException $err)
    {
        echo "<h2>" . "Przepraszamy, wystąpił błąd połączenia z bazą" . "</h2>" . $err->getMessage();
    }
}
else if ($akcja == 'Edytuj' && $p_id_ogloszenie != "")
{
    echo "<h2>" . "Wszystkie pola muszą być wypełnione " . "</h2>";

    $conn = null;

    echo "<script>

        window.scrollTo(0,document.body.scrollHeight);


        </script>";
}
else if ($akcja == 'Edytuj')
{
    echo "<h2>" . "Błąd pobierania ID, pamiętaj, że wszystkie pola muszą być wypełnione " . "</h2>";
}

$_SESSION['varname'] = $login_pass;
?>
</div>
</html>
