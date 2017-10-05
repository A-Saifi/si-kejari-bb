<?php
/**
 *
 */
class Admin extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->helper(['url', 'html']);
    $this->load->library(['session', 'layout']);

    #$this->is_logged_in();

    date_default_timezone_set("Asia/Bangkok");
  }

  function alert($pesan, $url)
  {
    echo "<script>
          alert('".$pesan."');
          window.location.href='".$url."';
          </script>";
  }

  private function is_logged_in()
  {
    if ($this->session->userdata('admin')==null) {
      $this->alert('Anda belum login sebagai admin', base_url('login'));
    }
  }
}

?>
