<?php

/**
 *
 */
class Base extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->helper(['url', 'html']);
    $this->load->library(['session', 'layout']);

    date_default_timezone_set("Asia/Bangkok");
  }

  function alert($pesan, $url)
  {
    echo "<script>
          alert('".$pesan."');
          window.location.href='".$url."';
          </script>";
  }

  function go_to($url)
  {
    echo "<script>
            window.location.href='".$url."';
          </script>";
  }

  function messageBox($jenis, $judul, $informasi)
  {
    $this->load->view('_layout/ui/message-box/'.$jenis, [
      'jenis' => $jenis,
      'judul' => $judul,
      'informasi' => $informasi,
    ]);
  }

  function is_logged_in($user,$url)
  {
    if ($this->session->userdata($user)==null) {
      $this->alert('Anda belum login sebagai admin', $url);
    }
  }
}


/**
 *
 */
class Admin extends Base
{

  function __construct()
  {
    parent::__construct();
    $this->is_logged_in('admin', base_url('login'));
  }
}

?>
