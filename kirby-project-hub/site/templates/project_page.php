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
		<?php echo $page->text()->kirbytext() ?>
	</div>

	<div class="container">
		<div class="row text-center">
			<a class="button" href="<?php echo $page->parent()->url() ?>"><?php echo l::get('back') ?></a>
		</div>
	</div>

</div>

	<?php snippet('page_footer') ?>

	<?php snippet('footer') ?>