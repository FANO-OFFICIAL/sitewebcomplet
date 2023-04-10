<?php
foreach ($a_href as $k => $v) {
    if(is_array($v)){
?>
<a href="<?php echo $k; ?>" class="lien-icone">
    <?php
    if($v["img_src"]){
        $img_src = $v["img_src"];
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
<a href="<?php echo $k; ?>" class="lien-icone">
    <?php 
    echo $v;
    ?>
</a>
    <?php
    }
}
?>
