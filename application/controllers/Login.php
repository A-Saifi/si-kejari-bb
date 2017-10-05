<?php
/**
 *
 */
class Login extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->helper(['url', 'html']);
    $this->load->library(['session', 'layout']);

    date_default_timezone_set("Asia/Bangkok");
  }

  function index()
  {
    $this->layout->login([
      'title' => 'Login',
    ]);
  }

}

?>
