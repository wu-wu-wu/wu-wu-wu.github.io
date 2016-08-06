<header class="header cf" role="banner">
  <div class="container header-container">
  	<div class="row">
  		<div class="header-logo">
			<?php if ($site->find('login')->hasImages()): ?>
                <a href="<?php echo url() ?>">
                <img src="<?php echo $site->find('login')->images()->first()->url() ?>" alt="<?php echo $site->title()->html() ?>" height="40" />
                </a>
            <?php endif ?>
            <div class="header-title">
                <a href="<?php echo url() ?>"><?php echo $site->title()->upper()->html(); ?></a>
            </div>
            </div>
        </div>
    </div>
</header>