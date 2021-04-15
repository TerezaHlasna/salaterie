<?php include(\ProcessWire\wire('files')->compile('includes/hlavicka.php' ,array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));  ?>      


<?php
$smoothie = "<div class='uk-section uk.section-xsmall'>";
$smoothie .= "<div class='uk-container'>";
$smoothie .= "<div class='uk-grid uk-text-center'>";
foreach($page->children as $s){
$smoothie.= "<div class='uk-width-1-3'>";
$smoothie .=" <img class='' src='{$s->produkt->size(300,200)->url}' alt='obrazek'>";

$smoothie .= "<div class=' uk-text-center'>";

$smoothie .= "<h2 class='nazvy_salatu'>$s->title</h2>";
$smoothie .= "<p class='slozeni_produktu'>{$s->produkt->description}";

$smoothie .= "</div>";
$smoothie .= "</div>";

}
$smoothie .= "</div>";
$smoothie .= "</div>";
$smoothie .= "</div>";


echo $smoothie;





 include 'includes/paticka.php' ?>
   