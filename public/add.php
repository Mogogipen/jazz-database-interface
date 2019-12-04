<?php

require "./class/db.php";

$conn = new Database();

$conn->add($_POST);

?>