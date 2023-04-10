<a href="<?php echo $content["href"]; ?>" target="<?php echo $content["target"]; ?>" class="<?php echo $content["class"]; ?>">
    <?php
        if(!empty($content["content"])){
            foreach ($content["content"] as $k => $v) {
                checkTypeOfTag($v['tag'],$v['content']);
            }
        }
    ?>
    <?php 
        echo $content["text"]; 
    ?>
</a>