<?php include 'includes/hlavicka.php' ; ?>
        

        <div class="uk-text-center">
        <?php echo "<h3 class='nadpisy'> $page->title</h3>"; ?>
        </div>

<?php
$galerie = "<div class='uk-section uk-section-xsmall'>";
$galerie .= "<div class='uk-container'>";
$galerie .= "<div class='uk-grid uk-text-center'>";
foreach($page->image as $i){
$galerie.= "<div class='uk-width-1-3'>";
$galerie .=" <img class='galery' src='{$i->size(600,500)->url}' alt='obrazek'>";
$galerie .= "</div>";


}
$galerie .= "</div>";
$galerie .= "</div>";
$galerie .= "</div>";


echo $galerie;





 include 'includes/paticka.php' ?>