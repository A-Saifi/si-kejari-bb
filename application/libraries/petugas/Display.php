<?php
/**
 *
 */
class Display
{

  function __construct()
  {
    $this->CI =& get_instance();
  }

  function ba_18_register()
  {
    $this->CI->load->model('petugas/Ba_18_model');
    $reg = $this->CI->Ba_18_model->get_last();
    if (!empty($reg)) {
      return $reg->register_ba_18+1;
    }else {
      return 1;
    }
  }
}

?>
