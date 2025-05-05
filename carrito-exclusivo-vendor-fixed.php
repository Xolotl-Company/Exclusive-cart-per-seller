<?php
/**
 * Plugin Name: Carrito Exclusivo por Vendedor (Final)
 * Description: Filtra productos por vendedor en Elementor usando el Query ID 'vendor_products_only'. Compatible con Dokan y Elementor Pro.
 * Version: 1.3
 * Author: Tu Nombre o Marca
 */

if ( ! defined( 'ABSPATH' ) ) exit;

add_action('elementor/init', function() {
    require_once plugin_dir_path(__FILE__) . 'includes/class-vendor-filter.php';
    new Carrito_Exclusivo_Vendor_Filter();
});
