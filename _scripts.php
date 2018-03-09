		<?php // version number set in _head.php ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script>
		   window.jQuery || document.write('<script src="<?php echo $config->urls->templates?>scripts/jquery.min.js?v=<?php echo $jsVersion; ?>"><\/script>');
		</script>
		
		<script src="<?php echo $config->urls->templates?>scripts/popper.min.js?v=<?php echo $jsVersion; ?>"></script>
		<script src="<?php echo $config->urls->templates?>scripts/bootstrap.min.js?v=<?php echo $jsVersion; ?>"></script>
		<script src="<?php echo $config->urls->templates?>scripts/jquery.waitforimages.js?v=<?php echo $jsVersion; ?>"></script>
		<script src="<?php echo $config->urls->templates?>scripts/slick.min.js?v=<?php echo $jsVersion; ?>"></script>
		<script src="<?php echo $config->urls->templates?>scripts/slick.fluid.js?v=<?php echo $jsVersion; ?>"></script>
		<script src="<?php echo $config->urls->templates?>scripts/jssocials.min.js?v=<?php echo $jsVersion; ?>"></script>
		<script>
        $("#share").jsSocials({
			showLabel: false,
			showCount: false,
            shares: ["twitter", "facebook", "googleplus", "linkedin", "pinterest", "whatsapp"]
        });
		</script>
		<script src="<?php echo $config->urls->templates?>scripts/main.js?v=<?php echo $jsVersion; ?>"></script>
		