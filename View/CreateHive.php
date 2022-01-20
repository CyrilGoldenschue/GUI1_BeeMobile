<?php
ob_start();
?>

    <div class="background">
        <div class="background_scrollable">
            <div class="background_hive">
                <?php if (isset($message) and isset($typeMessage)) { ?>
                    <a class="banner_message <?= $typeMessage ?>"><?= $message ?></a>
                <?php } ?>
                <div class="form_area">
                    <a class="form title_day_hive"></a>
                    <div class="form hive_area">
                        <form action="?action=SaveHive" method="post">
                            <input type="hidden" name="hive" value="<?= $stats['hiveid'] ?>">
                            <input type="hidden" name="stat" value="<?= $stats['_id'] ?>">
                            <div class="stat_form_size">
                                <div class="title_note_hive">
                                    <label for="hiveName">Nom de la ruche</label>
                                </div>
                                <input id="hiveName" name="hiveName" class="area_child hive content form" type="text">

                            </div>
                            <input class="button" value="Mettre à jour" type="submit">
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


<?php
$contenu = ob_get_clean();
$footer = "Menu.php";
require "Layout.php";