<?php

return function($site, $pages, $page) {

  if($user = $site->user()) {

    if ($user->hasRole('admin')) {
      $projects = $page->children();
    } else {
      $projects = $page->children()->filterBy('client', $user->username());
    }

    return compact('projects', 'user');

    } elseif (c::get('demo-mode')) {

    	$projects = array($site->find('projects/sample-project'));
    	$user = $site->user('sample-client');
    	return compact('projects', 'user');

    } else {

      // redirect when not logged in
      go('/');

    }

};