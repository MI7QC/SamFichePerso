<?php
include "function/function.php";

?>
<!DOCTYPE html>
<html lang="en">

<?= head() ?>


<body>
    <fieldset class="outsideFrame">
        <legend>&nbsp;&nbsp;Succès&nbsp;&nbsp;</legend>
        <?php
        menu();
        ?>
        <div class="insideFrame">
            <fieldset class="itemWieldFrame">
                <legend>&nbsp;&nbsp;Informations :&nbsp;&nbsp;</legend>
            </fieldset>
            <fieldset class="inventoryFrame">
                <legend style="text-align: left;">&nbsp;&nbsp;Succès&nbsp;&nbsp;</legend>
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