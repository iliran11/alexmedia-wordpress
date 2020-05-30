<?php

/**
 * This template for displaying header part
 *
 * @package Selfer
 * @since 1.0
 */
/* ================================================== */

/**
 * Preloader
 * @package Selfer
 * @since 1.0
 */
selfer_preloader();

/**
 * Header Part show/hide condition
 * @package Selfer
 * @since 1.0
 */
if (get_post_meta(get_the_ID(), 'selfer_header_show_header', true) == 'no') {
  return;
}

/**
 * Header Sticky/Fixed Background Status
 * @package Selfer
 * @since 1.0
 */
if (get_post_meta(get_the_ID(), 'selfer_header_menu_sticky', true) == 'no') {
  $sticky_menu = '';
} else {
  $sticky_menu = 'fixed-top';
}

/**
 * Header Background Status
 * @package Selfer
 * @since 1.0
 */
if (get_post_meta(get_the_ID(), 'selfer_header_status', true) == 'transparent') {
  $header_bg_class = 'transparent-bg';
} else {
  $header_bg_class = 'bg-lavender header-bg';
} ?>

<div class="ts-page-wrapper" id="page-top">
  <?php if (selfer_get_options('header_type') == 'custom_header' && selfer_get_options('header_templates') !== 'default' || get_post_meta(get_the_ID(), 'selfer_header_type', true) == 'elementor_header' &&  get_post_meta(get_the_ID(), 'selfer_header_template', true) !== 'default') : ?>
    <header class="selfer-custom-header" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php
      if (!empty(get_post_meta(get_the_ID(), 'selfer_header_template', true)) && get_post_meta(get_the_ID(), 'selfer_header_template', true) !== 'default') {
        $get_custom_headers = get_post_meta(get_the_ID(), 'selfer_header_template', true);
      } else {
        $get_custom_headers = selfer_get_options('header_templates');
      }
      $args = array('post_type' => 'selfer_templates', 'p' => $get_custom_headers);

      $loop = new WP_Query($args);
      while ($loop->have_posts()) : $loop->the_post();
        the_content();
      endwhile;
      wp_reset_postdata();
      ?>
    </header><!--  /.selfer-custom-header -->
  <?php else :  ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-white <?php echo esc_attr($sticky_menu); ?>" id="alexmedia-header">
      <div class="container">
        <?php
        if (get_post_meta(get_the_ID(), 'selfer_header_logo_main', true) !== false && get_post_meta(get_the_ID(), 'selfer_header_logo_main', true) !== "") { ?>
          <div class="site-logo main-logo navbar-brand ts-push-down__50 position-absolute ts-bottom__0 bg-white pb-0 ts-z-index__1 ts-scroll">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="custom-logo-link">
              <img src="<?php echo esc_url(get_post_meta(get_the_ID(), 'selfer_header_logo_main', true)); ?>" alt="<?php echo esc_attr__('Site Logo', 'selfer'); ?>" />
            </a>
          </div><!-- /.site-logo -->
        <?php } elseif (function_exists('the_custom_logo') && has_custom_logo()) { ?>
          <div class="site-logo main-logo navbar-brand ts-push-down__50 position-absolute ts-bottom__0 bg-white pb-0 ts-z-index__1 ts-scroll">
            <?php the_custom_logo(); ?>
          </div><!-- /.site-logo -->
          <?php } else {
          if (function_exists('display_header_text')) {
            if (display_header_text() == true) { ?>
              <div class="site-logo main-logo navbar-brand site-brands">
                <div class="site-branding-text">
                  <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>

                  <?php $description = get_bloginfo('description', 'display');
                  if ($description || is_customize_preview()) : ?>
                    <p class="site-description"><?php echo esc_html($description); ?></p>
                  <?php endif; ?>
                </div><!-- .site-branding-text -->
              </div><!-- /.site-logo -->
        <?php }
          }
        } ?>

        <!--end navbar-brand-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!--end navbar-toggler-->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav d-block d-lg-flex ml-auto text-right">
            <?php
            if (get_post_meta(get_the_ID(), 'selfer_header_page_menu', true) !== '0') {
              wp_nav_menu(array(
                'menu_class' => 'mainmenu',
                'container' => 'ul',
                'menu' => get_post_meta(get_the_ID(), 'selfer_header_page_menu', true),
                'theme_location' => 'main-menu',
              ));
            } else {
              wp_nav_menu(array(
                'menu_class' => 'mainmenu',
                'container' => 'ul',
                'theme_location' => 'main-menu',
              ));
            }
            ?>

            <div class="seperator"></div>
            <div class="social-icons">
              <div class="header-social">
                <svg width="33px" height="33px" viewBox="0 0 33 33" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>16117298-8490-4AAA-BEC2-9551F2C821C6</title>
                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="home" transform="translate(-916.000000, -30.000000)">
                      <g id="header">
                        <g id="Group-4">
                          <g transform="translate(784.000000, 30.000000)">
                            <g id="phone" transform="translate(132.000000, 0.000000)">
                              <circle id="Oval" fill="#FFFFFF" cx="16.5" cy="17.5" r="15.5"></circle>
                              <path d="M28.1655244,4.83097944 C21.7209208,-1.61169049 11.2736494,-1.61014361 4.83097944,4.83452436 C-1.61169049,11.2791923 -1.61014361,21.7263994 4.83452436,28.1690693 C11.2791923,34.6117392 21.7263994,34.6101923 28.1690693,28.1655244 C31.263206,25.0704208 33.0009912,20.8729111 33.0000248,16.4964794 C32.999122,12.1207568 31.2601122,7.92460053 28.1655244,4.83097944 Z M24.9886943,22.984331 C24.9879853,22.98504 24.9872763,22.9858134 24.9865029,22.9865224 L24.9865029,22.9810439 L24.1504814,23.8115224 C23.0692802,24.9063876 21.4946259,25.3568505 19.9979599,24.9995224 C18.490079,24.5959169 17.0566415,23.9534482 15.7519814,23.0965439 C14.5398759,22.3218818 13.4165869,21.4163154 12.4024814,20.3960224 C11.4693935,19.4697665 10.6311162,18.4526962 9.89995991,17.3600224 C9.10022553,16.1842685 8.46723139,14.903456 8.01895991,13.5540009 C7.50507514,11.9687119 7.93091694,10.2291865 9.11898139,9.06052241 L10.0979599,8.08154389 C10.3701455,7.80813373 10.8124228,7.80716694 11.0857685,8.07935248 C11.0864775,8.08006147 11.0872509,8.08077045 11.0879599,8.08154389 L14.1789384,11.1725224 C14.4523486,11.444708 14.4533154,11.8869853 14.1811298,12.160331 C14.1804208,12.16104 14.1797119,12.161749 14.1789384,12.1625224 L12.3639384,13.9775224 C11.8431572,14.4926318 11.7776728,15.3111865 12.2099599,15.9025439 C12.866415,16.8034697 13.5928662,17.6512216 14.3824814,18.4380654 C15.2628466,19.3222333 16.2199111,20.1265439 17.2424599,20.8415869 C17.8333017,21.2537001 18.6343251,21.1842197 19.1454384,20.6765869 L20.8999169,18.8945869 C21.1721025,18.6211767 21.6143798,18.6202099 21.8877255,18.8923955 C21.8884345,18.8931044 21.8891435,18.8938134 21.8899169,18.8945869 L24.9864384,21.9965869 C25.259913,22.268708 25.2608798,22.7109208 24.9886943,22.984331 Z" id="Shape" fill="#FFD07B" fill-rule="nonzero"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="header-social">
                <svg width="35px" height="35px" viewBox="0 0 35 35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>7BF58474-DA3B-4BA6-B9B2-F1F4868B8A72</title>
                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="home" transform="translate(-871.000000, -30.000000)">
                      <g id="header">
                        <g id="Group-4">
                          <g transform="translate(784.000000, 30.000000)">
                            <g id="mail" transform="translate(87.000000, 0.000000)">
                              <path d="M17.5,0 C7.83571429,0 0,7.83571429 0,17.5 C0,27.1642857 7.83571429,35 17.5,35 C27.1642857,35 35,27.1642857 35,17.5 C35,7.83571429 27.1642857,0 17.5,0 Z" id="Shape" fill="#D1B6E7" fill-rule="nonzero"></path>
                              <g id="Group-17" transform="translate(8.000000, 11.000000)" fill="#FFFFFF">
                                <path d="M0.533811709,5.73763259e-14 L17.8961927,5.73763259e-14 C18.8190498,5.73763259e-14 18.3440498,1.18071429 17.8419069,1.48380952 C17.3397641,1.78690476 10.4047641,5.98047619 10.1469069,6.13428571 C9.8890498,6.28809524 9.5542879,6.365 9.21500219,6.365 C8.88024028,6.365 8.54547838,6.29261905 8.28309742,6.13428571 C8.02524028,5.98047619 1.08571647,1.78690476 0.588097423,1.48380952 C0.0904783756,1.18071429 -0.384521624,5.73763259e-14 0.533811709,5.73763259e-14 Z" id="Path"></path>
                                <path d="M18.4752403,12.6983333 C18.4752403,13.182381 17.8961927,13.8519048 17.4483355,13.8519048 L1.02690695,13.8519048 C0.583573614,13.8519048 -1.2937799e-13,13.182381 -1.2937799e-13,12.6983333 C-1.2937799e-13,12.6983333 -1.2937799e-13,4.49214286 -1.2937799e-13,4.27952381 C-1.2937799e-13,4.06690476 -0.00452162437,3.79095238 0.398097423,4.02619048 C0.968097423,4.36095238 7.9392879,8.47309524 8.28762123,8.67666667 C8.63595457,8.8802381 8.88024028,8.90738095 9.21952599,8.90738095 C9.5542879,8.90738095 9.79857361,8.8847619 10.1514308,8.67666667 C10.4997641,8.47309524 17.5116689,4.36095238 18.0816689,4.02619048 C18.4842879,3.79095238 18.4797652,4.06690476 18.4797652,4.27952381 C18.4752403,4.49214286 18.4752403,12.6983333 18.4752403,12.6983333 Z" id="Path"></path>
                              </g>
                            </g>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="header-social">
                <svg width="34px" height="35px" viewBox="0 0 34 35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>19E8E653-DF09-45F6-98FC-CDA0F222ADBC</title>
                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="home" transform="translate(-827.000000, -30.000000)">
                      <g id="header">
                        <g id="Group-4">
                          <g transform="translate(784.000000, 30.000000)">
                            <g id="facebook" transform="translate(43.000000, 0.000000)">
                              <circle id="Oval" fill="#FFFFFF" cx="17" cy="17" r="16"></circle>
                              <g>
                                <path d="M16.5107189,34.6695964 C24.0593029,34.6695964 33.0214378,27.8179012 33.0214378,18.9583333 C33.0214378,10.0987655 25.6341362,2.91666667 16.5214378,2.91666667 C7.40873943,2.91666667 -0.465378609,10.0987655 0.0214377973,18.9583333 C0.508254204,27.8179012 8.96213491,34.6695964 16.5107189,34.6695964 Z" id="Oval"></path>
                                <path d="M16.7658,0 C7.5064,0 0,7.51950579 0,16.7950722 C0,25.1141716 6.0444,31.370483 13.9696,32.7046083 L13.9696,20.2989792 L9.9252,20.2989792 L9.9252,15.6068012 L13.9696,15.6068012 L13.9696,12.146971 C13.9696,8.13257431 16.4172,5.94496151 19.9926,5.94496151 C21.705,5.94496151 23.1766,6.07278429 23.6038,6.12908241 L23.6038,10.3251958 L21.124,10.3263979 C19.18,10.3263979 18.8052,11.2516105 18.8052,12.6097777 L18.8052,15.604397 L23.4438,15.604397 L22.8388,20.296575 L18.8052,20.296575 L18.8052,32.9876944 C27.1004,31.9763317 33.5314,25.3736238 33.5314,16.7902638 C33.5314,7.51950579 26.025,0 16.7658,0 Z" id="Path" fill="#88B9EE" fill-rule="nonzero"></path>
                              </g>
                            </g>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="header-social">
                <svg width="33px" height="33px" viewBox="0 0 33 33" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>1C4D43BB-426F-4081-AB03-2E3F0559B5C3@2x</title>
                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="home" transform="translate(-784.000000, -30.000000)">
                      <g id="header">
                        <g id="Group-4">
                          <g transform="translate(784.000000, 30.000000)">
                            <g id="whatsapp">
                              <circle id="Oval" fill="#FFFFFF" cx="16.5" cy="16.5" r="15.5294118"></circle>
                              <path d="M16.504125,0 L16.495875,0 C7.3981875,0 0,7.40025 0,16.5 C0,20.109375 1.16325,23.45475 3.1411875,26.1710625 L1.084875,32.3008125 L7.4270625,30.273375 C10.036125,32.00175 13.1484375,33 16.504125,33 C25.6018125,33 33,25.5976875 33,16.5 C33,7.4023125 25.6018125,0 16.504125,0 Z M26.1050625,23.3000625 C25.707,24.424125 24.127125,25.356375 22.8669375,25.628625 C22.0048125,25.8121875 20.8786875,25.958625 17.0878125,24.387 C12.238875,22.378125 9.11625,17.4508125 8.872875,17.131125 C8.6398125,16.8114375 6.9135,14.5220625 6.9135,12.1543125 C6.9135,9.7865625 8.1159375,8.633625 8.600625,8.138625 C8.9986875,7.7323125 9.656625,7.5466875 10.28775,7.5466875 C10.4919375,7.5466875 10.6755,7.557 10.8405,7.56525 C11.3251875,7.585875 11.5685625,7.61475 11.88825,8.3799375 C12.2863125,9.339 13.2556875,11.70675 13.3711875,11.950125 C13.48875,12.1935 13.6063125,12.5235 13.4413125,12.8431875 C13.286625,13.1731875 13.1505,13.319625 12.907125,13.600125 C12.66375,13.880625 12.43275,14.095125 12.189375,14.39625 C11.966625,14.6581875 11.715,14.9386875 11.9955,15.423375 C12.276,15.89775 13.245375,17.4796875 14.672625,18.7501875 C16.5144375,20.389875 18.0076875,20.91375 18.541875,21.1365 C18.9399375,21.3015 19.4143125,21.2623125 19.705125,20.9529375 C20.0743125,20.554875 20.530125,19.894875 20.9941875,19.2451875 C21.3241875,18.7790625 21.7408125,18.7213125 22.1780625,18.8863125 C22.6235625,19.041 24.981,20.2063125 25.4656875,20.447625 C25.950375,20.691 26.2700625,20.8065 26.387625,21.0106875 C26.503125,21.214875 26.503125,22.1739375 26.1050625,23.3000625 Z" id="Shape" fill="#01C6A6" fill-rule="nonzero"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>

            </div>
          </div>
          <!--end navbar-nav-->
        </div>
        <!--end collapse-->
      </div>
      <!--end container-->
    </nav>
  <?php endif; ?>
