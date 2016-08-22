<?php 
	$time = microtime();
	$time = explode(' ', $time);
	$time = $time[1] + $time[0];
	$start = $time;
?>

<!DOCTYPE html>
<html>
<head>
	
	<title><?php echo $config['site_title']; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="website description" />
  	<meta name="keywords" content="website keywords, website keywords" />
	<link href="layout/style/style.css" rel="stylesheet" type="text/css" />
	<link href="layout/style/styleAdapt.css" rel="stylesheet" type="text/css" />
	<link href="layout/style/basic.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=MedievalSharp" rel="stylesheet">
	<link rel="icon" type="image/icon.ico" href="images/icon.ico" />
	<!--[if IE 6]><link rel="stylesheet" href="layout/style/ie.css" type="text/css" media="screen, projection"><![endif]--> <!--[if IE 7]><link rel="stylesheet" href="layout/style/ie.css" type="text/css" media="screen, projection"><![endif]-->
</head>
<body>
	<div class="container">
		<div class="navbar_top"></div>
		<div class="navbar_mid">
		<ul>
			<li><a href="index.php" class="link1">HOME</a></li>
			<li><a href="downloads.php" class="link2" id="navbar_mid_border">DOWNLOADS</a></li>
			<li><a href="shop.php" class="link3" id="navbar_mid_border">SHOP</a></li>
			<li><a href="guilds.php" class="link4" id="navbar_mid_border">GUILDS</a></li>
			<li><a href="onlinelist.php" class="link5" id="navbar_mid_border">WHO IS ONLINE?</a></li>
			<li><a href="serverinfo.php" class="link6" id="navbar_mid_border">SERVER INFO</a></li>
			<li><a href="maps.php" class="link6" id="navbar_mid_border">MAPS</a></li>
			<li><a href="library.php" class="link6" id="navbar_mid_border">LIBRARY</a></li>
			<li class="nav_searchParent">
				<form type="submit" action="characterprofile.php" method="get" >
					<input type="text" name="name" class="nav_search" placeholder="Find player..."/>
					<input type="submit" name="Submit" class="nav_search_btn" value=""/>
				</form>
			</li>
		</ul>
		</div>
		<div class="navbar_bot"></div>
		
		
		<div class="container_cnt">
			<!--<div class="container_left">
				<div class="top"></div>
				<div class="mid">
					<?php //include 'layout/leftmenu.php'; ?>
				</div>
				<div class="bot"></div>
			</div>-->
			<div class="container_mid">