<?php snippet('header') ?>

<?php snippet('page_header') ?>

<div class="container contact-container">
	<div class="row">
		<h1 class="contact-title"><?php echo $page->title()->html() ?></h1>
		<div class="contact-text">
			<p><strong><?php echo $page->name()->html() ?></strong></p>
			<p>
				<?php echo $page->street(); ?><br />
				<?php echo $page->zip()->html(); ?> <?php echo $page->location()->html(); ?>
			</p>
			<p>
				<a href="tel:<?php echo $page->phone()->html(); ?>"><?php echo $page->phone()->html(); ?></a><br />
				<a href="mailto:<?php echo $page->email()->html(); ?>"><?php echo $page->email()->html(); ?></a><br />
				<a href="<?php echo $page->website()->html(); ?>"><?php echo $page->website()->html(); ?></a><br />
				<a href="https://twitter.com/<?php echo $page->twitter()->html(); ?>"><?php echo $page->twitter()->html(); ?></a>
			</p>
		</div>
	</div>
</div>

<?php snippet('footer') ?>