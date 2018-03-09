<?php namespace ProcessWire;
/**
 * Given a group of images, reder the output html for slick slider
 *
 * @param PageArray $images
 * @return string
 *
 */
function slick($images,$type) {
    // $out is where we store the markup we are creating in this function
    $out = '<section class="slider ' . $type . '">';
	$count = 0;
    // cycle through all the items
    foreach($images as $image) {
        // render markup for each image
			$count ++;
            $out .= "<div><img src='$image->url'></div>";
    }
	$out .= '</section>';
    // return the markup we generated above
    if ($count>0) {
		return $out;
	} else {
		return "";
	}
}



$slickBanner = slick($page->banner,"slick-banner");// banner output
$slickGallery = slick($page->gallery,"slick-gallery");// banner output
$slickSlider = slick($page->slider,"slick-slider");// banner output

