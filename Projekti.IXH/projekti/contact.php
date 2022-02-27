<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="contact.css">
<link rel="stylesheet" href="styleslider.css">
</head>
<body>
    <div class="header">
        <ul class="opsions">
            <li id="li-opsions">MEN</li>
            <li id="li-opsions">WOMEN</li>
            <li id="li-opsions">KIDS</li>
        </ul>
        <div class="header-logo">
         <div class="slider">
        <div class="slider-content">
            <img id="jordanlogo" src="img/jordanlogo.jpg" alt="">
        </div>
        <div class="slider-content">
            <img id="jordanlogo" src="img/jordanlogo1.png" alt="">
        </div>
        <div class="slider-content">
            <img id="jordanlogo" src="img/jordanlogo.jpg" alt="">
        </div>
        <script src="main.js"></script>
    </div>
        </div>
        <div class="header-menu">
            <ul class="menu">
                <a href="homeLogin.php"><li id="li-menu">Home</li></a>
                <a href="shopvalid.php"><li id="li-menu">Shop</li></a>
                <a href="contact.php"><li id="li-menu"  style="background-color: black; 
                    color: white;
                     border-bottom-left-radius: 10px;
                    border-top-left-radius: 10px;">Contact</li></a>
            </ul>
        </div>
    </div>
    <div id="textcontact"><p>Hello <span id="contactname" style="text-transform: uppercase;"></span> we will try to fix your problem .  </p></div>
    <div class="info">
        <div class="lightwhite-text">
            <h2 id="text-lightwhite">GET IN TOUCH</h2>
            <h4>1600 Pennsylvania Are NWm,Washington,DC 20500,United States of America . Tel : (202)456-1111
               </h4>
           </div>

    <div class="form">
        <form action="#" method="post" class="form1">
            <label for="fname"></label>
            <input type="text" id="fname"  placeholder="Enter your Name">
            
            <label for="email"></label>
            <input type="email" id="email" placeholder="Enter your email"> <br>
             
            <textarea name="textarea" id="textarea" cols="30" rows="10"></textarea>
            
        </form>
    <button onclick="submit()" id="submitt">Submit</button>
    </div>

    </div>
    <div class="footer">
        <div class="div-footer1">
            <ul class="ul-footer">
                <a href="login.php" style="color: white;"><li id="li-footer">About</li></a>
                <a href="contact.php" style="color: white;"><li id="li-footer">Contact</li></a>
                <a href="login.php" style="color: white;"><li id="li-footer">What we can offer you ?</li></a>
            </ul>
        </div>
        <div class="div-footer1">
            <ul class="ul-footer">
                <a href="shop.php" style="color: white;"><li id="li-footer">Click to see All new by Jordan Air</li></a>
                <a href="login.php" style="color: white;"><li id="li-footer">Log in</li></a>
                <li id="li-footer">If u don't have an account,you can</li><a href="login.php" id="register-a">register now!</a>
            </ul>
            
        </div>
        <div class="div-footer1">
            <ul class="ul-footer">
                <a href="login.php" style="color: white;"><li id="li-footer">Costumer Suport</li></a>
                <a href="contact.php" style="color: white;"><li id="li-footer">Report for something </li></a>
                <li id="li-footer">Click to see what peoples likes the most </li><a href="login.php" id="register-a"></a>
                <li>Follow us</li>
            </ul>
            
        </div>
        <div class="div-footer2">
            <ul class="ul-footer2">
             
                <li id="li-footer"><img id="instagram" src="img/instagramlogo.png" alt=""></li>
                <li id="li-footer"><img id="twitter" src="img/twitterlogo.png" alt=""></li>
                <li id="li-footer"><img id="facebook" src="img/facebooklogo.png" alt=""></li>
    
            </ul>
            <p id="copyright"><img src="img/copyright.png" alt="" id="logo-copyright"><br> All right reserved.Powered by Jordan.com</p>
        </div>
    </div>
</body>
<script src="contact.js"></script>
</html>