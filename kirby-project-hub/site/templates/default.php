<?php snippet('header') ?>

<?php snippet('page_header') ?>

<div class="container default-container">
	<div class="row">
		<h1 class="default-title"><?php echo $page->title()->html() ?></h1>
		<?php echo $page->text()->kirbytext() ?>
	</div>
</div>

<?php snippet('page_footer') ?>

<?php snippet('footer') ?>