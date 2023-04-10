<div>
    <?php
        foreach ($content as $k => $v) {
            checkTypeOfTag($v['tag'],$v['content']);
        }
    ?>
</div>