<!-- info -->
<div class="message-box message-box-info animated fadeIn" id="message-box-info">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-info"></span> <?= $judul ?></div>
            <div class="mb-content">
                <p><?= $informasi ?></p>
            </div>
            <div class="mb-footer">
                <button class="btn btn-default btn-lg pull-right mb-control-close">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end info -->

<?php $this->load->view('_layout/ui/message-box/show') ?>
