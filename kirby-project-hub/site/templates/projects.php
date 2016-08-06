<?php snippet('header') ?>

<?php snippet('page_header') ?>

<div class="container content-body">
	<div class="row">

		<h3><?php echo $user->firstName() ?> <?php echo $user->lastName(); ?></h3>

		<table class="u-full-width">
			<thead>
				<tr>
					<th><?php echo strtoupper($page->title()->html()); ?></th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($projects as $project): ?>
					<tr>
						<td>
							<h5><a href="<?php echo $project->url(); ?>"><?php echo $project->title()->html(); ?></a></h5>
							<div><?php echo $project->description()->html(); ?></div>
						</td>
						<td class="text-right"><a href="<?php echo $project->url(); ?>" class="button"><?php echo l::get('view') ?></a></td>
					</tr>
				<?php endforeach ?>

			</tbody>
		</table>

	</div>
</div>

<?php snippet('page_footer') ?>

<?php snippet('footer') ?>