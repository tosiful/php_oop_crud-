<?php

class user
{
 public function __construct()
 {
     $host="localhost";
     $user="root";
     $password="";
     $database="oop";

        #link ta variable hisebe kaj korbe,,'this' ta hosse object
     $this->link=mysqli_connect($host,$user,$password,$database);





 }

#Data insert korteci
 public function save_user($data){

     $name=$data['name'];
     $email=$data['email'];
     $password=$data['password'];

     $query="INSERT INTO `users`( `name`, `email`, `password`) VALUES ('$name','$email','$password')";
     mysqli_query($this->link,$query);

     $message="Data save succusfull";
     return $message;


 }
public  function all_user(){

    return mysqli_query($this->link,"SELECT * FROM `users`");


}


    public  function delete_user($id){

         mysqli_query($this->link,"DELETE FROM `users` WHERE `id`='$id'");
        header('Location:index.php');

    }



    public  function edit_user($id){

        return mysqli_query($this->link,"SELECT * FROM `users` WHERE `id`='$id'");



    }



    public  function edit_user_save($data){

        $name=$data['name'];
        $email=$data['email'];
        $id=$data['id'];


         mysqli_query($this->link,"UPDATE `users` SET `name`='$name',`email`='$email' WHERE `id`='$id'");

        header('Location:index.php');







    }







}