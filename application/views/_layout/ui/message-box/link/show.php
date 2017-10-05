<script type="text/javascript">
  $(document).ready(function(){
    $("#button-<?= $jenis ?>").click(function(){
      $("#message-box-<?= $jenis ?>").hide();
      window.location.href = "<?= $url ?>";
    });
      $("#message-box-<?= $jenis ?>").fadeIn();
    });

</script>
