        </div>
        <!-- END PAGE CONTENT WRAPPER -->

      </div>
      <!-- END PAGE CONTENT -->

    </div>
    <!-- END PAGE CONTAINER -->

    <!-- MESSAGE BOX-->
    <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
      <?php $this->load->view($layout.'footer/mb-signout') ?>
    </div>
    <!-- END MESSAGE BOX-->

    <!-- START PRELOADS -->
    <audio id="audio-alert" src="<?= $template ?>audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="<?= $template ?>audio/fail.mp3" preload="auto"></audio>
    <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
      <?php $this->load->view($layout.'footer/scripts') ?>
    <!-- END SCRIPTS -->
  </body>
</html>
