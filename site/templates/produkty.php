<?php
    include 'includes/hlavicka.php';

$produkty = "<div class='uk-section'>";
$produkty .= "<div class='uk-container'>";
$produkty .= "<div class='uk-grid uk-text-center'>";
foreach($page->children as $ch){
$produkty.= "<div class='uk-width-1-3'>";
$produkty .= "<div class=' uk-animation-toggle tabindex='0' >";
$produkty .= "<a class='' href='$ch->url'><img class='zaklad_produkt uk-animation-fade' src='{$ch->produkt->size(250,250)->url}' alt='obrazek'></a>";

$produkty .= "<div class=' uk-flex uk-flex-center'>";
$produkty .= "<a class='zruseni' href='$ch->url'><h6 class='nazvy_produktu'>{$ch->produkt->description}</h6></a>";
$produkty .= "</div>";
$produkty .= "</div>";
$produkty .= "</div>";

}
$produkty .= "</div>";
$produkty .= "</div>";
$produkty .= "</div>";




echo $produkty;
 include 'includes/paticka.php'

            ?>
 