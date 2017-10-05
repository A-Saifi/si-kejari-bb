<!DOCTYPE html>
<html>
<head>
    <!-- META SECTION -->
    <title><?= $title ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="<?= $template ?>favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="<?= $template ?>css/theme-default.css"/>
    <!-- EOF CSS INCLUDE -->
</head>
  <body>

    <!-- START PAGE CONTAINER -->
    <div class="page-container">

      <!-- START PAGE SIDEBAR -->
      <div class="page-sidebar">
        <?php $this->load->view($layout.'header/sidebar') ?>
      </div>
      <!-- END PAGE SIDEBAR -->

      <!-- PAGE CONTENT -->
      <div class="page-content">

        <!-- START X-NAVIGATION VERTICAL -->
        <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
          <?php $this->load->view($layout.'header/x-navigation') ?>
        </ul>
        <!-- END X-NAVIGATION VERTICAL -->

        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
          <?php $this->load->view($layout.'header/breadcrumb') ?>
        </ul>
        <!-- END BREADCRUMB -->

        <!-- PAGE TITLE -->
        <?php if (!empty($page_title)): ?>
          <div class="page-title">
              <h2><span class="fa fa-arrow-circle-o-left"></span> <?= ucwords(strtolower($page_title)) ?></h2>
          </div>
        <?php endif; ?>
        <!-- END PAGE TITLE -->

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">        
