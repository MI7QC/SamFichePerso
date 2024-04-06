<?php
include "function/function.php";

?>
<!DOCTYPE html>
<html lang="en">

<?= head() ?>

<body>
    <fieldset class="outsideFrame">
        <legend>&nbsp;&nbsp;Quêtes&nbsp;&nbsp;</legend>
        <?php
        menu();
        ?>
        <div class="insideFrame">
            <fieldset class="itemWieldFrame">
                <legend>&nbsp;&nbsp;Informations :&nbsp;&nbsp;</legend>
            </fieldset>
            <fieldset class="inventoryFrame" style="height: 446px;">
                <legend style="text-align: left;">&nbsp;&nbsp;Quêtes :&nbsp;&nbsp;</legend>
            </fieldset>
        </div>
    </fieldset>
<footer>

</footer>
</body>
<script src='js/function.js'>   </script>
<script> eventclickmenudroit(); </script>



</html>