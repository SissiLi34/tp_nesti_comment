

<?php
$pseudo = $_POST['user_pseudo'];
$commentaire = $_POST['zone_com'];


$bouboule = $dbh->prepare("INSERT INTO COMMENTS (pseudo, commentaire) value (:nom, :commentaire)");
// binParam filtre la variable
$bouboule->bindParam(':nom', $user_pseudo);
$bouboule->bindParam(':commentaire, $zone_com');
?>