<?php

require_once 'classes/user.php';

$user=new user();

$id=$_GET['id'];


$user->delete_user($id);




