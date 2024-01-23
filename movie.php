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
  <link rel="stylesheet" type="text/css" href="style.css?v=1">
  <link rel="stylesheet" type="text/css" href="slick.css?v=1">
  <link rel="stylesheet" type="text/css" href="slick-theme.css?v=1">
  <script src="jquery.min.js"></script>
  <script src="slick.min.js"></script>
  <script src="script.js"></script>
</head>
<style>
  header nav ul li a:hover {
      text-decoration: none;
    }

  .book-now-btn:hover{
    text-decoration: none;
    color: aliceblue;
  }

  .watch-trailer-btn:hover{
    text-decoration: none;
    color: aliceblue;
  }

  </style>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="movie.php"><img src="gsc.jpg" alt="Logo"></a></li>
        <li><a href="movie.php">Home</a></li>
        <li><a href="#nowshow">Movies</a></li>
        <li><a href="#coming">Coming Soon</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <li style="margin-left: 650px; padding: 20px;"></li>
        <?php
        session_start();
        if(isset($_SESSION['empty'])){
          $empty = $_SESSION['empty'];
           echo $empty;
           unset($_SESSION['empty']);
          }


        if(isset($_SESSION['login']) && $_SESSION['login'] === true){
          if (isset($_SESSION['uname'])) {
            $uname = $_SESSION['uname'];
        }
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
  <main>
    <section class="hero-slider">
        <div class="slider">
          <div>
            <img src="spiderman.jpg" alt="Slide 1">
            <div class="slide-content">
              <h2 class="texthover">Spider-Man: Across the Spider-Verse</h2>
              <p class="texthover">2023 Action/Adventure 136 minutes</p>
              <div class="slide-buttons">
                <a href="https://www.youtube.com/watch?v=qJJYNWpr_4U&t=2s&ab_channel=SonyPicturesReleasingAustralia" class="watch-trailer-btn" onclick="return openPopup(event)">Watch Trailer</a>
                <a href="timespider.php" class="book-now-btn">Book Now</a>
              </div>
            </div>
          </div>
          
          <div>
            <img src="john.jpg" alt="Slide 2">
            <div class="slide-content">
              <h2 class="texthover">John Wick: Chapter 4</h2>
              <p class="texthover">2023 Action/Neo-noir 169 minutes</p>
              <div class="slide-buttons">
                <a href="https://www.youtube.com/watch?v=qEVUtrk8_B4&ab_channel=LionsgateMovies" class="watch-trailer-btn" onclick="return openPopup(event)">Watch Trailer</a>
                <a href="timejohn.php" class="book-now-btn">Book Now</a>
              </div>
            </div>
          </div>
          
          <div>
            <img src="ant.jpg" alt="Slide 3">
            <div class="slide-content">
              <h2 class="texthover">Ant-Man and the Wasp: Quantumania</h2>
              <p class="texthover">2023 Action/Adventure 125 minutes</p>
              <div class="slide-buttons">
                <a href="https://www.youtube.com/watch?v=ZlNFpri-Y40&ab_channel=MarvelEntertainment" class="watch-trailer-btn" onclick="return openPopup(event)">Watch Trailer</a>
                <a href="timeant.php" class="book-now-btn">Book Now</a>
              </div>
            </div>
          </div>

          <div>
            <img src="supermario.jpeg" alt="Slide 3">
            <div class="slide-content">
              <h2 class="texthover">The Super Mario Bros. Movie</h2>
              <p class="texthover">2023 Adventure/Comedy 92 minutes</p>
              <div class="slide-buttons">
                <a href="https://www.youtube.com/watch?v=TnGl01FkMMo&ab_channel=Illumination" class="watch-trailer-btn" onclick="return openPopup(event)">Watch Trailer</a>
                <a href="timemario.php" class="book-now-btn">Book Now</a>
              </div>
            </div>
          </div>

        </div>
        <button class="slider-arrow slider-prev"><i class="fas fa-chevron-left"></i></button>
        <button class="slider-arrow slider-next"><i class="fas fa-chevron-right"></i></button>
      </div>
     </div>
      </section>


    
    <section class="movies" id="nowshow">
        <h2>Now Showing</h2>
        <div class="movie-slider">
          <div class="movie-item">
            <img src="posterjohn.jpg" alt="Movie 1" class="movie-poster">
            <div class="movie-details">
              <h3 class="movie-title">John Wick: Chapter 4</h3>
              <p class="movie-description">John Wick uncovers a path to defeating <br>The High Table. 
              But before he can<br> earn his freedom ...</p>
              <a href="timejohn.php" class="book-now-btn">Book Now</a>
            </div>
          </div>
          
          <div class="movie-item">
            <img src="posterspider.jpg" alt="Movie 2" class="movie-poster">
            <div class="movie-details">
              <h3 class="movie-title">Spider-Man: Across <br> the Spider-Verse</h3>
              <p class="movie-description">In the film, Miles goes on an adventure with<br> Gwen Stacy / Spider-Woman ...</p>
              <a href="timespider.php" class="book-now-btn">Book Now</a>
            </div>
          </div>

          <div class="movie-item">
            <img src="posterant.jpg" alt="Movie 3" class="movie-poster">
            <div class="movie-details">
              <h3 class="movie-title">Ant-Man and the Wasp:<br> Quantumania</h3>
              <p class="movie-description">Scott Lang and Hope Van Dyne are dragged<br> into the Quantum Realm, along with<br> Hope's parents and Scott's daughter Cassie. 
              <br>Together they must find a way ...</p>
              <a href="timeant.php" class="book-now-btn">Book Now</a>
            </div>
          </div>

          <div class="movie-item">
            <img src="postersupermario.jpg" alt="Movie 4" class="movie-poster">
            <div class="movie-details">
              <h3 class="movie-title">The Super Mario Bros. Movie</h3>
              <p class="movie-description">It features an origin story for the brothers<br> Mario and Luigi,
              Italian-American<br> plumbers who are transported ...</p>
              <a href="timemario.php" class="book-now-btn">Book Now</a>
            </div>
          </div>
        </div>
      </section>

      <section class="coming" id="coming">
      <br><br><br><h2>Coming Soon</h2>
      <div class="movie-slider">
          <div class="movie-item">
            <img src="posterflash.jpg" alt="Movie 1" class="movie-poster">
            <div class="movie-details">
              <h3 class="movie-title">The Flash</h3>
              <p class="movie-description">Coming Soon..</p>
            </div>
          </div>
          
          <div class="movie-item">
            <img src="posterspiderpart2.jpg" alt="Movie 2" class="movie-poster">
            <div class="movie-details">
              <h3 class="movie-title">Spider-Man: <br>Beyond the Spider-Verse</h3>
              <p class="movie-description">March 2024</p>
            </div>
          </div>

          <div class="movie-item">
            <img src="posterpanda.jpg" alt="Movie 3" class="movie-poster">
            <div class="movie-details">
              <h3 class="movie-title">Kung Fu Panda 4</h3>
              <p class="movie-description">March 2024</p>
            </div>
          </div>

          <div class="movie-item">
            <img src="posterdeadpool.jpg" alt="Movie 4" class="movie-poster">
            <div class="movie-details">
              <h3 class="movie-title">Deadpool 3</h3>
              <p class="movie-description">March 2024</p>
            </div>
          </div>
        </div>
      </section>
    

    <section class="contact" id="contact">
    <br><br><br><h2>Contact Us</h2>
    <?php 
    if(isset($_SESSION['form']) && $_SESSION['form'] == true){
      echo '<div class="alert alert-success" role="alert">Your message has been sent successfully!
      <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span></button></div>';
          unset($_SESSION['form']);
    }else{
    }
  
    ?>
    <div class="container1">
    <form action="contact.php" method="post" class="contact-form">
      <div class="form-group">
        <label for="name">Name:</label>
        <br><input type="text" id="name" name="name" required>
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <br><input type="email" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
      </div>

      <div class="form-group">
        <input type="submit" value="Submit" class="submit-btn">
      </div>
    </form>
  </div>
      <button id="pageUpButton" class="page-up-button" title="Go to top">🡅</button>
    </section>
  </main>
  <?php include('footer.php')?>
      
</body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="slick.min.js"></script>
<script>
  $(document).ready(function(){
    $('.slider').slick({
      autoplay: true, // Enable auto-advancing of slides
      autoplaySpeed: 2500, // Set the delay between slides (in milliseconds)
      dots: false, // Add navigation dots
      arrows: true, // Show prev/next arrows
      infinite: true, // Enable infinite looping of slides
      speed: 500, // Set the transition speed (in milliseconds)
      fade: true, // Use fade transition effect
      cssEase: 'linear', // Use linear easing for the fade effect
      prevArrow: $('.slider-prev'),
      nextArrow: $('.slider-next')
      
      
    });
  
  });
  
</script>
<script>
  $(document).ready(function(){
    $('.movie-slider').slick({
      dots: false, // Add navigation dots
      arrows: false, // Show prev/next arrows
      slidesToShow: 3, // Show three slides at a time
      slidesToScroll: 1, // Scroll one slide at a time
      responsive: [
        {
          breakpoint: 768, // Adjust the breakpoint as needed
          settings: {
            slidesToShow: 1, // Show one slide at a time on smaller screens
            slidesToScroll: 1
          }
        }
      ]
    });
  });

  function openPopup(event) {
  event.preventDefault();
  var videoUrl = event.target.getAttribute('href');
  var width = 800;
  var height = 500;
  var left = (window.innerWidth - width) / 2;
  var top = (window.innerHeight - height) / 2;
  window.open(videoUrl, '_blank', 'width=' + width + ', height=' + height + ', left=' + left + ', top=' + top);
  return false;
}

var pageUpButton = document.getElementById("pageUpButton");

pageUpButton.addEventListener("click", function() {
  // Scroll the page to the top with smooth behavior
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});
</script>
