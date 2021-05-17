<?php
namespace App\Controller;

use App\Model\BillModel;

class BillController
{
    protected $BillModel;

    public function __construct()
    {
        $this->BillModel = new BillModel();
    }

    public function index()
    {
        $bills = $this->BillModel->getAll();
        include "src/View/product_list/list_products.php";
    }
}