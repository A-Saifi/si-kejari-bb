<?php
/**
 *
 */
class Logout extends admin
{

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $this->session->unset_userdata('admin');
    $this->session->sess_destroy();
    redirect(base_url('login'));
  }
}

?>
