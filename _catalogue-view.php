<?php
// check the template being used and show either categories or products
$products = "";
$categories = "";


if ($page->template->name == "catalogue") {
	$categories = $pages->find("has_parent=$page->path, template=category");
	foreach ($categories as $c){
		// in line styles need removing, just for example
       echo '<div class="col-4 col-xs-12 text-center catalogue-category" ><a style="display:block; line-height:100px; font-size:30px; background:#fff; margin:20px auto;" href="' . $c->url . '">' . $c->title . '</a></div>';
    }
} elseif ($page->template->name == "category") {
	$products = $pages->find("has_parent=$page->path, template=product");
    foreach ($products as $p){
		// load thumbnail as the media manager returns any images as an array, even though this field has been set up to only accept 1 image
		$thumbnailUrl  = "";
		$images = $p->thumbnail; // get array
		foreach($images as $image) { // search array
				$thumbnailUrl = $image->media->url;  
		}
		// in line styles need removing, just for example
       echo '<div class="col-4 col-xs-12 text-center catalogue-product"><a style="display:block; line-height:40px; font-size:20px; background:#fff; margin:20px auto;" href="' . $p->url . '"><img src="' . $thumbnailUrl . '" alt="' . $p->title . '"><br>' . $p->title . '</a></div>';
    }
}

?>