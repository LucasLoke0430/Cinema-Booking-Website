<?php include('header.php');?>
<!DOCTYPE html>
<html>

<head>
  <style>
    body {
      background-color: #111;
      color: #fff;
      font-family: 'Poppins', sans-serif;
    }

    .container {
      max-width: 400px;
      margin: 200px auto;
      padding: 20px;
      background-color: #222;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.4);
      border-radius: 6px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
      display: block;
      margin-bottom: 8px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #666;
      border-radius: 4px;
      margin-bottom: 16px;
      background-color: #333;
      color: #fff;
      box-sizing: border-box;
    }

    input[type="radio"] {
      display: inline-block;
      margin-right: 8px;
    }

    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #666;
      border-radius: 4px;
      margin-bottom: 16px;
      background-color: #333;
      color: #fff;
    }

    input[type="submit"] {
      background-color: #4caf50;
      color: #fff;
      padding: 7px 16px;
      border: none;
      font-size: 16px;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
    }

    .login{
      background-color: #4caf50;
      color: #fff;
      padding: 8px 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
      font-size: 16px;
      text-decoration: none;
      margin-left: 5px;
    }

    .login:hover{
      background-color: #45a049;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
    
    @media (max-width: 500px) {
      .container {
        max-width: 300px;
      }
      
      input[type="text"],
      input[type="email"],
      input[type="password"],
      select {
        width: 100%;
      }
    }

    .logo1{
      display: flex;
      justify-content: center;
      align-items: center;
      width: 350px;
      height: 100%;
      margin: 0 auto; /* Center horizontally */
    }

    .logo1 img{
      margin-top: 100px;
      margin-bottom: -100px;
      width: 100%;
      height: 100%;
    }

  </style>
</head>
<body>
<div class="logo1">
  <img src="gsc.jpg" alt="gsc" class="logo1">
  </div>
  <div class="container">
  <h2>Registration Form</h2>
    <form name="register" action="connn.php" method="POST">
      <label for="uname">Username:</label>
      <input type="text" id="uname" name="uname" placeholder="Enter username" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter email" required>

      <label for="contact">Phone No.:</label>
      <input type="text" id="contact" name="contact" placeholder="Enter phone number" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter password" required>

      <label for="rpassword">Confirm Password:</label>
      <input type="password" id="rpassword" name="rpassword" placeholder="Re-enter password" required>

      <br><label for="sex">Gender:</label>
      <input type="radio" id="male" name="sex" value="male" checked><b>Male</b>
      <input type="radio" id="female" name="sex" value="female"><b>Female</b><br><br>

      <label for="genre">Genre preference:</label>
      <select name="genre" id="genre">
        <option value="action">Action</option>
        <option value="romance">Romance</option>
        <option value="drama">Drama</option>
        <option value="comedy">Comedy</option>
        <option value="scifi">Sci-fi</option>
        <option value="horror">Horror</option>
      </select>

      <input type="submit" value="Sign Up">
      <a href="login.php" class="login">Login</a>
      <div><br></div>

      <?php 
    if(isset($_SESSION['taken'])){ 
      ?>
  <div class="alert alert-danger" role="alert">
      <?php $_SESSION['taken']; ?>
      <?php
      echo $_SESSION['taken'];
      unset($_SESSION['taken']);
    }
      ?>

<?php 
    if(isset($_SESSION['phonewrong'])){ 
      ?>
  <div class="alert alert-danger" role="alert">
      <?php $_SESSION['phonewrong']; ?>
      <?php
      echo $_SESSION['phonewrong'];
      unset($_SESSION['phonewrong']);
    }
      ?>

      <?php 
    if(isset($_SESSION['status'])){ 
      ?>
  <div class="alert alert-danger" role="alert">
      <?php $_SESSION['status']; ?>
      <?php
      echo $_SESSION['status'];
      unset($_SESSION['status']);
    }
      ?>

<?php 
    if(isset($_SESSION['emailtaken'])){ 
      ?>
  <div class="alert alert-danger" role="alert">
      <?php $_SESSION['emailtaken']; ?>
      <?php
      echo $_SESSION['emailtaken'];
      unset($_SESSION['emailtaken']);
    }
      ?>
      
  </div>
    </form>
  </div>
</body>

</html>
<?php include('footer.php');?>
