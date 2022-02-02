<?php
include('../model/connexion.php');
?>
<div>
    <br>
    <br>
    <form action="#" method="post">
        <label for="text">Votre commentaire</label>
        <br>
        <br>
        <input type="text" name="user_pseudo" placeholder="Votre pseudo">
        <br>
        <br>
        <textarea name="zone_com" id="zone_com" placeholder="Votre commentaire ici" cols="40" rows="10"></textarea>
        <br>
        <br>
        <input type="submit" value="Envoyer">
    </form>
</div>