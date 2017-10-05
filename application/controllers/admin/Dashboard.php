<?php
/**
 *
 */
class Dashboard extends Admin
{

  function index()
  {
    $this->layout->admin('dashboard/index',
      [
        'title' => 'Admin - Dashboard',
        'page_title' => 'Dashboard',
        'breadcrumb' => [
                          'Dashboard',                          
                        ],
      ]
    );
  }

}

?>
