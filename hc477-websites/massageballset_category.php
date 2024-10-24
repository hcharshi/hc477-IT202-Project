<?php
class MassageBallSetCategory {
    private $conn;
    private $table = "MassageBallSetCategories";

    public $CategoryID;
    public $CategoryCode;
    public $CategoryName;
    public $AisleNumber;
    public $DateCreated;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table . " (CategoryCode, CategoryName, AisleNumber, DateCreated)
                  VALUES (:CategoryCode, :CategoryName, :AisleNumber, NOW())";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':CategoryCode', $this->CategoryCode);
        $stmt->bindParam(':CategoryName', $this->CategoryName);
        $stmt->bindParam(':AisleNumber', $this->AisleNumber);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function update() {
        $query = "UPDATE " . $this->table . " 
                  SET CategoryName = :CategoryName, AisleNumber = :AisleNumber
                  WHERE CategoryCode = :CategoryCode";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':CategoryCode', $this->CategoryCode);
        $stmt->bindParam(':CategoryName', $this->CategoryName);
        $stmt->bindParam(':AisleNumber', $this->AisleNumber);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE CategoryCode = :CategoryCode";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':CategoryCode', $this->CategoryCode);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>