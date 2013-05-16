<?php
// Where the site is hosted?
$url		= "http://localhost/skeleton/";

// Where the visitor is?
$category	= (isset($_GET["cat"]) ? $_GET["cat"] : null);

// Get title and file for every sections
if( empty( $category ) || $category == "index" ){
	$where = "home";
	$title = null;
}elseif( $category == "portfolio" ){
	$where = "portfolio";
	$title = "Portfolio - ";
}elseif( $category == "contact" ){
	$where = "contact";
	$title = "Contact - ";
}

// Now we have the title, we can load the header
include( "bin/header.php" );

// Also we have the file name, so we can load the section
include( "bin/sections/$where.html" );

// And.. the end...
include( "bin/footer.php" );
?>