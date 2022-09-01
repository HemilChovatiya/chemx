<?php
  session_start();
  include('database.php');
  include('function_inc.php');
  
  $msg = '';

  if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['pass'];
    
    $res = mysqli_query($con," INSERT INTO user_details(name,username,password) VALUES('$name','$username','$password') ");
    

    if($res==1){
      $row = mysqli_fetch_assoc($res);
      $_SESSION['SUCCESS'] = 'yes';
      $_SESSION['USER'] = $row['username'];
      $_SESSION['name'] = $row['name'];
      $_SESSION['PASSWORD'] = $row['password'];
      redirect('inde111x.php');
    }
    else{
      $msg = "Please Enter valid details";
    }
  }
  if(isset($_POST['signin'])){
    $username = $_POST['username'];
    $password = $_POST['pass'];

    $query = "select * from user_details where username='$username'  and password='$password'";
    $res = mysqli_query($con,$query);
    $count = mysqli_num_rows($res);

    if($count>0){
      $row = mysqli_fetch_assoc($res);
      $_SESSION['SUCCESS'] = 'yes';
      $_SESSION['name'] = $row['name'];
      $_SESSION['USER'] = $row['username'];
      $_SESSION['PASSWORD'] = $row['password'];
      $_SESSION['u_id']=$row['u_id'];
      redirect('/project/p.php');
      /*redirect('login_successul.php');*/
    }
    else{
      $msg = "Please Enter valid username and password";
    }
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="style.css" />
  <script src="https://kit.fontawesome.com/dd8c49730d.js" crossorigin="anonymous"></script>
  <title>Static Template</title>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background-color: #111;
  color: #ccc;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background-image: url(4.jpg);
  
}

#instagram{
  background-image: url(1.png);
}
#facebook{
  background-image: url(2.png);
}
#linkedin{
  background-image: url(3.png);
  
}
h1 {
  font-size: 30px;
  font-weight: 800;
  font-family: "Roboto", sans-serif;
}

span {
  font-size: 12px;
  color: beige;
  font-family: "Roboto Condensed", sans-serif;
}

p {
  font-size: 14px;
  font-weight: bold;
  line-height: 20px;
  letter-spacing: 0.5px;
  margin: 20px 0 30px;
  font-family: "Roboto", sans-serif;
}

a {
  color: #fff;
  font-size: 14px;
  text-decoration: none;
  margin: 15px 0;
}

div[class="error_msg"]{
   color:white;
   font: arial;
}
.container {
  position: absolute;
  /*box-shadow: 2.8px 2.8px 2.2px #05050594, 8px 9px 9px #00000017, 9px 10px 10px #00000017, 7px 9px 11px #00000017, 7px 7px 2px #00000017, 6px 11px 13px #000; 
  */overflow: hidden;
  min-height: 480px;
  width: 768px;
  max-width: 100%;
  opacity: 0.8;
}

