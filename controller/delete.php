<?php
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $table = $_POST['table'];
    $action = $_POST['action'];

    if ($action == 'delete') {
        $deleteQuery = "DELETE FROM $table WHERE id = $id";

        $result = mysqli_query($conn, $deleteQuery);

        if ($result) {
            echo "Data deleted successfully.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Invalid action.";
    }
} else {
    echo "Invalid request.";
}
