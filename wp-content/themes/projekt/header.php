<!doctype html>
<html lang="pl-PL">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Chcesz wiedzieć co zrobić by ruszyć z miejsca, potrzebujesz informacji na temat jakiś tam">
	<meta name="keywords" content="rozwój, edukacja, zdrowie, finnase">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="google-site-verification" content="S827nZBxLJkwFknYwyFsLf2lIWt7QUKD5xUkv05RAkg" />
	<title>
		<?php	echo	get_bloginfo('name');	?>
	</title>
	<?php wp_head(); ?>

</head>
<body>
<script>
	window.fbAsyncInit = function() {
		FB.init({
			appId      : '371157706664585',
			xfbml      : true,
			version    : 'v2.11'
		});
		FB.AppEvents.logPageView();
	};

	(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement(s); js.id = id;
		js.src = "https://connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>

<header id="leftMenu">
	<div class="nav-toggle">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<section class="container">

		<?php wp_nav_menu(['menu' => 'leftmenu']); ?>

	</section>

</header>
<div class="space"></div>


