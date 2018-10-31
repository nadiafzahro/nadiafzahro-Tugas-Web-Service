<?php
include '../config/class.php';

//contoh panggil update
$data = ["id"=>"cus_Dt4l4WdKLZCR8w",
              "description"=>"cus order","email"=>"nadia.fzahro97@gmail.com"];
    $result = $stripe->update_customer($data['email'],$data['description'],$data['id']);
    echo "<pre>"; print_r($result);

 ?>
