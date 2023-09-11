<!-- Default-JavaScript-File -->
<script type="text/javascript" src="<?php echo $this->URL; ?>js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->URL; ?>js/bootstrap.js"></script>
<!-- //Default-JavaScript-File -->
	
<!-- clients js file-->
	<script src="<?php echo $this->URL; ?>js/jquery.wmuSlider.js"></script> 
		<script>
			$('.example1').wmuSlider();         
		</script> 
<!-- //clients js file -->

<!-- Jarallax -->
<script src="<?php echo $this->URL; ?>js/jarallax.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
<!-- //Jarallax -->

<!-- smooth scrolling -->
	<script src="<?php echo $this->URL; ?>js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->URL; ?>js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo $this->URL; ?>js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- smooth scrolling -->

</body>
<!-- //Body -->
</html>