<?php
namespace App\Model;
use PDO;

class ProductModel
{

    protected \PDO $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM products order by price ASC";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function add($products_name, $salePrice, $price, $img,$status)
    {
        $sql = "INSERT INTO `products`( `products_name`, `salePrice`, `price`, `img`,`status`) VALUES (?,?,?,?,?)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $products_name);
       //var_dump($name);
        $stmt->bindParam(2, $salePrice);
      // var_dump($salePrice);
       // die();
        $stmt->bindParam(3, $price);
       // var_dump($price);
        //die();
        $stmt->bindParam(4, $img);
        // var_dump($img);
        //die();
        $stmt->bindParam(5, $status);
        $stmt->execute();

    }

    public function deleteProducts($products_id)
    {
        $sql = "DELETE FROM products WHERE products_id=:products_id";
       // var_dump(22222);
       /// die();
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':products_id', $products_id);
        $stmt->execute();
    }

    public function update($products_id,$products_name, $salePrice, $price, $img,$status)
    {
        $sql = "UPDATE products SET products_name = ?, salePrice = ?, price = ?,img = ?, status = ?  WHERE products_id =?";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $products_name);
        $stmt->bindParam(2, $salePrice);
        $stmt->bindParam(3, $price);
        $stmt->bindParam(4, $img);
        $stmt->bindParam(5, $status);
        $stmt->bindParam(6, $products_id);
        return $stmt->execute();
    }

    function get($id){
            $sql="SELECT products_id, products_name, salePrice, price, img,status FROM products WHERE products_id=?";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function search($search){
        $sql ="SELECT * FROM products WHERE products_name LIKE :products_name";
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(":products_name" ,'%'. $search .'%' );
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}