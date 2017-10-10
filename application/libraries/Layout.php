<?php
/**
 *
 */
class Layout
{

  function __construct()
  {
    $this->CI =& get_instance();
  }

  function admin($view, $data)
  {
    $data['view'] = 'admin/';
    $data['layout'] = "_layout/admin/";
    $data['template'] = base_url('assets/template/');

    $this->CI->load->view($data['layout']."header", $data);

    $this->CI->load->view($data['view'].$view, $data);

    $this->CI->load->view($data['layout']."footer", $data);
  }

  function petugas($view, $data)
  {
    $data['view'] = 'petugas/';
    $data['layout'] = "_layout/petugas/";
    $data['template'] = base_url('assets/template/');

    $this->CI->load->view($data['layout']."header", $data);

    $this->CI->load->view($data['view'].$view, $data);

    $this->CI->load->view($data['layout']."footer", $data);
  }

  function login($data)
  {
    $data['template'] = base_url('assets/template/');
    $data['layout'] = "_layout/admin/";

    $this->CI->load->view("_layout/login", $data);
  }
}

?>
