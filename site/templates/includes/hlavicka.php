<?php 
$homepage = $pages->get(1);
// Do proměnné stranky si uložím všechny viditelné stránky na webu
$stranky = $homepage->children->prepend($homepage);
// kód pro menu
$menu = "<div class='menu-pozadi'>";
$menu .= "<div class='uk-container uk-container-xsmall'>";
$menu .= "<nav uk-navbar>";
$menu .= "<div class='uk-navbar-left'>";
$menu .= "<ul class='uk-navbar-nav'>";
// Smyčka, která mi projde stránky a uloží do menu
foreach($stranky as $polozka){
   if ($page->id == $polozka->id){
   $menu .="<li class='uk-active polozka_menu '><a href ='$polozka->url'>$polozka->title</a></li>";
   } else {
       $menu .="<li><a href ='$polozka->url'>$polozka->title</a></li>";
   }
};
$menu .= "</ul>";
$menu .= "</div>";
$menu .= "</nav>";
$menu .= "</div>";
$menu .= "</div>";


$slider = "";
foreach($page->obrazky as $o ){
$slider .= "<li>";
$slider .= "<img class='slider' src='{$o->url}' alt='slider' uk-cover>";
$slider .= "</li>";
};




?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php echo $page->title; ?></title>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/css/uikit.min.css"/>
	
		<link rel="stylesheet" href='<?php echo $config->urls->templates; ?>styles/main.css?<?php echo time(); ?>'/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit-icons.min.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bitter&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
	</head>
	<body>
		<div class='uk-flex uk-flex-center'>
	<?php echo "<img class='logo' src='{$page->logo->url}' alt='obrazek' ?>"; ?>
	</div>
        <?php echo $menu;?>
		
	
		<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 7:3; animation: push; autoplay: true">

    <ul class="uk-slideshow-items">
       <?php echo $slider; ?>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>