<?php include(\ProcessWire\wire('files')->compile('includes/hlavicka.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)))?>

	 <div class="uk-section uk-section-small">
<div class="uk-text-center">
        <?php echo "<h3 class='uvitani'> $page->nadpis</h3>"; ?>
		</div>
		</div>
		
<?php
$obrazek = "<div class='uk-section uk-section-xsmall blog1 posunuti'>";
$obrazek .= "<div class='uk-container'>";
$obrazek .= "<div class='uk-grid uk-text-center'>";
foreach ($page->obrazky_produktu as $o) {

	$obrazek .=  "<div class='uk-width-1-2'>";
	$obrazek .= "<img class='upoutavka_obrazky' src='{$o->size(400, 300)->url}' alt=''>";
	$obrazek .= "</div>";

	$obrazek .= "<div class='uk-width-1-2'>";
	$obrazek .= "<div class='odsazeni'>";
	$obrazek .= "<p class='text'>{$o->description}</p><p class='podtext1'>Správny poměr bílkovin, sacharidů a tuků.</p>";
	$obrazek .= "</div>";
	$obrazek .= "</div>";
}
$obrazek .= "</div>";
$obrazek .= "</div>";
$obrazek .= "</div>";


$obrazek2 = "<div class='uk-section uk-section-small blog2'>";
$obrazek2 .= "<div class='uk-container'>";
$obrazek2 .= "<div class='uk-grid uk-text-center'>";
foreach ($page->image as $p) {

	$obrazek2 .=  "<div class='uk-width-1-2'>";
	$obrazek2 .= "<p class='text2'>{$p->description}</p><p class='podtext2'>Zdravá vitamínová bomba v každé limonádě.</p>";
	$obrazek2 .= "</div>";

	$obrazek2 .= "<div class='uk-width-1-2'>";
	$obrazek2 .= "<div class='odsazeni'>";

	$obrazek2 .= "<img class='upoutavka_obrazky' src='{$p->size(400, 300)->url}' alt=''>";
	$obrazek2 .= "</div>";
	$obrazek2 .= "</div>";
}
$obrazek2 .= "</div>";
$obrazek2 .= "</div>";
$obrazek2 .= "</div>";

$obrazek3 = "<div class='uk-section-xsmall blog1'>";
$obrazek3 .= "<div class='uk-container'>";
$obrazek3 .= "<div class='uk-grid uk-text-center'>";
foreach ($page->image2 as $r) {

	$obrazek3 .=  "<div class='uk-width-1-2'>";
	$obrazek3 .= "<img class='upoutavka_obrazky' src='{$r->size(400, 300)->url}' alt=''>";
	$obrazek3 .= "</div>";

	$obrazek3 .= "<div class='uk-width-1-2'>";
	$obrazek3 .= "<div class='odsazeni'>";
	$obrazek3 .= "<p class='text'>{$r->description}</p><p class='podtext1'>Smoothie z BIO ovoce zahřeje tě u srdce</p>";
	$obrazek3 .= "</div>";
	$obrazek3 .= "</div>";
}
$obrazek3 .= "</div>";
$obrazek3 .= "</div>";
$obrazek3 .= "</div>";
?>
<?php echo $obrazek ?>
<?php echo $obrazek2 ?>
<?php echo $obrazek3 ?>



<div class="uk-section uk-section-small barva">
	<div class="uk-container uk-container-small">
		<div class="uk-grid">
			<div class="uk-width-1-3 posun">
<h3 class='rychlokontakt_nazev'>Otevírací doba</h3>
<p>
	
<strong class='rychlokontakt_podnadpis'>Sobota - Neděle</strong>
<br>
	10:00 - 20:00
</p>
<p>
	<strong class='rychlokontakt_podnadpis'>Sobota - Neděle</strong>
	<br>
	9:00 - 20:00
</p>

			</div>
			<div class="uk-width-1-3">
			<h3 class='rychlokontakt_nazev'>Kde nás najdete</h3>
<p >
<strong class='rychlokontakt_podnadpis'>Adresa saláterie</strong>
	<br>
	Nádražní 681/2a
	
	<br>
	Brno-střed
	<br>
	602 00
	<br>
</p>


			</div>
			<div class="uk-width-1-3">
			
			<h3 class='rychlokontakt_nazev'>Kontaktujte nás</h3>
<p>
	
	<strong class='rychlokontakt_podnadpis'>Telefon</strong>
	<br>
	678 574 864
	<br>
	<br>
	<strong class='rychlokontakt_podnadpis'>E-mail</strong>
	<br>
	
tessalat@gmail.com
	<br>
</p>

			</div>
		</div>
	</div>
</div>







<div class="uk-section uk-section-xsmall paticka_homepage">
<div class="uk-container">
<div class="uk-flex uk-flex-center">
<h5 class="text_paticky"> Copyright 2020 
     Tereza Hlásna</h5>
</div>
</div>

	</div>
	
	
	</body>
</html>