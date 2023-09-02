<?php

include "connect.php";


//جلب جميع البيانات من قاعدة البيانات

// $stmt = $con->prepare("SELECT * FROM users");
// $stmt->execute();
// $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
// $count = $stmt->rowCount();

// echo "<pre>";
// print_r($users);
// echo "</pre>";

// echo json_encode(array("message" => "How Are You"));



//إضافة على قاعدة البيانات

// $stmt = $con->prepare("INSERT INTO `users`(`username`, `email`) VALUES (?,?)");
// $stmt->execute(array("Yaser","yaser@gmail.com"));

// $count = $stmt->rowCount();

// if ($count > 0) {
//     echo "Success";
// } else {
//     echo "Falid";
// }

//تحديث صف في قاعدة البيانات

// $stmt = $con->prepare("UPDATE `users` SET username = ? , email = ?  WHERE id= ?");
// $stmt->execute(array("Sanad","sanad@gmail.com",1));

// $count = $stmt->rowCount();

// if ($count > 0) {
//     echo "Success";
// } else {
//     echo "Falid";
// }


//حذف صف في قاعدة البيانات

// $stmt = $con->prepare("DELETE FROM users WHERE id= ?");
// $stmt->execute(array(2));

// $count = $stmt->rowCount();

// if ($count > 0) {
//     echo "Success";
// } else {
//     echo "Falid";
// }
