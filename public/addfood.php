<?php
include("connect.php");

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $fName = $_POST["fName"];
    $price = $_POST["price"];
    $imgurl = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["name"];
    $folder = "./images/".$imgurl;
    $size = $_POST["size"];

    $select = "SELECT * FROM food WHERE food_name= '$fName'";
    $selectedFood = $connect->query($select);
    if($selectedFood->num_rows === 0){
        $command = "INSERT INTO food(food_name,price,imgurl) VALUES('$fName','$price','$imgurl')";
        move_uploaded_file($folder,$tempname);
        if($connect->query($command)===true){
            $selectid = "SELECT food_id FROM food WHERE food_id= '$fName'";
            $foodid = $connect->query($selectid);
            $id = $foodid->fetch_assoc();
            $insertsize = "INSERT INTO food_size(food_id,size) VALUES('$id','$size')";
            if($connect->query($insertsize)===true){
                header("location:home.php");
            }
            else{
                header("location:addfood.php");
            }

        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add food</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
    <div class="h-screen w-full flex justify-center items-center">
        <form action=<?php echo $_SERVER["PHP_SELF"] ?> enctype="multipart/form-data" method="post"  class="shadow-md flex flex-col items-center gap-3 p-4 rounded h-[60%] w-[40%]">
            <h1 class="text-center font-bold text-3xl text-blue-700 p-2">Add Food</h1>
            <input type="text" name="fName" placeholder=" Enter food name" class="border rounded-full focus:outline-blue-700 focus:outline-1 w-[50%] p-2 outline-0 ">
            <input type="text" name="price" placeholder=" Enter the price" class="border rounded-full focus:outline-blue-700 focus:outline-1 w-[50%] p-2 outline-0 ">
            <input type="file" name="image" placeholder=" Enter food name" class="border rounded-full focus:outline-blue-700 focus:outline-1 w-[50%] p-2  outline-0">
            <select name="size" class="border  rounded-full w-[50%] p-2  outline-0 ">
                <option class="" value="small">small</option>
                <option class="" value="medium">medium</option>
                <option class="" value="large">large</option>
            </select>
            <button class="px-6 w-[50%] hover:cursor-pointer rounded-full py-2 bg-blue-700 text-white font-bold">Save</button>
        </form>
    </div>
</body>
</html>