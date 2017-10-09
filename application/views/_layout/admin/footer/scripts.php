<!-- START PLUGINS -->
<script type="text/javascript" src="<?= $template ?>js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?= $template ?>js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?= $template ?>js/plugins/bootstrap/bootstrap.min.js"></script>
<!-- END PLUGINS -->

<!-- START THIS PAGE PLUGINS-->
<script type='text/javascript' src='<?= $template ?>js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="<?= $template ?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>


<?php $this->load->view($layout.'footer/scripts/data-tables') ?>

<?php $this->load->view($layout.'footer/scripts/form') ?>

<?php $this->load->view($layout.'footer/scripts/noty') ?>

<!-- END THIS PAGE PLUGINS-->

<!-- START TEMPLATE -->
<!-- <script type="text/javascript" src="js/settings.js"></script> -->
<script type="text/javascript" src="<?= $template ?>js/plugins.js"></script>
<script type="text/javascript" src="<?= $template ?>js/actions.js"></script>

<?php $this->load->view($layout.'footer/scripts/dashboard') ?>
<!-- END TEMPLATE -->
