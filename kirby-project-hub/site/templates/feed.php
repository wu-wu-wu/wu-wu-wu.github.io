<?php

if ($page->parent()->rssfeed()->bool()) {

	echo $page->parent()->children()->filterBy('template', 'item')->visible()->sortBy('published', 'desc')->limit(10)->feed(array(
		'title'       => $page->parent()->title(),
		'description' => $page->parent()->description(),
		'link'        => $page->parent()->url(),
		'datefield' 	=> 'published',
		));

}

?>
