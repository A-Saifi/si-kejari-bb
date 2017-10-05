<script type="text/javascript">
  $(document).ready(function(){
    $("#button-<?= $jenis ?>").click(function(){
      $("#message-box-<?= $jenis ?>").hide();
    });
      $("#message-box-<?= $jenis ?>").fadeIn();
    });

</script>
