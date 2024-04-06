<?php
include_once "config.php";
include "function/function.php";
// Connexion à la base de données (vous devez avoir vos propres informations de connexion)

// Requête SQL pour récupérer les données de la base de données
$sql = "SELECT * FROM charactera";
$result = $pdo->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<?= head() ?>
<div class="row">
    <?php
    // tant qu'il y a des resultat dans $row continue de faire ta boucle
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['id'];
        $lien = 'fichePerso.php?id=';
    ?>
        <div class="column">
            <a href="<?php echo $lien . $id; ?>">
                <img src="<?= $row['avatar']?>" alt="Image <?php echo $id; ?>" style="width:100%">
            </a>
        </div>
    <?php
    }
    ?>
</div>
