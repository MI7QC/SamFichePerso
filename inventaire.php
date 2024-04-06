<?php
include "function/function.php";

?>
<!DOCTYPE html>
<html lang="en">

<?= head() ?>


<body>
    <fieldset class="outsideFrame">
        <legend>&nbsp;&nbsp;Inventaire&nbsp;&nbsp;</legend>
        <?php
        menu();
        ?>
        <div class="insideFrame">
            <fieldset class="itemWieldFrame">
                <legend>&nbsp;&nbsp;Objets portés&nbsp;&nbsp;</legend>
                <div class="itemWield headWield">Tête</div>
                <div class="itemWield mdWield">Main droite</div>
                <div class="itemWield armureWield">Armure</div>
                <div class="itemWield mgWield">Main gauche</div>
                <div class="itemWield piedsWield">Pieds</div>
                <div class="itemWield collierWield">Collier</div>
                <div class="itemWield anneauWield">Anneau</div>
            </fieldset>
            <fieldset class="inventoryFrame" style="height: 470px;">
                <legend style="text-align: left;padding: 3px">&nbsp;&nbsp;Inventaire&nbsp;&nbsp;</legend>
                <table>
                    <?php
                    
                    for ($invCol = 0; $invCol < 6; $invCol++) {
                        echo "<tr>";
                        for ($invRow = 0; $invRow < 4; $invRow++) {
                            echo '<td class="inventorySlot"></td>';
                        }
                        echo "</tr>";
                    }
                    ?>
                </table>
            </fieldset>
        </div>
    </fieldset>
<footer>

</footer>
</body>
<script src='js/function.js'>   </script>
<script> eventclickmenudroit(); </script>



</html>