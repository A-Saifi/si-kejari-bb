<!-- default with sound -->
<div class="message-box animated fadeIn" data-sound="alert" id="message-box-default">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-globe"></span> <?= $judul ?></div>
            <div class="mb-content">
                <p><?= $informasi ?></p>
            </div>
            <div class="mb-footer">
                <button class="btn btn-info btn-lg pull-right mb-control-close" id="button-default">Mengerti</button>
            </div>
        </div>
    </div>
</div>
<!-- end default with sound -->

<?php $this->load->view('_layout/ui/message-box/show') ?>
