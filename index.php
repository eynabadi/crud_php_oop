<?php
require_once 'students.php';
$user=new students();
if(isset($_POST['submit1'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $user->setname($name);
    $user->setage($age);
    $user->insertdata();
    header('Location:index.php');

}
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    if($user->deletedata($id)){
        header('Location:index.php');
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
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body>
<div class="w-full max-w-xs">
    <form  method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                name
            </label>
            <input name="name"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="age">
                age
            </label>
            <input name="age" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
            <p class="text-red-500 text-xs italic">age</p>
        </div>
        <div class="flex items-center justify-between">
            <button name="submit1" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
               post students
            </button>

        </div>
    </form>

</div>
<div>
    <table class="border-collapse border border-slate-500 w-[900px] ...">
        <thead>
        <tr>
            <th class="border border-slate-600 ...">name</th>
            <th class="border border-slate-600 ...">age</th>
            <th class="border border-slate-600 ...">delete</th>
            <th class="border border-slate-600 ...">update</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($user->feacthdata() as $key=>$value):?>
        <tr>
            <td class="border border-slate-700 ..."><?php echo $value['name']?></td>
            <td class="border border-slate-700 ..."><?php echo $value['age']?></td>
            <td>    <a  href="?delete=<?php echo $value['id']?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
                  delete
                </a></td>
            <td>    <a href="crud.php?update=<?php echo $value['id']?>"  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
                    update
                </a></td>
        </tr>

            </tr>
        <?php endforeach;?>

        </tbody>
    </table>
</div>
</body>
</html>