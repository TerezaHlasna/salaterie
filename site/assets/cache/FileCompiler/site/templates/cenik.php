
<?php 
 include(\ProcessWire\wire('files')->compile('includes/hlavicka.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>

<div class="uk-text-center">
<?php echo "<h3 class='nadpisy'> $page->title</h3>"; 
echo "<p class='text_cenik'>$page->obsah</p>";
?>

</div>

<?php
$cenik = "<div class='uk-section uk-section-small'>";
$cenik .= "<div class='uk-container uk-container-small'>";

$cenik .= "<div class='uk-child-width-1-3@m 1-2@s' uk-grid uk-height-match='target: .uk-card '>";

foreach($page->children as $c){
$cenik .= "<div>";
$cenik .= " <div class='uk-card uk-card-default'>";
$cenik .= "<div class='uk-card-media-top'>";
$cenik .= " <img src='{$c->produkt->url}' alt='obrazek'>";
$cenik .= "</div>";
$cenik .= "<div class='uk-card-body'>";
$cenik .= "<h3 class='nazev_salatu_menu uk-card-title uk-text-center'>$c->title</h3>";
$cenik .= "<p class='obsah_salatu uk-text-center'>{$c->slozeni}";
$cenik .= "<p class='cena uk-text-center'>{$c->cena}";
$cenik .= "</div>";
$cenik .= "</div>";
$cenik .= "</div>";


}
$cenik .= "</div>";
$cenik .= "</div>";
$cenik .= "</div>";


echo $cenik;


 include(\ProcessWire\wire('files')->compile('includes/paticka.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));
  ?>
