<?php
require_once "students.php";

$userupdate=new students();

if(isset($_POST['submit2'])){
    if($userupdate){
        $id=$_GET['ig'];
        $name=$_POST['name'];
        $age=$_POST['age'];
        $userupdate->setname($name);
        $userupdate->setage($age);
        $userupdate->updated($id);
        header('Location:index.php');
    }else{
        echo "no";
    }



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
<div>
    <form action="" method="post">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="age" placeholder="age">
        <button type="submit" name="submit2">updated</button>
    </form>
</div>
</body>
</html>
