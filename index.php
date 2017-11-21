<?php
include ("Controller/DataBase.php");
include ("Model/User.php");
?>
<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="Benmeddour inc, l'auto-école des pilotes !" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
</head>


<body>
<div id="header-wrapper">
  <div id="header" class="container">
    <div id="logo">
      <div class="logo-image"><img width="400" height="400" src="images/logo.png"></div>
      <div class="ntm"><h1><a href="?page=acceuil">BENMEDDOUR INC</a></h1></div>
</div>
    <div id="menu">
      <ul>
        <li class="current_page_item"><a href="?page=inscription" accesskey="1" title="">Incription</a></li>
        <li><a href="?page=acceuil" accesskey="2" title="">Acceuil</a></li>
        <li><a href="#" accesskey="3" title="">Forfaits</a></li>
        <li><a href="?page=liste" accesskey="4" title="">Liste des utilisateurs</a></li>
        <li><a href="?page=connexion" accesskey="5" title="">Connexion</a></li>
      </ul>
    </div>
  </div>
</div>

<?php
$database = new DataBase();

$page = isset($_GET['page']) ? trim(strtolower($_GET['page']))       : "home";
$allowedPages = array(
    'inscription'     => 'Views/inscription.php',
    'acceuil'    => 'Views/acceuil.php',
    'forfaits' => 'Views/forfaits.php',
    'liste'  => 'Views/ListeUtilisateurs.php',
    'connexion'   => 'Views/Connexion.php');

include( isset($allowedPages[$page]) ? $allowedPages[$page] : $allowedPages["acceuil"] );
?>




<div id="copyright" class="container">
  <p>Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>