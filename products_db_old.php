<?php

require('products_db.php');
require('products_db_old.php');
require('components/header.php');

$id = $_GET['product_id'];


function get_product_attribute($id, $attr) {
    $products = get_products();
    $result = $products[$id][$attr] ?? null;
    return $result;
}
function get_product_title($id) {
    return get_product_attribute($id, 'title');
}
function get_img_url($id) {
    return get_product_attribute($id, 'url');
}