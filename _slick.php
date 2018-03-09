<?php namespace ProcessWire;
/**
 * Given a group of images, render the output html for slick slider
 *
 * @param PageArray $images
 * @return string
 *
 */
 
$banner = $page->banner;

// $images is the array of images, $type is the class name that sets the slick style
function slick($images,$type) {

    // $out is where we store the markup we are creating in this function
    $out = '<section class="slider ' . $type . '">';
	
    // cycle through all the items
    foreach($images as $image) {
        // render markup for each image
			if($image->typeLabel =='image') {
				$out .= "<div><img src='" . $config->urls->files . $image->media->url . "'></div>";
			}
    }
	
	$out .= '</section>';
	
    // return the markup we generated above
    return $out;
}


$slickBanner = slick($banner,"slick-banner");// banner output
$slickGallery = slick($page->gallery,"slick-gallery");// gallery output
$slickSlider = slick($page->slider,"slick-slider");// slider output

