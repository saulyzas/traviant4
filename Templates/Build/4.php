<h1 class="titleInHeader"><?php echo B4; ?> <span class="level">Level <?php echo $village->resarray['f' . $id]; ?></span></h1>
<div id="build" class="gid4">
    <div class="build_desc">
        <a href="#" onClick="return Travian.Game.iPopup(4,4);" class="build_logo">
            <img class="building big white g4" src="img/x.gif" alt="<?php echo B4; ?>" title="<?php echo B4; ?>" />
        </a>
        <?php echo B4_DESC; ?>
    </div>

    <table cellpadding="1" cellspacing="1" id="build_value">
        <tr>
            <th><?php echo CUR_PROD; ?></th>
            <td><b><?php echo $bid4[$village->resarray['f' . $id]]['prod'] * SPEED; ?></b> <?php echo PER_HR; ?></td>
        </tr>
        <tr>
            <?php
            if (!$building->isMax($village->resarray['f' . $id . 't'], $id)) {
            ?>
        <tr>
            <th><?php echo NEXT_PROD;
                echo $village->resarray['f' . $id] + 1; ?>:</th>
            <td><b><?php echo $bid4[$village->resarray['f' . $id] + 1]['prod'] * SPEED; ?></b> <?php echo PER_HR; ?></td>
        </tr>
    <?php
            }
    ?>
    </tr>
    </table>

    <?php
    include("upgrade.php");
    ?></p>
</div>
