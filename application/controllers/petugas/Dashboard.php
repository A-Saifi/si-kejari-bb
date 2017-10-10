<?php
/**
 *
 */
class Dashboard extends Petugas
{

  function index()
  {
    $this->layout->petugas('dashboard/index',
      [
        'title' => 'Admin - Dashboard',
        'sidebar' => 1,
        'page_title' => 'Dashboard',
        'breadcrumb' => [
                          ['page' => 'Dashboard', 'url' => base_url('petugas')],
                        ],
        'dashboard' => 'yes',
      ]
    );
  }
}

?>
