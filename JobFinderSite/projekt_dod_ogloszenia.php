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
          color: black;
          border-color:white;
          border-style: round;
          border-width: 3px;
          width:90%;
      }
      option {
      background-color: rgba(0, 0, 0, 0.4);
      }
		 }
	  
	  
	  
	  
</style> 
</head>
<body>
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

<h1>Dodawanie ogłoszenia:</h1>
<h2>Tytuł ogłoszenia:</h2>
<input type="text" name="tytul"id="menu_option">
<h2>Wymagane kwalifikacje:</h2>
<input type="text" name="kwalifikacje"id="menu_option">
<h2>Treść ogłoszenia:</h2>
<textarea id="menu_option" name="tresc" rows="4" cols="50">
</textarea>
<h2>Dominująca technologia wykorzystywana na stanowisku:</h2>

     <select name="dom_tech" id = "menu_option">
        <option value="Java">Java</option>
        <option value="Kotlin">Kotlin</option>
        <option value="PHP">PHP</option>
		<option value="C#">C#</option>
		<option value="C++">C++</option>
		<option value="Python">Python</option>
		<option value="SQL">SQL</option>
     </select>
    


<input type="submit" name="akcja" value="Dodaj Ogłoszenie" id="menu_option" >
</form>

<a href="menu.php"><input type="submit" value="Powrót do menu" id="menu_option"></a>

<?php
$akcja = $_POST[akcja];

if ($akcja == 'Dodaj Ogłoszenie' && $login_pass == "")
{
    echo "<h1>" . "Do wykonania tej czynności musisz być zalogowany" . "</h1>";
    echo "<script>

        window.scrollTo(0,document.body.scrollHeight);


        </script>";
}
else if ($akcja == 'Dodaj Ogłoszenie' && $login_pass != "")
{

    try
    {
        include "baza_link.php";
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT czy_firma, Nazwa_firmy FROM Uzytkownik WHERE Login='" . $login_pass . "' ";
        $p_lp = 0;

        foreach ($conn->query($sql) as $row)
        {
            $czy_firma = $row['czy_firma'];
            $p_firma = $row['Nazwa_firmy'];

        }

        $conn = null;

    }
    catch(PDOException $err)
    {
        echo "Błąd połączenia z bazą: " . $err->getMessage();
    }

    if ($czy_firma == 0)
    {
        echo "<h1>" . "Aby dodać ogłoszenie należy być zalogowanym na koncie firmowym" . "</h1>";
        echo "<script>

        window.scrollTo(0,document.body.scrollHeight);


        </script>";
    }
    else if (!empty($_POST['tytul']) && !empty($_POST['kwalifikacje']) && !empty($_POST['tresc']) && !empty($_POST['dom_tech']) && $akcja == 'Dodaj Ogłoszenie')
    {

        $p_tytul = $_POST['tytul'];
        $p_kwalifikacje = $_POST['kwalifikacje'];
        $p_tresc = $_POST['tresc'];
        $p_dom_tech = $_POST['dom_tech'];
        //$p_login_pass = $_POST['login_pass'];
        try
        {

            include 'baza_link.php';
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT tytul FROM Ogloszenie where tytul='$p_tytul'";

            $stmt = $conn->query($sql);
            $rows = $stmt->fetchAll();
            $num_rows = count($rows);
            

            if ($num_rows == 0)
            {
                try
                {
                    include 'baza_link.php';
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "INSERT INTO Ogloszenie(firma,tytul,kwalifikacje,tresc,data_zam,dom_tech,Login)
		VALUES ('$p_firma','$p_tytul','$p_kwalifikacje','$p_tresc',sysdate(),'$p_dom_tech','$login_pass')";

                    //$stmt = $conn->query($sql);
                    $conn->exec($sql);
                    echo "<h2>" . "Ogłoszenie zostało zamieszczone" . "</h2>";

                    $conn = null;
                    echo "<script>

        window.scrollTo(0,document.body.scrollHeight);


        </script>";
                }
                catch(PDOException $err)
                {
                    echo "<h2>" . "Przepraszamy, wystąpił błąd" . "</h2>" . $err->getMessage();
                }
            }
            else {echo "<h2>" . " Ogłoszenie o takim tytule już istnieje" . "</h2>";
            echo "<script>

        window.scrollTo(0,document.body.scrollHeight);


        </script>";
        }
        }
        catch(PDOException $err)
        {
            echo "<h2>" . "Przepraszamy, wystąpił błąd połączenia z bazą" . "</h2>" . $err->getMessage();
        }
    }
    else echo "<h2>" . " Wystąpił błąd, możliwe, że użytkownik nie zapełnił wszystkich pól" . "</h2>";
    echo "<script>

        window.scrollTo(0,document.body.scrollHeight);


        </script>";
}

$_SESSION['varname'] = $login_pass;
?>
</div>
</html>
