<?php

namespace App\Controller;

use App\Model\ProductModel;

class ProductController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $products = $this->productModel->getAll();
        include_once 'src/View/product_list/list_products.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            include_once 'src/View/product_list/add.php';
        } else {
            $this->upload();
            $products_name = $_POST['products_name'];
            $salePrice = $_POST['salePrice'];
            $price = $_POST['price'];
            $img = $_FILES['img']['name'];
            //var_dump($img);die();
            $status = $_POST['status'];
            $this->productModel->add($products_name,$salePrice,$price,$img,$status);
            header("location:index.php");
        }
    }

    public function upload(){
        $target_dir = "img/";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        //var_dump($target_file);die();
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["img"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }  }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }


    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_GET['id'];
        }
        $this->productModel->deleteProducts($id);
//        header('location:index.php');
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productModel->get($id);
            include 'src/View/product_list/edit.php';
        } else {

            // Validate dữ liệu
            $errors = [];
            $fields = ['products_name', 'salePrice', 'price', 'status'];

            foreach ($fields as $field) {
                if (empty($_POST[$field])) {
                    $errors[$field] = 'Không được để trống';
                }
            }

            $id = $_POST['id'];
            if (empty($errors)) {
                if (isset($_FILES["img"])) {
                    $target_dir = "img/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                }
                $products_name = $_POST['products_name'];
                $salePrice = $_POST['salePrice'];
                $price = $_POST['price'];
                $status = $_POST['status'];
                $this->productModel->update($id,$products_name, $salePrice, $price, $target_file, $status);
//                header('Location: http://localhost/casestudy222/index.php');
            } else {
            $product = $this->productModel->get($id);
            include 'src/View/product_list/edit.php';
        }
    }
}

    public function search()
    {
        $search = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $search = $_POST['search'];
            $products = $this->productModel->search($search);
//            var_dump($products);
            include "src/View/product_list/list_products.php";
        }

    }
}

