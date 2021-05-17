<?php
namespace App\Controller;

use App\Model\CustomerModel;

class CustomerController
{
    protected  $customerModel;

    public function __construct()
    {
        $this->customerModel= new CustomerModel();
    }

    public function index()
    {
        $customers = $this->customerModel->getAll();
        include_once 'src/View/customer_list/list.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            //$products = $this->customerModel->getAll();
            include_once 'src/View/customer_list/add.php';
            //echo "da den day";
        }else {
            //var_dump("ddddddeee");die();
            $name = $_POST['name'];
            //var_dump($name);
            //var_dump("ddddddeee");die();
            $age = $_POST['age'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
             $this->customerModel->add($name,$age,$address,$phone,$email);
            header("location:index.php");

        }
    }
  //  public function delete()
 //   {
  //      $id = $_GET['id'];
  //      $this->customerModel->delete($id);
//        require_once "src/View/customer_list/delete.php";
//        header('Location: index.php');
 //   }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $customer   = $this->customerModel->get($id);
            include 'src/View/customer_list/edit.php';
        } else {

            // Validate dữ liệu
            $errors = [];
            $fields = ['name', 'age', 'address', 'phone', 'email'];

            foreach ($fields as $field) {
                if (empty($_POST[$field])) {
                    $errors[$field] = 'Không được để trống';
                }
            }

            $id = $_POST['id'];
            if (empty($errors)) {
                $customer = new Customer($_POST['name'], $_POST['age'], $_POST['address'], ['phone'], ['email']);
                $this->customerModel->update($id, $customer);
                header('Location: index.php');
            } else {
                $customer= $this->customerModel->get($id);
                include 'src/View/customer_list/edit.php';
            }
        }
    }
}