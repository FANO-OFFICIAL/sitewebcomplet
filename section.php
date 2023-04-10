<section class="<?php echo $content["class"]; ?>">
    <?php 
        foreach ($content["content"] as $k => $v) {
            checkTypeOfTag($v['tag'],$v['content']);
        }
    ?>
</section>