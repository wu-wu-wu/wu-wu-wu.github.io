<?php snippet('header') ?>

<div class="container home-container">
	<div class="row">

		<?php if ($page->hasImages()): ?>
			<div class="home-logo">
				<img src="<?php echo $page->images()->first()->url() ?>" alt="<?php echo $site->title()->html() ?>" />
			</div>
		<?php endif ?>
		<h1 class="home-title"><?php echo $site->title()->html() ?></h1>
		<div class="home-description"><?php echo $page->text()->kirbytext() ?></div>

		<?php if($error): ?>
			<div class="alert"><?php echo l::get('log_in_error') ?></div>
		<?php endif ?>

		<form class="login-form" method="post">
			<div class="row">
				<label for="username"><?php echo l::get('your_username') ?></label>
				<input class="u-full-width" type="text" autocapitalize="off" autocorrect="off" placeholder="client-name" name="username" id="username">
			</div>
			<div class="row">
				<label for="password"><?php echo l::get('your_password') ?></label>
				<input class="u-full-width" type="password" placeholder="********" name="password" id="password">
			</div>
			<div class="login-actions row">
				<input type="submit" name="login" value="<?php echo l::get('log_in') ?>">
			</div>

			<?php if (c::get('demo-mode')): ?>
				<div class="actions">
					<hr>
					<a class="button button-primary" href="<?php echo $site->find('projects')->url('en'); ?>">VIEW DEMO PROJECT</a> &nbsp; &nbsp;
					<a class="button button-primary" href="<?php echo $site->find('projects')->url('fr'); ?>">CONSULTEZ LE PROJET DEMO</a>
				</div>
			<?php endif ?>

		</form>

	</div>

</div>

<?php snippet('footer') ?>