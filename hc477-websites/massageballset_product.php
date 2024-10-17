<?php
class MassageBallSetProduct {
    private $conn;
    private $table = "MassageBallSetProducts";

    public $ProductID;
    public $ProductCode;
    public $ProductName;
    public $Description;
    public $Color;
    public $CategoryID;
    public $WholesalePrice;
    public $ListPrice;
    public $DateCreated;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table . " (ProductCode, ProductName, Description, Color, CategoryID, WholesalePrice, ListPrice, DateCreated)
                  VALUES (:ProductCode, :ProductName, :Description, :Color, :CategoryID, :WholesalePrice, :ListPrice, NOW())";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':ProductCode', $this->ProductCode);
        $stmt->bindParam(':ProductName', $this->ProductName);
        $stmt->bindParam(':Description', $this->Description);
        $stmt->bindParam(':Color', $this->Color);
        $stmt->bindParam(':CategoryID', $this->CategoryID);
        $stmt->bindParam(':WholesalePrice', $this->WholesalePrice);
        $stmt->bindParam(':ListPrice', $this->ListPrice);
        return $stmt->execute();
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function update() {
        $query = "UPDATE " . $this->table . " SET ProductName = :ProductName, ListPrice = :ListPrice
                  WHERE ProductCode = :ProductCode";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':ProductCode', $this->ProductCode);
        $stmt->bindParam(':ProductName', $this->ProductName);
        $stmt->bindParam(':ListPrice', $this->ListPrice);
        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE ProductCode = :ProductCode";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':ProductCode', $this->ProductCode);
        return $stmt->execute();
    }
}
?>
