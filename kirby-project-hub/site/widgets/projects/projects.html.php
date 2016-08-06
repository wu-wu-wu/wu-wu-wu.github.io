<ul class="dashboard-items">
  <?php foreach($projects as $item): ?>
  <li class="dashboard-item">
    <a title="<?php __($item->title()) ?>" href="<?php __($item->url('edit')) ?>">
      <figure>
        <span class="dashboard-item-icon dashboard-item-icon-with-border"><i class="fa fa-file-o"></i></span>
        <figcaption class="dashboard-item-text"><?php __($item->title()) ?></figcaption>
      </figure>
    </a>
  </li>
  <?php endforeach ?>
</ul>