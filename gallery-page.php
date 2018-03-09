<!DOCTYPE html>
<html lang="en-GB">
	<head>
		<?php include("./_func.php");?>
		<?php include("./_head.php");?>
		<link rel="stylesheet" href="<?php echo $config->urls->templates?>styles/unite-gallery.min.css">
		<link rel="stylesheet" href="<?php echo $config->urls->templates?>styles/ug-theme-default.css">
	</head>
	<body>
		<?php include("./_header.php");?>
		<div id="banner-wrap">
		<?php include("./_slick.php");
			echo $slickBanner;?>
            <div class="banner-text-wrap">
                <div class="banner-text">
                    <?php echo $page->BannerText;?>
                </div>
            </div>
		</div>
		<main class="container-fluid">
			<?php echo $page->body;?>
			<div class="container-fluid text-center">
				<?php include("./_unite.php");
			echo $uniteGallery;?>
			</div>
			<?php echo $page->section2;?>
		</main>
		<?php include("./_footer.php");?>
		<?php include("./_scripts.php");?>
		<script src="<?php echo $config->urls->templates?>scripts/unitegallery.min.js"></script>
		<script src="<?php echo $config->urls->templates?>scripts/ug-theme-default.js"></script>
		<script>jQuery("#gallery").unitegallery();</script>
		<?php // for an edit link when loggind in add:   if($page->editable()) echo "<p><a href='$page->editURL'>Edit</a></p>"; ?>
	</body>
</html>
