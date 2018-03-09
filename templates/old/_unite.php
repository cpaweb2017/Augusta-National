<?php namespace ProcessWire;
/**
 * Given a group of images, render the output html for unite gallery
 *
 * @param PageArray $images
 * @return string
 *
 */
function unite($images) {
    // $out is where we store the markup we are creating in this function
    $out = '<div id="gallery" class="mx-auto" style="display:none;">';
	$count = 0;
    // cycle through all the items
    foreach($images as $image) {
        // render markup for each image
			$count ++;
            $out .= '<img alt="image" src="'.$image->url.'" data-image="'.$image->url.'" data-description="Preview Image 1 Description">';
    }
	$out .= '</section>';
    // return the markup we generated above
    if ($count>0) {
		return $out;
	} else {
		return "";
	}
}
$uniteGallery = unite($page->gallery);// gallery output
