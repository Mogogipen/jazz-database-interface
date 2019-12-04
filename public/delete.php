<?php

require "./class/db.php";

$conn = new Database();

if ($_SERVER["QUERY_STRING"] != "") { 
    $conn->delete($_SERVER["QUERY_STRING"]);
    echo "Success";
}

?>