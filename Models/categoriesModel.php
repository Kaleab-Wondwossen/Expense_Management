<?php

class CategoriesModel
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'expense_management';
    private $connection;
    private $cursor;

    public function __construct()
    {
        $this->connection = new mysqli($this->host, $this->user, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function create($name)
    {
        $sql = "INSERT INTO categories (name) VALUES (?)";

        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("s", $name);

        if ($stmt->execute()) {
            return true;
        } else {
            echo "Error: " . $stmt->error;
            return false;
        }
    }

    public function retrieve()
    {
        $sql = "SELECT * FROM categories";

        $result = $this->connection->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            echo "0 results";
            return null;
        }
    }

    public function update($id, $name)
    {
        $sql = "UPDATE categories SET name = ? WHERE id = ?";

        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("si", $name, $id);

        if ($stmt->execute()) {
            return true;
        } else {
            echo "Error: " . $stmt->error;
            return false;
        }
    }

    public function get($id)
    {
        $sql = "SELECT * FROM categories WHERE id = ?";

        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("i", $id);

        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            echo "0 results";
            return null;
        }
    }
    public function delete($id)
    {
        $sql = "DELETE FROM categories WHERE id = ?";

        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            return true;
        } else {
            echo "Error: " . $stmt->error;
            return false;
        }
    }
    public function __destruct()
    {
        $this->connection->close();
    }

}
$categories_model = new CategoriesModel();
// Create categories
//$categories_model->create('food');
// 
// $drinks = 'drinks';
// $categories_model->create($drinks);
// $categories_model->create('transport');
// Delete categories
// $categories_model->delete(5);
// $categories_model->delete(6);
// $categories_model->delete(7);
// $categories_model->delete(8);
// $categories_model->delete(9);
?>