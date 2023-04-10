<?php
foreach ($url_stylesheet as $url) {
    ?>
    <link href="<?php echo $url; ?>" rel="stylesheet" />
    <?php
}
?>
<?php
if($google_fonts){
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="<?php echo $google_fonts; ?>" rel="stylesheet">
<?php
}
?>

