<?php include('header.php');
include('conn.php');

if(isset($_POST["submit"])){
  $uname = $_POST["uname"];
  $_SESSION['uname'] = $uname;
  $password = $_POST['password'];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$uname'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result)>0){
    if($password == $row["password"]){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      sleep(3);
      header("Location:movie.php");
    }else{
      $_SESSION['wrong'] = "Wrong password...please try again";
    }
  }else{
    echo "User not found";
  }
}

?>
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
      padding: 10px 16px;
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
<h2>Login</h2>
<form action="login.php" method="POST">
<label for="uname">Username: </label>
<input type="text" name="uname" id="uname" placeholder="Enter Username" required><br>
<label for="password">Password: </label>
<input type="password" name="password" id="password" placeholder="Enter Password" required><br>

<input type="submit" value="Log in" name="submit">
<div><br></div>
      <?php 
    if(isset($_SESSION['success'])){ 
      ?>
  <div class="alert alert-success" role="alert">
      <?php $_SESSION['success']; ?>
      <?php
      echo $_SESSION['success'];
      unset($_SESSION['success']);
    }
      ?>

<?php 
    if(isset($_SESSION['wrong'])){ 
      ?>
  <div class="alert alert-danger" role="alert">
      <?php $_SESSION['wrong']; ?>
      <?php
      echo $_SESSION['wrong'];
      unset($_SESSION['wrong']);
    }
      ?>

  </div>
</div>

</form>
</body>
</html>
<?php include('footer.php'); ?>