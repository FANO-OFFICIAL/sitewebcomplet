<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
    <head>
        <?php
            include("meta.php");
            include("link.php");
            include("style.php");
            include("title.php");
        ?>
    </head>
    <body>
        <?php
            foreach ($body as $k => $v) {
                checkTypeOfTag($v['tag'],$v['content']);
            }
        ?>
        <?php
            include("script.php");
        ?>
    </body>
</html>