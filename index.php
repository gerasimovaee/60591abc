<?php
$conn = null;
require ('dbconnect.php');
require ('auth.php');
require ('components/header.php');

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

switch ($_GET['page'] ?? null){
    case "catalog":{
        require "components/products_list.php";
        break;
    }

    case "product":{
        require "components/product_info.php";
        break;
    }
    case "login":{
        require "components/login_form.php";
        break;
    }

    default:{
        require('components/company_info.php');
    }
}
require('components/message.php');
require('components/footer.php');

?>