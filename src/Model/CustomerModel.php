<?php
namespace App\Model;
use PDO;

class CustomerModel
{

    protected \PDO $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM customer";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function add($name,$age, $address, $phone, $email)
    {
       // var_dump($name."<br>");
//        var_dump($email); die();
//        , `address`,`phonenumber`,`email`
        $sql = "INSERT INTO `customer`( `products_name`, `age`, `address`, `phone`, `email`) VALUES (?, ?, ?, ?, ?)";
 $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $products_name);
        $stmt->bindParam(2, $age);
        $stmt->bindParam(3, $address);
        $stmt->bindParam(4, $phone);
        $stmt->bindParam(5, $email);
//        $stmt->bindParam(':address', $address);
//        $stmt->bindParam(':phonenumber', $phonenumber);
//        $stmt->bindParam(':email', $email);
        return $stmt->execute();

    }

    public function delete($id)
    {
        $sql = 'DELETE FROM customer WHERE Customer_id = ?';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $Customer_id);
        return $stmt->execute();
    }

    public function update($id, $customer)
    {
        $sql = "UPDATE customer SET name = ?, age = ?, address = ?,phone = ?, email = ?  WHERE id = ?";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $customer->name);
        $stmt->bindParam(2, $customer->age);
        $stmt->bindParam(3, $customer->address);
        $stmt->bindParam(4, $customer->phone);
        $stmt->bindParam(5, $customer->email);
        $stmt->bindParam(6, $id);
        return $stmt->execute();
    }

}