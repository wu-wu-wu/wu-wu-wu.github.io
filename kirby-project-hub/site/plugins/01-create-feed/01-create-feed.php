<?php

kirby()->hook('panel.page.create', 'create_feed_page');
kirby()->hook('panel.page.update', 'create_feed_page');

function create_feed_page($page) {
  if ($page->template() == 'project' && ! $page->find('feed')) {
  	try {

  	  $page->children()->create('feed', 'feed', array(
  	    'title' => 'Project Feed'
  	  ));

  	} catch(Exception $e) {

  	  echo $e->getMessage();

  	}
  }
};
