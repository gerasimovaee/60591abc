<?php
require ('dbconnect.php');
require ('auth.php');
require ('components/header.php');

switch ($_GET['page']){
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