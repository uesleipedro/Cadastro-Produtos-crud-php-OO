
<?php
$pagina = $_GET['pagina'];

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'app/view/header.php';

include("app/controller/".$pagina.".php");

include 'app/view/footer.php';
