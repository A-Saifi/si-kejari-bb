<li><a href="<?= base_url() ?>">Home</a></li>
<?php if (!empty($breadcrumb)): ?>
  <?php for ($i=0; $i < count($breadcrumb)-1; $i++) {?>
    <li><a href="<?= $breadcrumb[$i]['url'] ?>"><?= $breadcrumb[$i]['page'] ?></a></li>
  <?php } ?>
    <li class="active"><?= $breadcrumb[count($breadcrumb)-1]['page'] ?></li>
<?php endif; ?>
