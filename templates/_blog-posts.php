<?php
// 

/**
* Create a feed of latest blog posts with previews
*/

echo '<div class="row blog-previews" >';

// load blog posts
// set allowed blog templates, order and max number of posts to load here (10)
	$posts =  $pages->find("template=blog-post, sort=-post_date, limit=10, check_access=0");  
	
	// loop through the posts
	foreach ($posts as $p){
		echo '<div class="col-4 col-xs-12 blog-preview" >';
		echo '	<a href="' . $p->url . '">';
		
		// thumbnail is returned as an array, so cycle through it even though there is only 1 item
		foreach($p->blog_thumbnail as $image) {
			echo '		<img src="' . $image->media->url . '" alt="' . $p->title . '">';
		}
		echo '		<h2>' . $p->title . '</h2>';
		echo '		<div>' . $p->subTitle . '</div>';
		echo '	</a>';
		echo '</div>';
    }
echo '</div>';
?>