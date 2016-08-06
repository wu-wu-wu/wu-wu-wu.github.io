<?php

if (!c::get('demo-mode') && $page->passwordprotected()->bool()) {
	$user = $site->user();
	if (!$user || ( !$user->hasRole('admin') && $user->username() != $page->client() ) ) {
		go('/');
	}
}

?>

<?php snippet('header') ?>

<?php snippet('page_header') ?>

<div class="project-header">
	<div class="container">
		<div class="row">
			<h2 class="project-title"><?php echo $page->title()->html() ?></h2>
			<p class="project-subtitle"><?php echo $page->description()->upper()->html() ?></p>
		</div>
	</div>
</div>

<div class="project-body">

	<div class="container project-intro">
		<div class="row">
			<?php echo $page->text()->kirbytext() ?>
		</div>
	</div>

	<div class="row text-center">
	<?php foreach ($page->children()->filterBy('template', 'project_page') as $project_page): ?>
		<a class="button button-primary" href="<?php echo $project_page->url() ?>"><?php echo $project_page->title()->html(); ?></a>
		&nbsp;
	<?php endforeach ?>
	</div>

	<div class="container cd-container">
		<div id="cd-timeline">

		<?php foreach ($page->children()->filterBy('template', 'item')->visible()->sortBy('published', 'desc') as $item): ?>

			<?php snippet('project_item', array('item' => $item)) ?>

		<?php endforeach ?>

		</div>
	</div>

	<div class="container">
		<div class="row text-center">
			<a class="button" href="<?php echo $page->parent()->url() ?>"><?php echo l::get('back') ?></a>
			<?php if ($page->rssfeed()->bool()): ?>
				&nbsp;
				<a class="button" href="<?php echo $page->find('feed')->url();  ?>">RSS</a>
			<?php endif ?>
		</div>
	</div>

</div>

	<?php snippet('page_footer') ?>

	<?php snippet('footer') ?>