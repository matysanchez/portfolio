<?php
date_default_timezone_set('America/Buenos_Aires');
// Where the site is hosted?
$url		= "http://www.matysanchez.com/";

// Where the visitor is?
$category	= (isset($_GET["cat"]) ? $_GET["cat"] : null);

// Default URL - This is to avoid any security problem when we include $where.html
$where      = "home";

// Analytics?
$analytics  = false;

// This is for the link on the header.
$navBar     = array(
    array("Portfolio",  "portfolio"),
    array("Resume",     "resume"),
    array("Contact",    "contact")
);

// Get title and file for every sections
switch ($category):
    case "portfolio":
        $where = "portfolio";
        $title = "Portfolio - ";
        break;
    case "contact":
        $where = "contact";
        $title = "Contact - ";
        break;
    case "resume":
        $where = "resume";
        break;
    default;
        $where = "home";
        $title = null;
endswitch;

// Now we have the title, we can load the header
include( "bin/header.php" );

// Also we have the file name, so we can load the section
if ($where == "resume") {
    header('Location: https://github.com/matysanchez/portfolio/blob/master/bin/resume.pdf?raw=true');
    die();
} else {
    include( "bin/sections/$where.html" );
}

// And.. the end...
include( "bin/footer.php" );

?>