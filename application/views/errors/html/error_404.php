<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<?php $CI =& get_instance(); if( ! isset($CI)) { $CI = new CI_Controller(); } $CI->load->helper('url'); ?>

<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Maintenance mode - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="<?php echo base_url() ?>assets/dist/css/tabler.min.css?1684106062" rel="stylesheet"/>
    <link href="<?php echo base_url() ?>assets/dist/css/tabler-flags.min.css?1684106062" rel="stylesheet"/>
    <link href="<?php echo base_url() ?>assets/dist/css/tabler-payments.min.css?1684106062" rel="stylesheet"/>
    <link href="<?php echo base_url() ?>assets/dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet"/>
    <link href="<?php echo base_url() ?>assets/dist/css/demo.min.css?1684106062" rel="stylesheet"/>
    <link rel="stylesheet" href="<?= base_url () ?>assets/webfont/tabler-icons.min.css">
    <style>
      @import url('<?php echo base_url() ?>assets/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body  class=" border-top-wide border-primary d-flex flex-column">
    <script src="<?php echo base_url() ?>assets/dist/js/demo-theme.min.js?1684106062"></script>
    <div class="page page-center">
      <div class="container-tight py-4">
        <div class="empty">
          <div class="empty-img"><img src="<?php echo base_url() ?>assets/static/illustrations/undraw_quitting_time_dm8t.svg" height="128" alt="">
          </div>
          <p class="empty-title">Temporarily down for maintenance</p>
          <p class="empty-subtitle text-muted">
            Sorry for the inconvenience but we’re performing some maintenance at the moment. We’ll be back online shortly!
          </p>
          <div class="empty-action">
            <a href="javascript:history.back()" class="btn btn-primary">
              <i class="ti ti-arrow-left d-sm-inline-block"></i> Take me back
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="<?php echo base_url() ?>assets/dist/js/tabler.min.js?1684106062" defer></script>
    <script src="<?php echo base_url() ?>assets/dist/js/demo.min.js?1684106062" defer></script>
  </body>
</html>