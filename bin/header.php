<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?=$title?>Matías Sanchez</title>
	<meta name="description" content="Matías Sanchez is a frontend web developer from Argentina, who loves javascript such as traveling.">
	<meta name="author" content="Matías Sanchez">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="<?=$url?>stylesheets/base.css">
	<link rel="stylesheet" href="<?=$url?>stylesheets/skeleton.css">
	<link rel="stylesheet" href="<?=$url?>stylesheets/layout.css">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="<?=$url?>images/favicon.ico">
	<link rel="apple-touch-icon" href="<?=$url?>images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="57x57" href="<?=$url?>images/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?=$url?>images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?=$url?>images/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?=$url?>images/apple-touch-icon-144x144.png">
	<?php
	if($analytics){
		echo "	<script type=\"text/javascript\">\n";
		echo "	var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-34011238-1']); _gaq.push(['_trackPageview']);\n";
		echo "	(function() {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;\n";
		echo "	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';\n";
		echo "	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();\n";
		echo "	</script>\n";
		echo "	}\n";
	}
	?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
<header>
	<div class="container">
		<div class="five columns">
			<h1><a href="<?=$url?>" class="logo" title="Matías Sanchez">Matías Sanchez</a></h1>
		</div>
		<div class="eleven columns">
			<?php
			foreach ($navBar as $i => $row){
				echo '			<a href="'.$url.$row[1].'" title="'.$row[0].'">'.$row[0]."</a>\n";
			}
			?>
		</div>
	</div>
</header>