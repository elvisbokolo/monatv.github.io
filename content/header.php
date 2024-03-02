<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Atlantis Lite - Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?= $assets ?>/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="<?= $assets ?>/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?= $assets ?>/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= $assets ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= $assets ?>/pro/atlantis.css">
	<link rel="stylesheet" href="<?= $assets ?>/css/atlantis.min.css">
	<link href="https://vjs.zencdn.net/8.9.0/video-js.css" rel="stylesheet" />

	<link rel="stylesheet" href="<?= $assets ?>/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= $assets ?>/owlcarousel/assets/owl.theme.default.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?= $assets ?>/css/demo.css">
</head>