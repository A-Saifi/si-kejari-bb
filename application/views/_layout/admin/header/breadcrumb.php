<li><a href="<?= base_url() ?>">Home</a></li>
<?php if (!empty($breadcrumb)): ?>
  <?php for ($i=0; $i < count($breadcrumb)-1; $i++) {?>
    <li><a href="#">Pages</a></li>
  <?php } ?>
    <li class="active"><?= $breadcrumb[count($breadcrumb)-1] ?></li>
<?php endif; ?>
