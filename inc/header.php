<!doctype html>
<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Exo+2:400,900italic' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:100,300' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://isotope.metafizzy.co/js/isotope-docs.min.js" type="text/javascript"></script>
	<script src="js/isotope.js" type="text/javascript"></script>
	<script src="js/slide_in_as_scroll_down.js" type="text/javascript"></script>
	<script src="jquery.fitvids.js"></script>
	<script src="http://smellslikebakin.com/responsive/external/matchmedia.js"></script>
	<script src="http://smellslikebakin.com/responsive/picturefill.js"></script>
	<script src="jquery.fittext.js"></script>
	<script type="text/javascript">
		$("#fittext1").fitText(2.2);
	</script>
	
</head>
<body>

	<div class="header">
	<div class="container clearfix">
		<div class="wrapper">
			<h1 class="branding-title"><a href="./">QiaoGuo</a></h1>
			<ul class="nav">
				<li class="home <?php if($section == "home") {echo "on";} ?>"><a href="index.php">Projects</a></li>
				<li class="about <?php if($section == "about") {echo "on";} ?>"><a href="about.php">About</a></li>
				<li class="careers <?php if($section == "careers") {echo "on";} ?>"><a href="careers.php">Careers</a></li>
				<li class="contact <?php if($section == "contact") {echo "on";} ?>"><a href="contact.php">Contact</a></li>
				
			</ul>

		</div>
	</div>
	</div>
<div class="container clearfix">