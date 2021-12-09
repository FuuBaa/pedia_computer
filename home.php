<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedia Computer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="pedia">
        <h4>Pedia Computer</h4>
        <div class="btn1">
            <a href="logout.php">
            <button class="logout" style="background-color: #FEA735; border-radius: 6px; border: 1px solid black; ">Logout</button>
            </a>
        </div>     
    </div>
    <div class="home">
        <p>Home/Ecommerce</p>
    </div>
    <div class="page">
        <div class="text">
            <p>2021's Best Selling Gaming Categoris </p>
            <img src="lady-employee-doing-video-meeting-2194238-0.png" alt="">
        </div>
        <img src="lady-employee-working-in-office-2194224-0.png" alt="">
    </div>
    <div class="categories">
        <p>Categoris</p>
    </div>
    <div class="button5" style="margin-left:18px; margin-bottom: 50px;">
        <button style="background-color: #EC840B; border-radius: 10px; width: 75px; height: 30px; border: none;">Mouse</button>
        <button style="background-color: #EC840B; border-radius: 10px; width: 85px; height: 30px; border: none;">Headset</button>
        <button style="background-color: #EC840B; border-radius: 10px; width: 95px; height: 30px; border: none;">Keyboard</button>
        <button style="background-color: #EC840B; border-radius: 10px; width: 85px; height: 30px; border: none;">Monitor</button>
        <button style="background-color: #EC840B; border-radius: 10px; width: 70px; height: 30px; border: none;">Vga</button>
    </div>
    <div class="search" style="margin-bottom: 100px; margin-left: 58px;">
        <input style="height:35px; border-radius:10px; width:250px; padding-left:10px;" type="text" placeholder="search...">
    </div>
    <div class="produk">
        <a href="rtx.html">
        <div class="rtx" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width: 300px; height: 250px; border-radius: 15px; ">
            <img style="padding: 40px 60px;" src="rtx.png" alt="">
        </div>
        </a>
        <a href="processor.html">
        <div class="intel" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width: 300px; height: 250px; border-radius: 15px;">
            <img style="padding: 40px 60px;" src="processor.png" alt="">
        </div>
        </a>
        <a href="keyboard.html">
        <div class="Keyboard" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width: 300px; height: 250px; border-radius: 15px;">
            <img style="padding: 40px 60px;" src="keyboard.png" alt="">
        </div>
        </a>
    </div>
    <div class="produk2">
        <a href="monitor.html">
        <div class="monitor" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width: 300px; height: 250px; border-radius: 15px;">
            <img style="padding: 40px 30px;" src="monitor.png" alt="">
        </div>
        </a>
        <a href="headset.html">
        <div class="headset" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width: 300px; height: 250px; border-radius: 15px;">
            <img style="padding: 40px 60px;" src="headset.png" alt="">
        </div>
        </a>
        <a href="mouse.html">
        <div class="mouse" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width: 300px; height: 250px; border-radius: 15px;">
            <img style="padding: 40px 36px;" src="mouse.png" alt="">
        </div>
        </a>
    </div>
    <div class="produk3">
        <a href="kursi_gaming.html">
        <div class="kursi" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width: 300px; height: 250px; border-radius: 15px;">
            <img style="margin-top: -80px; margin-left: -38px;" src="kursi.png" alt="">
        </div>
        </a>
        <a href="mic.html">
        <div class="mic" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width: 300px; height: 250px; border-radius: 15px;">
            <img style="padding: 40px 60px;" src="mic.png" alt="">
        </div>
        </a>
        <a href="mousepad.html">
        <div class="mousepad" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width: 300px; height: 250px; border-radius: 15px;">
            <img style="margin-top: -60px; margin-left: 10px;" src="mousepad.png" alt="">
        </div>
        </a>
    </div>
    <div class="akhir" style="margin-top: 150px; display: flex; justify-content: space-around;">
        <div class="bag1" style="width: 15%;">
            <p style="font-family: 'Poppins', sans-serif; ">About pedia Computer</p>
            <br>
            <img style="float: left; margin-right: 20px;" src="True.png" alt="">
            <p style="margin-top: 16px;">@pedia_computer</p>
            <br>
            <br>
            <img style="float: left; margin-right: 20px;"src="Social media logo.png" alt="">
            <p style="margin-top: 16px; margin-left: 20px;">082387779000</p>
        </div>
        <div class="bag2">  
            <p>OUR COMMUNITY</p>
            <p style="margin-top: 100px;">Community </p>
        </div>
        <div class="bag3">
            <p>HELP</p>
            <p style="margin-top: 100px;">Help Center</p>
        </div>
        <div class="bag4">
            <p>Pedia Computer</p>
            <p style="margin-top: 100px;">Teams</p>
        </div>
    </div>
</body>
</html>