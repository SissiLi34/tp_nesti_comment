
<?php
try {
    $dbhost = 'localhost';
    $dbname = 'template_nesti';
    $dbuser = 'root';
    $dbpass = '';
    $connec = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    // $requete =  "SELECT * FROM template_nesti";
    echo   "   marche";
} catch (PDOException $e) {
    echo "Error : " . $e->getMessage() . "         marche pas";
    die();
}
