<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">       

        <!-- S T Y L E S - G E N E R A L -->
        <meta name="theme-color" content="#712a81" />
        <?php wp_head(); ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <script>
            var siteURL = '<?php echo esc_url(site_url('')); ?>';
        </script>
    </head>
    <body <?php body_class('is-preload'); ?> style="display: none;">

    <div class="overProgress fadeX"></div>

    <div id="blockhh" class="head-block"></div>

    <!-- Header -->
    <header id="headerGeneral" class="g-header" data-blur-content>
      <div class="container-fluid">
          <div class="row justify-content-between d-flex">
            <div class="col-sm-4">
              <ul class="listHeader">
                  <li>
                    <a href="/personal">
                      <img src="/wp-content/themes/peibo-child/assets/img/logos/logoHeader.png" width="70%" class="imgHeader" />
                    </a>
                  </li>
                  <li>
                    <a href="/personal">personal</a>
                  </li>
                  <li>
                    <a href="/empresas">empresas</a>
                  </li>
                </ul>
            </div>
            <div class="col-sm-4 justify-content-end d-flex">
              <ul class="listHeader">
                  <li>
                    <a href="/personal#ContentContacto">contacto</a>
                  </li>
                  <li>
                    <a href="#">sing in</a>
                  </li>
                  <li>
                    <a href="#" class="btnSing">sing up</a>
                  </li>
                </ul>

            </div>
          </div>
      </div>
    </header>
    
    <!-- Main -->
    <main class="PageContainer mt-2" data-blur-content>
      <div id="primary" class="content-area">