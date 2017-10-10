<li class="xn-profile">
    <a href="#" class="profile-mini">
        <img src="<?= $template ?>assets/images/users/avatar.jpg" alt="John Doe"/>
    </a>
    <div class="profile">
        <div class="profile-image">
            <img src="<?= $template ?>assets/images/users/avatar.jpg" alt="John Doe"/>
        </div>
        <div class="profile-data">
            <div class="profile-data-name"><?= ucwords(strtolower($this->session->userdata('petugas')->nama_pegawai)) ?></div>
            <div class="profile-data-title"><?= ucwords(strtolower($this->session->userdata('petugas')->nama_role)) ?></div>
        </div>
        <div class="profile-controls">
            <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
            <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
        </div>
    </div>
</li>