.form-container {
  background: rgb(45, 52, 54);
  display: flex;
  flex-direction: column;
  padding: 0 50px;
  height: 100%;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.social-container {
  margin: 20px 0;
}

.social-container a {
  border: 0px solid rgb(121, 116, 116);
  border-radius: 0%;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  margin: 0 5px;
  height: 50px;
  width: 50px;
}
.social-container a:hover{
  border: 0.9px solid rgb(121, 116, 116);
  border-radius: 20%;
}

.form-container input {
  background: #eee;
  border: none;
  padding: 12px 15px;
  margin: 8px 0;
  width: 100%;
}

button {
  color: #111;
  font-size: 12px;
  font-weight: bold;
  padding: 12px 35px;
  margin-top: 15px;
  border: 1px solid #ff4b2b;
  border-radius: 20px;
  text-transform: uppercase;
  transition: transform 80ms ease-in;
}

input[type="text"],
input[type="email"],
input[type="password"] {
  width: 240px;
  text-align: center;
  background: transparent;
  border: none;
  border-bottom: 1px solid #fff;
  font-family: "Roboto", sans-serif;
  font-size: 16px;
  font-weight: 200px;
  padding: 10px 0;
  transition: border 0.5s;
  outline: none;
  color: #fff;
  font-weight: bold;
}
input[type="text"]:hover,
input[type="email"]:hover,
input[type="password"]:hover {
  border: 1px solid #fff;
  transition: ease-in-out;}

button:active {
  transform: scale(0.95);
}

button:focus {
  outline: none;
}

.ghost {
  background: transparent;
  border-color: #ff4b2b;
  background-color: #64a6e1;
}

.form-container {
  position: absolute;
  top: 0;
  height: 100%;
  transition: all 0.6s ease-in-out;
}

.sign-in-container {
  width: 50%;
  z-index: 2;
}

.sign-up-container {
  left: 0;
  width: 50%;
  z-index: 0;
  opacity: 0;
}

.overlay-container {
  position: absolute;
  top: 0;
  left: 50%;
  width: 50%;
  height: 100%;
  overflow: hidden;
  transition: transform 0.6s ease-in-out;
  z-index: 100;
}

.overlay {
  background: transparent;
  background: linear-gradient(to right, #ff4b2b, #ff416c) no repeat 0 0 / cover;
  color: #fff;
  position: absolute;
  left: -100%;
  height: 100%;
  width: 200%;
  transform: translateX(0);
  transition: transform 0.6s ease-in-out;
}

.overlay-panel {
  position: absolute;
  top: 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 0 40px;
  height: 100%;
  width: 50%;
  text-align: center;
  transform: translateX(0);
  transition: transform 0.6s ease-in-out;
}

.overlay-right {
  right: 0;
  transform: translateX(0);
}

.overlay-left {
  transform: translateX(-20%);
}

.container.right-panel-active .sign-in-container {
  transform: translateX(100%);
}

.container.right-panel-active .overlay-container {
  transform: translateX(-100%);
}

.container.right-panel-active .sign-up-container {
  transform: translateX(100%);
  opacity: 1;
  z-index: 5;
}

.container.right-panel-active .overlay {
  transform: translateX(50%);
}

.container.right-panel-active .overlay-left {
  transform: translateX(0);
}

.container.right-panel-active .overlay-right {
  transform: translateX(20%);
}

</style>
</head>

<body>
  <div class="container" id="container">
    <div class="form-container sign-up-container">
      <form method="post">
        <h1>Create Account</h1>
        <span>Create an account for free </span>
        <input type="text" name="name" placeholder="Name" />
        <input type="email" name="username"placeholder="Email" />
        <input type="password" name="password" placeholder="Password" />
        <button type="submit" name="signup">Sign Up</button>
        <div class="social-container">
          <a href="#" class="social" id="facebook"><img class="facebook" ></img></a>
          <a href="#" class="social" id="linkedin"><img class="linkedin"></img></a>
          <a href="#" class="social" id="instagram"><img class="instagram"></img></a>
        </div>
        <div class="error_msg">
     <?php
        echo $msg;
      ?>
    </div>
      </form>
    </div>
    <div class="form-container sign-in-container">
      <form method="post">
        <h1>Sign In</h1>
        <input type="email" name="username" placeholder="Email" />
        <input type="password" name="pass" placeholder="Password" />
        <button type="submit" name="signin">Sign In</button>
        <br><br><span>Already have account ? </span>
        <div class="social-container">
          <a href="#" class="social" id="facebook"><i class="facebook"></i></a>
          <a href="#" class="social" id="linkedin"><i class="linkedin"></i></a>
          <a href="#" class="social" id="instagram"><i class="instagram"></i></a>
        </div>
        <div class="error_msg">
     <?php
        echo $msg;
      ?>
    </div>
      </form>
    </div>

    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Welcome Back</h1>
          <p> If you already have account please login to keep connected with us</p>
          <button class="ghost" id="signIn">Sign In</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Hello Friend</h1>
          <p>Don't have account ? Please sign up with your personal details to connect with us ! </p>
          <button class="ghost" id="signUp">Sign Up</button>
        </div>
      </div>
    </div>
    

    <script src="main.js"></script>
</body>
<script>
  const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const container = document.getElementById("container");

signUpButton.addEventListener("click", () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener("click", () => {
  container.classList.remove("right-panel-active");
});

</script>
</html>