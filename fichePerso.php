<?php
include_once "config.php";
include "function/function.php";
?>
<!DOCTYPE html>
<html lang="en">
<?= head() ?>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //GET method : show the data of the client

    if (!isset($_GET["id"])) {
        header("location : /fichePerso.php");
        exit;
    }
    
    $id = $_GET["id"];

    // read the row of the selected client from database table
    $sql = "SELECT * FROM charactera WHERE id=$id";
    $result = $pdo->query($sql);
    $row = $result->fetchAll();

    if (!$row) {
        header("location: / fichePerso.php");
        exit;
    }

    $id = $row[0]["id"];
    $name = $row[0]["name"];
    $avatar = $row[0]["avatar"];
    $race = $row[0]["race"];
    $class = $row[0]["class"];
    $title = $row[0]["title"];
    $twitchName = $row[0]["twitchName"];
    $xp = $row[0]["xp"];
    $lvl = $row[0]["lvl"];
    $strength = $row[0]["strength"];
    $dexterity = $row[0]["dexterity"];
    $constitution = $row[0]["constitution"];
    $intelligence = $row[0]["intelligence"];
    $wisdom = $row[0]["wisdom"];
    $charisma = $row[0]["charisma"];
}

?>

<body>
    <fieldset class="outsideFrame">
        <legend>&nbsp;&nbsp;Fiche Personnage&nbsp;&nbsp;</legend>
        <?php
        menu();
        if (!$result) {
            die("query invalide: " . $link->$error);
        }
        ?>
        <div class="insideFrame">
            <div class="categoryFrame1">nom :<?= $row[0]['name'] ?> </div>
            <div class="avatarFrame"> <img style='height:250px; radius:20px;border-radius: 20px;'src="<?= $row[0]["avatar"] ?>" alt=""> </div>
            <div class="categoryFrame2">race : <?= $row[0]["race"] ?></div>
            <div class="categoryFrame2">classe : <?= $row[0]["class"] ?></div>
            <div class="categoryFrame2">title :<?= $row[0]["twitchName"] ?></div>

            <fieldset class="clearfix categoryFrame">
                <legend>&nbsp;&nbsp;Characteristiques :&nbsp;&nbsp;</legend>
                <div class="subCategoryFrame">Force<?= $row[0]["strength"] ?></div>
                <div class="subCategoryFrame">Dextérité<?= $row[0]["dexterity"] ?></div>
                <div class="subCategoryFrame">Constitution<?= $row[0]["constitution"] ?></div>
                <div class="subCategoryFrame">Intelligence<?= $row[0]["intelligence"] ?></div>
                <div class="subCategoryFrame">Sagesse<?= $row[0]["wisdom"] ?></div>
                <div class="subCategoryFrame">Charisme<?= $row[0]["charisma"] ?></div>
            </fieldset>
            <fieldset class="clearfix categoryFrame">
                <legend>&nbsp;&nbsp;Niveau&nbsp;&nbsp;</legend>
                <div class="subCategoryFrame">Xp : <?= $row[0]["xp"] ?></div>
                <div class="subCategoryFrame">Lvl :<?= $row[0]["lvl"] ?></div>
            </fieldset>
            <fieldset class="clearfix categoryFrame">
                <legend>&nbsp;&nbsp;Information :&nbsp;&nbsp;</legend>
                <div class="subCategoryFrame" hidden>#id :<?= $row[0]["id"] ?></div>
                <div class="subCategoryFrame" style="width: 92%;">Nom Twitch :<?= $row[0]["twitchName"] ?></div>
            </fieldset>
        </div>
    </fieldset>
    <footer>

    </footer>
</body>

<script src='js/function.js'>   </script>
<script> eventclickmenudroit(); </script>

</html>