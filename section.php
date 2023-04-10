<section class="<?php echo $section_class; ?>">
    <?php 
        foreach ($content as $k => $v) {
            checkTypeOfTag($v['tag'],$v['content']);
        }
        // if(isset($h2)){
        //     $h2_text = $h2["text"];
        //     include("h2.php");
        // }
        // if(isset($div)){
        //     include("div.php");
        // }
        // if(isset($img)){
        //     include("img.php"); 
        // }
    ?>
</section>