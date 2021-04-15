<?php include(\ProcessWire\wire('files')->compile('includes/hlavicka.php' ,array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));
        
        ?>
    
<?php



$limonady = "<div class='uk-section'>";
$limonady .= "<div class='uk-container'>";
$limonady .= "<div class='uk-grid uk-text-center'>";
foreach($page->children as $l){
$limonady.= "<div class='uk-width-1-3'>";
$limonady .=" <img class='' src='{$l->produkt->size(300,200)->url}' alt='obrazek'>";

$limonady .= "<div class='uk-text-center'>";

$limonady .= "<h3 class='nazvy_salatu'>$l->title</h3>";
$limonady .= "<p class='slozeni_produktu'>{$l->produkt->description}";

$limonady .= "</div>";
$limonady .= "</div>";

}
$limonady .= "</div>";
$limonady .= "</div>";
$limonady .= "</div>";


echo $limonady;





 include 'includes/paticka.php' ?>
   