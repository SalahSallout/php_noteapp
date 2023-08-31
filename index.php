<?php

include "connect.php";


$stmt = $con->prepare("SELECT email FROM users WHERE id = 2");
$stmt->execute();
$user = $stmt->fetchColumn();

$count = $stmt->rowCount();

echo $count;
