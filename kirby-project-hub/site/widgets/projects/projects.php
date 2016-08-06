<?php

$projects = panel()->site()->page('projects');
$title = $projects->title();

return array(
  'title' => 'Projects',
  'options' => array(
    array(
      'text' => l('add'),
      'icon' => 'plus-circle',
      'link' => 'pages/projects/add'
    )
  ),
  'html' => function() use ($projects) {
    return tpl::load(__DIR__ . DS . 'projects.html.php', array(
      'projects' => $projects->children()
    ));
  }
);