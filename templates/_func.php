<?php namespace ProcessWire;
/**
 * Bootstrap nav renderer by Alan Trojanowski
 *
 * @param PageArray $items
 * @return string
 *
 */
function renderNav(PageArray $items) {
    // $out is where we store the markup we are creating in this function
    $out = '';
    // cycle through all the menu items
    foreach($items as $item) {
        // render markup for each navigation item
		// check if menu and if it has any sub pages (for a page to be a menu, it must have its template set as submenu)
		if($item->template == "submenu" && $item->hasChildren()) {
			//render sub menu ul
			$out .= '<li class="nav-item dropdown">';
			$out .= '<a class="nav-link dropdown-toggle" href="#" id="navbar-$item->title" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
			$out .= $item->title . '</a>';
			$out .= '<div class="dropdown-menu" aria-labelledby="navbar-$item->title">';
			$out .= renderSubNav($item->children());
			$out .= '</div></li>';
		} else {
			$parent = $item->parent();
			//ignore sub pages 
			if($parent->template != "submenu") {
				//render a li top level item
				if($item->id == wire('page')->id) {
					// if current item is the same as the page being viewed, add a "current" class to it
					$out .= "<li class='nav-item current'>";
				} else {
					// otherwise just a regular list item
					$out .= "<li class='nav-item'>";
				}
				// markup for the link
				$out .= "<a href='$item->url' class='nav-link'>$item->title</a> ";
				// if($item->summary) $out .= "<div class='summary'>$item->summary</div>";
				// close the list item
				$out .= "</li>";
			}
		}
    }
    // optional if not done in output file: if output was generated above, wrap it in a <ul> 
    // if($out) $out = "<ul class='navbar navbar-expand-lg navbar-light bg-light'>$out</ul>\n";
    // return the markup we generated above
    return $out;
}
function renderSubNav(PageArray $subItems) {
	foreach($subItems as $subItem) {
			//render sub menu li
			if($subItem->id == wire('page')->id) {
				// if current item is the same as the page being viewed, add a "current" class to it
				$out .= "<a href='$subItem->url' class='dropdown-item submenu-current'>$subItem->title</a> ";
			} else {
				// otherwise just a regular list item
				$out .= "<a href='$subItem->url' class='dropdown-item'>$subItem->title</a> ";
			}

	}
	return $out;
}

/**
 * Render a Bootstrap carousel
 * @param $images
 * @return string
 */
function bsRenderCarousel($images) {
    $id = $images->get('page').$images->get('field')->id;
    $out  = "<div id='carousel-{$id}' class='carousel slide' data-ride='carousel'>
                <ol class='carousel-indicators hidden-sm-down'>";
    $i = 0;
    foreach($images as $image) {
        $class = ($i == 0) ? "active" : "";
        $out .= "<li data-target='#carousel-{$id}' data-slide-to='{$i}' class='{$class}'></li>";
        $i++;
    }
    $out .= "</ol>
             <div class='carousel-inner' role='listbox'>";
    $i = 0;
    foreach($images as $image) {
        $class = ($i == 0) ? "active" : "";
        $out .= "<div class='carousel-item $class'>
                    <img src='{$image->url}' alt='{$image->description}' width='$image->width' height ='$image->height'>
                 </div>";
        $i++;
    }
    $out .= "</div>";
    $out .= "<a class='left carousel-control' href='#carousel-{$id}' role='button' data-slide='prev'>
                <span class='icon-prev' aria-hidden='true'></span>
                <span class='sr-only'>Previous</span>
             </a>
             <a class='right carousel-control' href='#carousel-{$id}' role='button' data-slide='next'>
                <span class='icon-next fa fa-chevron-right ' aria-hidden='true'></span>
                <span class='sr-only'>Next</span>
            </a>
        </div>";
    return $out;
}
/**
 * Render Bootstrap cards
 * @param $cards
 * @return string
 */
function bsRenderCards($cards) {
    $out  = "<div class='card-deck-wrapper'>
                <div class='card-deck'>";
    foreach ($cards as $card) {
        $out .= "    <div class='card'>
                        <div class='card-block'>
                            <h4 class='card-title'>{$card->title}</h4>
                            <p class='card-text'>{$card->summary}</p>
                                    <p class='card-text'><a class='btn btn-lg {$card->button_class}' href='{$card->button_link}' role='button' data-toggle='tooltip' data-placement='right' title='{$card->button_tooltip}'><span class='fa {$card->button_icon}'></span> {$card->button_title}</a></p>
                        </div>
                     </div>";
    }
    $out .= "    </div>";
    $out .= "</div>";
    return $out;
}

$navigation = renderNav($pages->get("/")->children); // site menu - all sub pages of home
$subNavigation = renderNav($page->children); // sub menu - all sub pages of current page