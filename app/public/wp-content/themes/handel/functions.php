<?php
  function handel_add_woocommerce_support() {
    add_theme_support('woocommerce');
  }
  add_action('after_setup_theme', 'handel_add_woocommerce_support');

  function handel_css() {
    wp_register_style('handel-style', get_template_directory_uri() . '/style.css', [], '1.0.0', false);
    wp_enqueue_style('handel-style');
  }
  add_action('wp_enqueue_scripts', 'handel_css');

  function executar_na_home() { ?>

  <div>Teste</div>
  <h2>Segundo Título</h2>

  <?php }

  add_action('dentro_da_home', 'executar_na_home');

  function executar_na_home_2($arg1, $arg2) {
    echo $arg1 . 'Segunda vez na home' . $arg2;
  }
  add_action('dentro_da_home', 'executar_na_home_2', 10, 2);

  function mudar_titulo($titulo) {
    echo '<h2>' . $titulo . '</h2>';
  }

  add_filter('titulo_home', 'mudar_titulo');

  function mudar_the_title($title) {
    return $title . ' Handel';
  }
  add_filter('the_title', 'mudar_the_title');
?>
