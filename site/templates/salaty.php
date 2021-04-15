<?php include 'includes/hlavicka.php' ; ?>
        
    
<?php

$salaty = "<div class='uk-section'>";
$salaty .= "<div class='uk-container'>";
$salaty .= "<div class='uk-grid uk-text-center'>";
foreach($page->children as $p){
$salaty.= "<div class='uk-width-1-3@m uk-width-1-2@s'>";
$salaty .= "<img class='' src='{$p->produkt->size(300,200)->url}' alt='obrazek'>";

$salaty .= "<div class='uk-text-center'>";

$salaty .= "<h3 class='nazvy_salatu'>$p->title</h3>";
$salaty .= "<p class='slozeni_produktu'>{$p->produkt->description}";

$salaty .= "</div>";
$salaty .= "</div>";

}
$salaty .= "</div>";
$salaty .= "</div>";
$salaty .= "</div>";


echo $salaty;





 include 'includes/paticka.php' ?>
   