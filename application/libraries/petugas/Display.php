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

  function benda_counter($id_ba_18)
  {
    $this->CI->load->model('petugas/Benda_model');
    $benda = $this->CI->Benda_model->get_by_ba_18($id_ba_18);

    return count($benda);
  }
}

?>
