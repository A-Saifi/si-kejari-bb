<?php if (!empty($noty)): ?>
  <script type='text/javascript' src='<?= $template ?>js/plugins/noty/jquery.noty.js'></script>
  <script type='text/javascript' src='<?= $template ?>js/plugins/noty/layouts/topCenter.js'></script>
  <script type='text/javascript' src='<?= $template ?>js/plugins/noty/layouts/topLeft.js'></script>
  <script type='text/javascript' src='<?= $template ?>js/plugins/noty/layouts/topRight.js'></script>

  <script type='text/javascript' src='<?= $template ?>js/plugins/noty/themes/default.js'></script>
  <script type="text/javascript">
      function notyConfirm(){
          noty({
              text: 'Yakin ingin menghapus?',
              layout: 'topCenter',
              timeout: 1500,
              animation: {
                  open: 'animated fadeInDown',
                  close: 'animated fadeOutUp'
              }
              buttons: [
                      {addClass: 'btn btn-success btn-clean', text: 'Ok', onClick: function($noty) {
                          $noty.close();
                          noty({text: 'You clicked "Ok" button', layout: 'topRight', type: 'success'});
                      }
                      },
                      {addClass: 'btn btn-danger btn-clean', text: 'Cancel', onClick: function($noty) {
                          $noty.close();
                          noty({text: 'You clicked "Cancel" button', layout: 'topRight', type: 'error'});
                          }
                      }
                  ]
          })
      }
  </script>
<?php endif; ?>
