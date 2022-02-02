<?php
try {
    $dbhost = 'localhost';
    $dbname = 'hr';
    $dbuser = 'root';
    $dbpass = '';
    $connec = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
} catch (PDOException $e) {
    echo "Error : " . $e->getMessage() . "
";
    die();
}
/* Execute a prepared statement by passing an array of values */
$sql = 'SELECT fname, lname, country FROM user_details
        WHERE country = :country';
$sth = $connec->prepare($sql);
$sth->execute(array(':country' => 'Germany'));
$c = $sth->fetchAll();
print_r($c);
?>