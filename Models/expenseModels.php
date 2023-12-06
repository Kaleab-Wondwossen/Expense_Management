<?php

class ExpenseModel
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'expense_management';
    private $connection;

    public function __construct()
    {
        $this->connection = new mysqli($this->host, $this->user, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function createExpense($expense)
    {
        $sql_query = "INSERT INTO expense (amount, date_,category_id) VALUES (?, ?,?)";

        $stmt = $this->connection->prepare($sql_query);
        $stmt->bind_param("dss", $expense['amount'], $expense['date_'], $expense['category_id']);
        $stmt->execute();

        return $stmt->affected_rows;
    }

    public function readExpenses()
    {
    $sql_query = "SELECT * FROM expense";
    $result = $this->connection->query($sql_query);

    $expenses = []; // Initialize the array

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $expenses[] = $row;
        }
        return $expenses;
    } else {
        return false;
    }
    }

    public function updateExpense($expense)
    {
        $sql_query = "UPDATE expense SET amount = ?, date_ = ? WHERE category_id = ?";

        $stmt = $this->connection->prepare($sql_query);
        $stmt->bind_param("dss", $expense['amount'], $expense['date_'], $expense['category_id']);
        $stmt->execute();

        return $stmt->affected_rows;
    }

    public function deleteExpense($expense_id)
    {
        $sql_query = "DELETE FROM expense WHERE id = ?";

        $stmt = $this->connection->prepare($sql_query);
        $stmt->bind_param("i", $expense_id);
        $stmt->execute();

        return $stmt->affected_rows;
    }

    function searchExpenses($keyword)
    {
    $sql_query = "SELECT * FROM expense WHERE amount LIKE ? OR date_ LIKE ? OR category_id LIKE ?";

    $stmt = $this->connection->prepare($sql_query);
    $stmt->bind_param("sss", $keyword, $keyword, $keyword);
    $stmt->execute();

    $result = $stmt->get_result();

    $expenses = []; // Initialize the array

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $expenses[] = $row;
        }
        foreach ($expenses as $expense) {
            echo "Amount: " . $expense['amount'] . " Date: " . $expense['date_'] . " Category ID: " . $expense['category_id'] . "<br>";
        }
        // return $expenses;
    } else {
        return false;
    }
    }

    public function __destruct()
    {
        $this->connection->close();
    }
}
//testing the DB
// Create an expense
// $expense = array(
//     'amount' => 100,
//     'date_' => '2022-04-15',
//     'category_id' => 10
// );
// $expense_model->createExpense($expense);

// Read all expenses
// $expenses = $expense_model->readExpenses();
// print_r($expenses);

// Update an expense
// $expense = array(
//     'amount' => 200,
//     'date_' => '2022-04-15',
//     'category_id' => 1
// );
//$expense_model->updateExpense($expense);

// Delete an expense
//$expense_model->deleteExpense(1);
//$expense_model->deleteExpense(2);

?>