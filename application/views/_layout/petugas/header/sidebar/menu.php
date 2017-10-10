<li class="<?= $this->sidebar->active($sidebar,1) ?>">
    <a href="<?= base_url('petugas') ?>"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
</li>
<li class="xn-openable <?= $this->sidebar->active_tree($sidebar,1,5) ?>">
    <a href="#"><span class="fa fa-stack-overflow"></span> <span class="xn-text">Barang Bukti</span></a>
    <ul>
      <li class="<?= $this->sidebar->active($sidebar,2) ?>"><a href="<?= base_url('petugas/ba_18') ?>"><span class="fa fa-book"></span>Berita Acara</a></li>
      <li class="<?= $this->sidebar->active($sidebar,3) ?>"><a href="<?= base_url('petugas/b_10') ?>"><span class="fa fa-table"></span>Kartu</a></li>
      <li class="<?= $this->sidebar->active($sidebar,4) ?>"><a href="<?= base_url('petugas/b_9') ?>"><span class="fa fa-tags"></span>Label</a></li>
    </ul>
</li>
