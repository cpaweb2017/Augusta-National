<?php namespace ProcessWire;

/**
 * Blog Demo main markup include
 * Demo template file include
 *
 */
    //nav
    $topNavItems = array();

    /*
        we need to get topNav items by their templates in order to adapt to different blog styles (1-4)
        of course, in your blog install, you would use a different method since you would know the blog style you selected!
    */
    $templates = array('blog-categories','blog-tags', 'blog-comments', 'blog-authors', 'blog-archives');

    foreach ($templates as $t) {

        $p = $pages->get("template=$t");
        if($p->id)  $topNavItems[] = $p;

    }

    $topNav = $blog->renderNav('', $topNavItems, $page);


?>

<!DOCTYPE html>
<html lang="en-GB">
	<head>
		<?php include("./_func.php");?>
		<?php include("./_head.php");?>
		<link rel="stylesheet" href="<?php echo $config->urls->templates?>styles/unite-gallery.min.css">
		<link rel="stylesheet" href="<?php echo $config->urls->templates?>styles/ug-theme-default.css">
		<link rel="stylesheet" href="<?php echo $config->urls->templates?>styles/blog.css">
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
			<div class="container" id="wrapper">
				<div class="row">
					
					<? /* REMOVE THIS LINE TO USE BLOG NAVIGATION BAR
		
						<div id ="nav" class="block"><!-- #nav -->
							<div id="top-nav"><?php echo $topNav;?></div><!-- #top-nav -->

							<?php

								$noSubNav = array('blog-comments','blog-posts', 'blog-tag', 'blog-tags');

								if (!in_array($page->template->name, $noSubNav)) {

									  //subnav only on certain pages and if not empty
									  if(!empty($subNav)) echo '<div id="sub-nav">' . $subNav  . '</div><!-- #sub-nav -->';
								}

							?>
							

						</div>
					
					REMOVE THIS LINE TO USE BLOG NAVIGATION BAR */ ?>


					<div class="col-12 col-md-9 <?php echo $noAuthor?>" id="main">
						<?php
								//if 'post author widget' is disabled, we want to style the end of the post using the css class 'no-author' (see further below in CENTRE COLUMN output)
								//only applies to 'blog-post' pages
								$noAuthor = $pages->get('template=blog-widget-basic, name=post-author, include=all')->is(Page::statusUnpublished) ? ' no-author' : '';
								echo $content;
						 ?>
					</div>
					<div class="col-12 col-md-3" id="sidebar">
						<?php include_once("_blog-side-bar.php"); ?>
						<a href="archives/">View older posts</a>
						<?php
						/*  Add any of the below if needed for this blog
						<a href="categories/">View categories</a>
						<a href="tags/">View tags</a>
						<a href="comments/">View comments</a>
						<a href="authors/">View authors</a>
						*/
						?>
					</div>

				</div>
			</div>
		</div>
	
	</main>
		<?php include("./_footer.php");?>
		<?php include("./_scripts.php");?>
		<script src="<?php echo $config->urls->templates?>scripts/unitegallery.min.js"></script>
		<script src="<?php echo $config->urls->templates?>scripts/ug-theme-default.js"></script>
		<script src="<?php echo $config->urls->templates;?>scripts/blog.js"></script>
		<script>jQuery("#gallery").unitegallery();</script>
		<?php // for an edit link when loggind in add:   if($page->editable()) echo "<p><a href='$page->editURL'>Edit</a></p>"; ?>
	</body>
</html>