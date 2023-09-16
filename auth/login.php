<?php

include "../connect.php";

$email = filterRequest("email");
$password = filterRequest("password");

$stmt = $con->prepare("SELECT * FROM users WHERE `username` = ? AND `email` = ? ");
$stmt->execute(array( $password , $email));

$count = $stmt->rowCount();

if ($count > 0) {
    echo json_encode(array("status" => "Success"));
} else {
    echo json_encode(array("status" => "Failed"));
}
