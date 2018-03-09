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
        	<div id="content-1">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <?php echo $page->body;?>
                        </div>
                        <div class="col-12 col-md-6">
                            <?php echo $page->section2;?>
                        </div>
                    </div>
                </div>
			</div>
		</main>
		<div class="map-cover">
				<div class="map-absolute" onclick="style.pointerEvents='none'"></div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2456.767729632612!2d-0.17996499999999999!3d51.992886999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xce28f008cd095cbd!2sFluid+Studios+Ltd!5e0!3m2!1sen!2suk!4v1405524844602" width="100%" height="300" frameborder="0" style="border:0"></iframe>
		</div>
		<?php include("./_footer.php");?>
		<?php include("./_scripts.php");?>
		<?php // for an edit link when loggind in add:   if($page->editable()) echo "<p><a href='$page->editURL'>Edit</a></p>"; ?>
	</body>
</html>
