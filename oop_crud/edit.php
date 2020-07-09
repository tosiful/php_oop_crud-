<?php

require_once 'classes/user.php';

$user=new user();
$id=$_GET['id'];
$data=$user->edit_user($id);

$data=mysqli_fetch_assoc($data);




if(isset($_POST['save'])){


    $user->edit_user_save($_POST);




}






?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">

    <table>
        <tr>



            <td>

                <input type="text" name="name" placeholder="Name" value="<?=$data['name']?>"  />
                <input type="hidden" name="id" value="<?=$data['id']?>" />

            </td>




        </tr>


        <tr>
            <td>    <input type="email" name="email" placeholder="Email" value="<?=$data['email']?>" />
            </td>
        </tr>



        <tr>
            <td>    <input type="submit" name="save" value="update"/>
            </td>
        </tr>
    </table>






</form>






</body>
</html>
