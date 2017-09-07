<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
	<meta name="Keywords" content="杰德兰设计,杰德兰,Jade Land,设计师,动画设计,品牌搭建,网络营销,互动设计,网页设计,网站设计,活动策划,一站式服务">
	<meta name="description" content="杰德兰是一家跨平台的综合创意产业公司。 我们一直专注于将前沿科技与艺术设计无缝对接，创造出全新的用户体验，给客户提供最全面最贴心的创意服务和解决方案。">
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
	<link href="bower_components/fontawesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!-- <link rel="stylesheet" href="http://fonts.useso.com/css?family=Oswald:400,700" type="text/css"> -->
	<!-- <link href='http://fonts.useso.com/css?family=Exo+2:400,900italic' rel='stylesheet' type='text/css'> -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <link href='http://fonts.useso.com/css?family=Roboto+Slab:100,300' rel='stylesheet' type='text/css'> -->
	<script src="js/google.jquery.min.js"></script>
	<script src="bower_components/i18next/i18next.min.js"></script>
	<script src="bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
	<script src="bower_components/jquery-i18next/jquery-i18next.min.js"></script>
	<script src="js/isotope-docs.min.js" type="text/javascript"></script>
	<script src="js/isotope.js" type="text/javascript"></script>
	<script src="js/jquery.fitvids.js" type="text/javascript"></script>
	<script src="js/jquery.show.hide.js" type="text/javascript"></script>
	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="js/share.buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "9a347916-c8f4-4aa9-9b82-5b21056ab62b", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
	<!--
	<script src="js/slide_in_as_scroll_down.js" type="text/javascript"></script>
	-->
	<script src="js/matchmedia.js"></script>
	<script src="js/picturefill.js"></script>
<!--百度统计-->
	<script>
		var _hmt = _hmt || [];
		(function() {
		  var hm = document.createElement("script");
		  hm.src = "//hm.baidu.com/hm.js?0e415cf949f8a527c0ddad871001c854";
		  var s = document.getElementsByTagName("script")[0]; 
		  s.parentNode.insertBefore(hm, s);
		})();
	</script>
<!--百度统计 end-->
	<script src="js/main.js"></script>
</head>
<body id="body">

	<div class="header">
	<div class="container clearfix">
	
		<div class="wrapper">
		
			<h1 class="logo"><a href="./"><img src="img/logo.gif"/></a></h1>
			<div class="language">
				<a onclick="i18next.changeLanguage('en'); localStorage.setItem('LNG', 'en');">EN </a>/
				<a onclick="i18next.changeLanguage('cn'); localStorage.setItem('LNG', 'cn');">中文</a>
			</div>
			<ul class="nav">
				<li class="home <?php if($section == "home") {echo "on";} ?>"><a href="index.php" data-i18n="header.nav1">Projects</a></li>
				<li class="about <?php if($section == "about") {echo "on";} ?>"><a href="about.php" data-i18n="header.nav2">About</a></li>
				<li class="careers <?php if($section == "careers") {echo "on";} ?>"><a href="careers.php" data-i18n="header.nav3">Careers</a></li>
				<li class="contact <?php if($section == "contact") {echo "on";} ?>"><a href="contact.php" data-i18n="header.nav4">Contact</a></li>
				
			</ul>

		</div>
	</div>
	</div>
<div class="container clearfix">