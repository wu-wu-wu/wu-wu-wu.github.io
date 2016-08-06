<?php

if (!c::get('demo-mode') && $page->parent()->passwordprotected()->bool()) {
	$user = $site->user();
	if (!$user || ( !$user->hasRole('admin') && $user->username() != $page->parent()->client() ) ) {
		go('/');
	}
}

?>

<?php snippet('header') ?>

<?php snippet('page_header') ?>

<div class="project-header">
	<div class="container">
		<div class="row">
			<h2 class="project-title"><?php echo $page->parent()->title()->html() ?></h2>
			<p class="project-subtitle"><?php echo $page->parent()->description()->upper()->html() ?></p>
		</div>
	</div>
</div>

<div class="content-body">

	<div class="container">
		<div class="row">
			<?php if ($page->text()->empty()): ?>
				<h2><?php echo $page->title()->html() ?></h2>
				<p>
				<?php if (!$page->link()->empty()): ?>
					<a href="<?php echo $page->link()->html(); ?>" class="button button-primary"><?php echo l::get('view') ?></a>
				<?php endif ?>
				<?php foreach ($page->files() as $file): ?>
					<?php if ($file->type() != 'image'): ?>
						<a href="<?php echo $file->url(); ?>" class="cd-read-more button button-primary"><?php echo l::get('download') ?></a>
					<?php endif ?>
				<?php endforeach ?>
				</p>
			<?php endif ?>
			<?php echo $page->text()->kirbytext() ?>
		</div>
		<div class="row text-center">
			<a class="button" href="<?php echo $page->parent()->url() ?>"><?php echo l::get('back') ?></a>
		</div>
	</div>

</div>

	<?php snippet('page_footer') ?>

	<?php snippet('footer') ?>