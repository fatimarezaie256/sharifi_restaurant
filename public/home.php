<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
    <style>
        #hero{
            background-image: url('../public/images/hero.jpg');
            background-repeat:no-repeat;
        }
    </style>
</head>
<body>
    <div class="h-screen bg-center bg-conic-180  bg-cover w-full" id="hero">
    <!-- nav  started -->
     <nav class=' p-3 bg-black text-white border-b-[1px] border-b-white'>
      <div class='flex justify-between'>
        <img src="../sharifi class diagram.png" alt="" class='h-12 w-12 rounded-full'>
        <ul class='flex flex-row gap-20 text-[20px] items-center'>
            <li><a href="home.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
        <button class=' font-bold rounded-md px-6 text-[18px] bg-green-700 text-white '> <a href="insertAdmin.php">Login</a></button>
      </div>
     </nav>
     <!-- nav ended -->
      <!-- hero started -->
      <h1 class="text-8xl moto font-bold p-20" >The Delicious Way <span class="block ">to Eat <i>Healthy.</i></span></h1>
      <h1 class="text-white pl-20 text-[20px] -mt-10 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente<span class="block "> fuga eaque voluptas temporibus provident hic aliquid nemo officia  </span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
      <button class="px-5 ml-20 mt-8 hover:cursor-pointer py-4 font-bold bg-green-700 text-white transition-colors duration-700 rounded-md hover:bg-orange-400 hover:opacity-90"><a href="insertAdmin.php">Get Started</a></button>
    </div>

       <!-- hero ended -->
        
</body>
</html>