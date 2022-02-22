<?php

namespace App\model;

class ProductModel extends BaseModel
{
    public $table = "products";

    public function create($product)
    {
        $sql = "insert into products(productCode,name,type,price,quantity,dateCreated,description) values (?,?,?,?,?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $product['productCode']);
        $stmt->bindParam(2, $product['name']);
        $stmt->bindParam(3, $product['type']);
        $stmt->bindParam(4, $product['price']);
        $stmt->bindParam(5, $product['quantity']);
        $stmt->bindParam(6, $product['dateCreated']);
        $stmt->bindParam(7, $product['description']);
        $stmt->execute();
    }


    public function update($request)
    {
        $sql = "update  products set productCode = ?,name = ?,type = ?,price = ?,quantity = ?,dateCreated = ?,description = ? where id = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindValue(1, $request['productCode']);
        $stmt->bindValue(2, $request['name']);
        $stmt->bindValue(3, $request['type']);
        $stmt->bindValue(4, $request['price']);
        $stmt->bindValue(5, $request['quantity']);
        $stmt->bindValue(6, $request['dateCreated']);
        $stmt->bindValue(7, $request['description']);
        $stmt->bindValue(8, $request["id"]);
        $stmt->execute();
    }
}