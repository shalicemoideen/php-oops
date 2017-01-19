<?php
include('includes/db.class.php');
$bdd = new db();

$query = "SELECT user_id, user_name,user_password,user_email FROM users WHERE user_email = ?";
$data = array('shalicemoideen@gmail.com');

$User = $bdd->getOne($query,$data); 
print_r($User);
