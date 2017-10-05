<!-- warning -->
<div class="message-box message-box-warning animated fadeIn" id="message-box-warning">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-warning"></span> <?= $judul ?></div>
            <div class="mb-content">
                <p><?= $informasi ?></p>
            </div>
            <div class="mb-footer">
                <button class="btn btn-default btn-lg pull-right mb-control-close" id="button-warning">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end warning -->

<?php $this->load->view('_layout/ui/message-box/show') ?>
