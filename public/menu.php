<?php 
include "connect.php";
$dastor = "select * from food";
$allfood = $connect->query($dastor);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
      <nav class=' p-3 bg-black/40 text-white border-b-[1px] border-b-white'>
      <div class='flex justify-between'>
        <img src="../public/images/logo.png" alt="" class='h-full w-14 rounded-full'>
        <ul class='flex flex-row gap-20 text-[20px] items-center'>
            <li><a href="home.php">Home</a></li>
            <li><a href="menu.php">our Meun</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
        <button class=' font-bold rounded-md px-6 text-[18px] bg-green-700 text-white '> <a href="insertAdmin.php">Login</a></button>
      </div>
     </nav>
     <!-- nav end -->
      <!-- menu start -->
       <?php
      if($allfood->num_rows>0){
        ?>
        <div class="w-full h-fit bg-[url(../public/images/burger.jpg)] bg-cover grid grid-cols-4 items-center justify-center">
              <?php 
            while($row = $allfood ->fetch_assoc()){
                ?>    
        <div class="flex flex-col items-center justify-center h-[70%] w-[80%] rounded bg-white/20">
                 <img class="h-54 w-[80%]" src="./images/<?php echo $row ['imgurl'] ?>" alt="">
                <div class="w-full flex gap-7 justify-around text-white">
                     <h1 class="text-green-700 text-2xl font-medium"><?php echo $row ['food_name'] ?></h1>
                     <h1 class="text-green-700 text-2xl font-medium"><?php echo $row ['price'] ?>AF</h1>
                </div>
                <button>
                <a href="more.php?id=<?php echo $row['food_id'] ?>">More</a>
                </button>
                 </div>
                <?php } ?>
             
              </div>


        <?php } ?>
</body>
</html>