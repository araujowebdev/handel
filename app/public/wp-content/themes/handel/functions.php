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

function mudar_classe_preco() {
  return 'price';
}
add_filter('woocommerce_product_price_class', 'mudar_classe_preco');

function adicionar_antes_do_produto() {
  echo '<div class="minha-classe">';
}
add_action('woocommerce_single_product_summary', 'adicionar_antes_do_produto', -1);

function adicionar_antes_do_produto_2() {
  echo '</div>';
}
add_action('woocommerce_single_product_summary', 'adicionar_antes_do_produto_2', 20);

?>