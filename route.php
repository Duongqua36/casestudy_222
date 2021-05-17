<?php

use App\Controller\BillController;
use App\controller\CustomerController;
use App\Controller\ProductController;

require_once 'src/Controller/ProductController.php';
require_once 'src/Controller/CustomerController.php';
require_once 'src/Controller/BillController.php';

$page = $_REQUEST['page'] ?? null;
$billController = new BillController();
$productController = new ProductController();
$customerController = new CustomerController();
switch ($page) {
    case 'bills':
        $billController->index();
        break;
    case 'products':
        $productController->index();
        break;
    case 'add_products':
        $productController->Add();
        break;
    case 'edit_products':
        $productController->edit();
        break;
    case 'delete_products':
        $productController->delete();
        break;
    case 'search_products':
        $productController->search();
        break;
    case 'customers':
        $customerController->index();
        break;
    case 'add_customers':
        $customerController->add();
        break;

}

