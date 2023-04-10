<?php
foreach ($a_href as $k => $v) {
    if(is_array($v)){
?>
<a target="<?php if(isset($v["target"])){echo $v["target"];} ?>" href="<?php echo $k; ?>" class="<?php if(isset($v["class"])){echo $v["class"];} ?>">
    <?php
    if(isset($v["img_src"])){
        $img_src = $v["img_src"];
        $img_alt = $v["img_alt"];
        include("img.php");
    } 
    ?> 
    <?php 
    echo $v["text"];
    ?>
</a>
<?php
    }else{
    ?>
<a href="<?php echo $k; ?>">
    <?php 
    echo $v;
    ?>
</a>
    <?php
    }
}
?>
