<?php
/**
 * The template header, also display Tokopedia's navbar
 * Contains opening HTML, head, opening body, and header tag
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Starter Theme</title>
  <?php wp_head(); ?>
</head>
<body>
  <!-- Pivot Overlay -->
  <div class="overlay"></div>

  <!-- Header -->
  <header class="header">
    <div class="container">
      <div class="logo">
        <a href="<?php bloginfo('url'); ?>">
          <img src="https://ecs7.tokopedia.net/promo/assets/images/promo_logo.png" height='25' alt="tokopedia promo"/>
        </a>
      </div>
      <div class="wrap_bridge-menu pull-right">
        <div class="bridge-widget inline-block">
          <button class="bw-button">Expander</button>
          <div class="bw-container">
            <div class="bw-item">
              <a href="https://www.tokopedia.com/" target="_blank">
                <div class="bw-icon__wrapper">
                  <div class="bw-icon bw-icon-toped"></div>
                </div>
                <p class="bw-icon__text">Jual Beli Online</p>
                <span class="clear-b"></span>
              </a>
            </div>
            <div class="bw-item">
              <a href="https://www.tokopedia.com/official-store" target="_blank" id="bw-official-store">
                <div class="bw-icon__wrapper">
                  <div class="bw-icon bw-icon-official"></div>
                </div>
                <p class="bw-icon__text">Official Store</p>
                <span class="clear-b"></span>
              </a>
            </div>
            <div class="bw-item">
              <a href="https://www.tokopedia.com/pulsa" target="_blank">
                <div class="bw-icon__wrapper">
                  <div class="bw-icon bw-icon-pulsa"></div>
                </div>
                <p class="bw-icon__text">Produk Digital</p>
                <span class="clear-b"></span>
              </a>
            </div>
            <div class="bw-item">
              <a href="https://tiket.tokopedia.com/" target="_blank">
                <div class="bw-icon__wrapper">
                  <div class="bw-icon bw-icon-tiket"></div>
                </div>
                <p class="bw-icon__text">Tiket Kereta</p>
                <span class="clear-b"></span>
              </a>
            </div>
            <div class="bw-item">
              <a href="https://www.tokopedia.com/berbagi" target="_blank">
                <div class="bw-icon__wrapper">
                  <div class="bw-icon bw-icon-donasi"></div>
                </div>
                <p class="bw-icon__text">Donasi</p>
                <span class="clear-b"></span>
              </a>
            </div>
            <div class="bw-item">
              <a href="https://www.tokopedia.com/bantuan/" target="_blank">
                <div class="bw-icon__wrapper">
                  <div class="bw-icon bw-icon-help"></div>
                </div>
                <p class="bw-icon__text">Bantuan</p>
                <span class="clear-b"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header -->