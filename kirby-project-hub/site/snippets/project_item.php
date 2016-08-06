	<div class="cd-timeline-block row">
		<div class="cd-timeline-img cd-icon-<?php echo $item->icon()->html(); ?>">&nbsp;</div>
		<div class="cd-timeline-content">
			<h5 class="cd-timeline-title"><?php echo $item->title()->html(); ?></h5>
			<div class="cd-timeline-body">
				<p class="cd-date"><?php echo $item->published()->relative() ?></p>
				<p><?php echo $item->description()->html(); ?></p>
				<div class="cd-actions">
					<?php if (!$item->text()->empty()): ?>
						<a href="<?php echo $item->url(); ?>" class="cd-read-more button button-primary"><?php echo l::get('view') ?></a>
					<?php endif ?>
					<?php if (!$item->link()->empty()): ?>
						<a href="<?php echo $item->link()->html(); ?>" class="cd-read-more button button-primary"><?php echo l::get('view') ?></a>
					<?php endif ?>
					<?php foreach ($item->files() as $file): ?>
						<?php if ($file->type() != 'image'): ?>
							<div>
							<a href="<?php echo $file->url(); ?>" class="cd-read-more button button-primary">
								<?php echo l::get('download') ?>
							</a><br />
							<small><?php echo $file->name() ?> - <?php echo $file->extension() ?> (<?php echo $file->niceSize()?>)</small>
							</div>
						<?php endif ?>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>