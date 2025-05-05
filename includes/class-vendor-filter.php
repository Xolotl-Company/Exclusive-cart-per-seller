<?php
// Evitar acceso directo
if ( ! defined( 'ABSPATH' ) ) exit;

class Carrito_Exclusivo_Vendor_Filter {

    public function __construct() {
        add_action('elementor/query/vendor_products_only', [$this, 'filtrar_productos_por_vendedor']);
    }

    public function filtrar_productos_por_vendedor($query) {
        if (!function_exists('dokan_get_store_info')) return;

        $vendor_id = get_query_var('author');

        if (!$vendor_id && function_exists('dokan')) {
            $store_user = dokan()->vendor->get(get_current_user_id());
            if ($store_user) {
                $vendor_id = $store_user->get_id();
            }
        }

        if ($vendor_id) {
            $query->set('author', $vendor_id);
        }
    }
}
