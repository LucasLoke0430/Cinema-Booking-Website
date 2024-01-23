<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cinema Website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="path/to/fontawesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="slick.css">
  <link rel="stylesheet" type="text/css" href="slick-theme.css">
  <script src="jquery.min.js"></script>
  <script src="slick.min.js"></script>
  <script src="script.js"></script>
</head>
<style>
    
    header nav ul li a:hover {
      text-decoration: none;
    }
  </style>
<body>

</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="movie.php"><img src="gsc.jpg" alt="Logo"></a></li>
        <li><a href="movie.php">Home</a></li>
        <li><a href="movie.php#nowshow">Movies</a></li>
        <li><a href="movie.php#coming">Coming Soon</a></li>
        <li><a href="movie.php#contact">Contact Us</a></li>
        <li style="margin-left: 650px; padding: 20px;"></li>
        <?php
        session_start();
        if(isset($_SESSION['login']) && $_SESSION['login'] === true){
        echo '<li><a href="myticket.php">My Ticket</a></li>';
        echo '<li><a href="logout.php">Log Out</a></li>';
        }else{
        echo '<li><a href="register.php">Sign Up</a></li>';
        echo '<li><a href="login.php">Login</a></li>';
        }
        ?>
      </ul>
    </nav>
  </header>      
</body>
</html>


