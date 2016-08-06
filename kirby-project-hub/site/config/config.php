<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');

/*

---------------------------------------
Language Setup
---------------------------------------

Kirby has built-in support for multi-language sites.
http://getkirby.com/docs/languages
We activated the english language as the default language and
use custom language variables to make the templates easily translatable.

The default language of the new clients and new content is english.
But you can use a different language for each client.

EXAMPLE :
If you have a french client, assign "Français" as his language when creating the client account.
After logging in, the french client will see french interface elements.

By default this template contains language files for english and french.
You can create additional language files in the /site/languages directory.
Then change this configuration to include the new language.

*/

c::set('languages', array(
  array(
    'code'    => 'en',
    'name'    => 'English',
    'default' => true,
    'locale'  => 'en_US',
    'url'     => '/',
  ),
  array(
    'code'    => 'fr',
    'name'    => 'Français',
    'locale'  => 'fr_FR',
    'url'     => '/fr',
  )
));

/*

---------------------------------------
User Roles
---------------------------------------

There are 3 user roles :
- admin and editor for content creation
- a client can only view his own project
When creating a new user, the default is client.

*/


c::set('roles', array(
  array(
    'id'      => 'admin',
    'name'    => 'Admin',
    'panel'   => true
  ),
  array(
    'id'      => 'editor',
    'name'    => 'Editor',
    'panel'   => true
  ),
  array(
    'id'      => 'client',
    'name'    => 'Client',
    'default' => true,
    'panel'   => false
  )
));

/*

---------------------------------------
Homepage Setup
---------------------------------------

By default the folder/uri for your homepage is "home".
Sometimes it makes sense to change that to make your blog
your homepage for example. Just change it here in that case.

*/

c::set('home', 'login');

/*

---------------------------------------
Routes
---------------------------------------

This is a logout route.

*/

c::set('routes', array(
  array(
    'pattern' => 'logout',
    'action'  => function() {
      if($user = site()->user()) $user->logout();
      go('/');
    }
  )
));


/*
---------------------------------------
Panel settings
---------------------------------------
*/

c::set('panel.widgets', array(
  'projects' => true,
  'pages'    => true,
  'site'     => true,
  'account'  => true,
  'history'  => true
));


/*
---------------------------------------
Project settings
---------------------------------------
*/

// c::set('demo-mode', false);
// c::set('relativedate.conjunction', true);
// c::set('autopublish.templates', array('project', 'item'));