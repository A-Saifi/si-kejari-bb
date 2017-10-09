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
        'sidebar' => 1,
        'page_title' => 'Dashboard',
        'breadcrumb' => [
                          ['page' => 'Dashboard', 'url' => base_url('admin')],
                        ],
        'dashboard' => 'yes',
      ]
    );
  }

}

?>
