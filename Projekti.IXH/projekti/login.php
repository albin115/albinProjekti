<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
</div>
    <div class="form">
    <form action="#" method="post">
        <label for="fname">First Name :</label> <br>
        <input type="text" name="firstname" id="fname" placeholder="Enter your FirstName"><br>
        <span id="name_error">&nbsp;&nbsp;&nbsp; Please enter your name &nbsp;&nbsp;&nbsp;</span>
        <br>
        <label for="lname">Last Name :</label> <br>
        <input type="text" name="lastname" id="lname" placeholder="Enter your LastName"><br>
        <span id="lastname_error">Please enter your lastname &nbsp;</span>
        <br>
        <label for="email">Email :</label> <br>
        <input type="email" name="email" id="email" placeholder="Enter your email"><br>
        <span id="email_error">&nbsp;&nbsp;&nbsp;Please enter your email &nbsp;&nbsp;&nbsp; </span>
        <br>
        <label for="password">Password :</label> <br>
        <input type="password" name="password" id="password" placeholder="Enter your password"><br>
        <span id="password_error">Please enter"(1Uppercase,6lowercase,1d)"</span>
         <br>
         <!-- <button onclick="getlogin()" id="submit" >Sign Up</button> -->
        <button name="registerBtn" onclick="getlogin()" id="submit" >Submit</button>
    </form>
  
  <?php include_once 'registerController.php';?>

</div>
<script src="login.js"></script>

</body>

</html>