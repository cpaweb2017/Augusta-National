<!DOCTYPE html>
<html lang="en-GB">
	<head>
		<?php include("./_func.php");?>
		<?php include("./_head.php");?>
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
		<main>			
		<?php echo $page->body;?>
		<div id="content2">
			<div class="container">
				<div class="row">
				<?php include("./_catalogue-view.php");?>
				</div>
			</div>
		</div>
		</main>
		<?php include("./_footer.php");?>
		
		<?php include("./_scripts.php");?>
		<?php // for an edit link when loggind in add:   if($page->editable()) echo "<p><a href='$page->editURL'>Edit</a></p>"; ?>
	</body>
</html>
