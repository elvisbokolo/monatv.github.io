	<!--   Core JS Files   -->
	<script src="<?= $assets ?>/js/core/jquery.3.2.1.min.js"></script>
	<script src="<?= $assets ?>/js/core/popper.min.js"></script>
	<script src="<?= $assets ?>/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="<?= $assets ?>/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="<?= $assets ?>/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="<?= $assets ?>/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="<?= $assets ?>/js/plugin/chart.js/chart.min.js"></script>
	<script src="<?= $assets ?>/owlcarousel/owl.carousel.js"></script>

	<!-- jQuery Sparkline -->
	<script src="<?= $assets ?>/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="<?= $assets ?>/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="<?= $assets ?>/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="<?= $assets ?>/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="<?= $assets ?>/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?= $assets ?>/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="<?= $assets ?>/js/plugin/sweetalert/sweetalert.min.js"></script>
    <script defer src="https://vjs.zencdn.net/8.9.0/video.min.js"></script>

	<!-- Atlantis JS -->
	<script src="<?= $assets ?>/js/atlantis.min.js"></script>
  	<script>
		$(document).ready(function() {
			$('#owl-demo').owlCarousel({
				loop:true,
				margin:10,
				autoplay: 300000,
				nav:false,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:3
					},
					1000:{
						items:4
					}
				}
			})

			$("#owl-demo2").owlCarousel({

				nav:true, // Show next and prev buttons
				autoplaySpeed:15000,
				navSpeed:4000,
				items:1

			});

			$('#owl-demo3').owlCarousel({
				center: false,
				items:2,
				margin:10,
				responsive:{
					600:{
						items:2
					}
				}
			});

			$('#owl-demo5').owlCarousel({
				center: false,
				items:2,
				margin:10,
				responsive:{
					600:{
						items:2
					}
				}
			});

			$('#owl-demo6').owlCarousel({
				center: false,
				items:2,
				margin:10,
				responsive:{
					600:{
						items:2
					}
				}
			});

			$('#owl-demo4').owlCarousel({
				margin:10,
				loop:false,
				autoWidth:true,
				items: 4
			})
		});
	</script>