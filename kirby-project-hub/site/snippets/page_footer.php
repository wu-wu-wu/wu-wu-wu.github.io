  <footer class="footer cf" role="contentinfo">

  	<div class="container footer-container">

  		<div class="one-half column footer-copyright">
  			<?php echo $site->copyright()->kirbytext() ?>
  		</div>

  		<div class="one-half column footer-contact">
        <?php if ($user = $site->user() and $user->hasRole('admin')): ?>
          <a href="<?php echo url('panel') ?>">ADMIN</a> |
        <?php endif ?>
  			<?php if($user = $site->user()): ?>
  				<a href="<?php echo url('logout') ?>"><?php echo l::get('log_out') ?></a> |
  			<?php endif ?>
  			<a href="<?php echo $site->find('contact')->url(); ?>"><?php echo l::get('contact_us') ?></a>
  		</div>

  	</div>

  </footer>