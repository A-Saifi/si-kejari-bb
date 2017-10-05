<!-- START PLUGINS -->
<script type="text/javascript" src="<?= $template ?>js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?= $template ?>js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?= $template ?>js/plugins/bootstrap/bootstrap.min.js"></script>
<!-- END PLUGINS -->

<!-- START THIS PAGE PLUGINS-->
<script type='text/javascript' src='<?= $template ?>js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="<?= $template ?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

<?php if (!empty($data_tables)): ?>
  <script type="text/javascript" src="<?= $template ?>js/plugins/datatables/jquery.dataTables.min.js"></script>
<?php endif; ?>

<?php if (!empty($form)): ?>
  <script type="text/javascript" src="<?= $template ?>js/plugins/bootstrap/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="<?= $template ?>js/plugins/bootstrap/bootstrap-file-input.js"></script>
  <script type="text/javascript" src="<?= $template ?>js/plugins/bootstrap/bootstrap-select.js"></script>
  <script type="text/javascript" src="<?= $template ?>js/plugins/tagsinput/jquery.tagsinput.min.js"></script>        
<?php endif; ?>
<!-- END THIS PAGE PLUGINS-->

<!-- START TEMPLATE -->
<!-- <script type="text/javascript" src="js/settings.js"></script> -->

<script type="text/javascript" src="<?= $template ?>js/plugins.js"></script>
<script type="text/javascript" src="<?= $template ?>js/actions.js"></script>
<!-- END TEMPLATE -->
