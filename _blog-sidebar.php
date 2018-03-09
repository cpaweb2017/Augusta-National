<?php
// 

/**
* Create a sidebar for the blog showing an archive if links.  It will show the year and month if they contain any posts, and a list of blog post titles / links under them.
*/

?>
<ul class="blog-sidebar" id="accordian" aria-multiselectable="true">
<?php

// count to check which post is 1st
$count = 0;
// after how many open lines should the years collapse
$collapseLimit = 10;

// load blog posts
// set allowed blog templates, order and max number of posts to load here (1000)
$posts =  $pages->find("template=blog-post, sort=-post_date, limit=1000");   

        foreach ($posts as $p)  // loop through the posts
        {
			//grab the post year and month
			$year = date('Y', strtotime( $p->blog_date ) );
            $month = date('m', strtotime( $p->blog_date ) );
			$monthName = date("F", mktime(0, 0, 0, $month, 10));
			
			// if first blog post, show the year and month
			if ($count == 0) {
				echo '<li class="blog-year-link"><a data-toggle="collapse"  data-parent="#accordion" href="#id' . $year . '" aria-expanded="true" aria-controls="id' . $year . '">' . $year . '</a></li><li><ul id="id' . $year . '" class="blog-side-year collapse show">';
				echo "<li class=\"blog-side-month\">" . $monthName . "</li>";
				
				// store the year month so we can check when they change
				$currentMonth = $month;
				$currentYear = $year;
				$monthName = date("F", mktime(0, 0, 0, $currentMonth, 10));
				$count ++;
			} else {
			
				// check if year has changed
				if($year != $currentYear) {
					if ($count < $collapseLimit) {
						echo '</ul></li><li class="blog-year-link"><a data-toggle="collapse" data-parent="#accordion" href="#id' . $year . '" aria-expanded="true" aria-controls="id' . $year . '">' . $year . '</a></li><li><ul id="id' . $year . '" class="blog-side-year collapse show">';
					} else {
						echo '</ul><li class="blog-year-link"><a data-toggle="collapse" data-parent="#accordion" href="#id' . $year . '" aria-expanded="true" aria-controls="id' . $year . '">' . $year . '</a></li><li><ul id="id' . $year . '" class="blog-side-year collapse ">';
					}
					// change the current year
					$currentYear = $year;
					$count ++;
				}
				// check in month has changed
				if($month != $currentMonth) {
					// display the current month
					$monthName = date("F", mktime(0, 0, 0, $month, 10));
					echo "<li class=\"blog-side-month\">" . $monthName . "</li>";
					// change the current month
					$currentMonth = $month;
					$count ++;
				}
			
			}
			// display posts within the current month
			echo '<li class="archive-post"><a href="' . $p->url . '">' . $p->title . '</a></li>';
			$count ++;
        }
		//close year list
		echo '</ul></li>';
		
?>
</ul>
<?php






?>