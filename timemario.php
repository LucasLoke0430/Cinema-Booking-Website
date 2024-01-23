<?php include('header.php');
include('conn.php');
if(isset($_SESSION['login']) && $_SESSION['login'] === true){
    if (isset($_SESSION['uname'])) {
      $uname = $_SESSION['uname'];
  }
}else{
    header('Location:login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cinema Package and Timeslot Selection</title>
    <style>
body {
    background-color: black;
    font-family: 'Poppins', sans-serif;
    color: #333;
}

.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 40px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    text-align: center;
    margin-bottom: 130px;
}

h1 {
    font-size: 36px;
    margin-bottom: 20px;
    text-align: center;
}

h2 {
    font-size: 24px;
    margin-bottom: 10px;
    text-align: center;
}

.packages {
    display: flex;
    justify-content: center;
    margin-bottom: 30px;
}

.package {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 10px;
    cursor: pointer;
}

.package-title {
    font-size: 20px;
    font-weight: bold;
    margin-top: 10px;
}

.package-desc {
    font-size: 14px;
    text-align: center;
    color: #888;
}

.package input[type="radio"] {
    display: none;
}

.package input[type="radio"] + span {
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.package input[type="radio"]:checked + span {
    background-color: orange;
    color: #fff;
}

h3 {
    font-size: 24px;
    font-weight: bold;
}

p {
    font-size: 15px;
    margin-bottom: 15px;
}

.btn {
    padding: 15px 25px;
    font-size: 18px;
    background-color: #1c9c43;
    color: #fff;
    border: none;
    border-radius: 5px;
    width: 150px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #0a6e2a;
}

label{
    color: black;
    font-size: 20px;
    font-weight: bold;
}

        .dropdown {
            position: relative;
            display: inline-block;
            margin-bottom: 15px;
        }

        .dropdown select {
            text-align: center;
            background: transparent;
            border: 2px solid black;
            border-radius: 5px;
            padding: 10px 40px 10px 10px;
            font-size: 18px;
            color: black;
            cursor: pointer;
            width: 200px;
        }

        .dropdown select:focus {
            outline: none;
            border-color: black;
        }

        .dropdown::after {
            font-family: FontAwesome;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: black;
            pointer-events: none;
        }

        img{
            width: 200px;
            height: 300px;
            border: 2px solid black;
        }

<?php
?>
</style>
</head>
<body>
    <div class="container">
        <img src="postersupermario.jpg"><br><br>
        <label>Welcome to GSC Cinema</label>
        <label>Select a Package and Timeslot :</label><br><br>
        <form action="booking_mario.php" method="post">
        <div class="dropdown">
                    <select name="selected_date">
                        <option value="2023-08-5">5 August 2023</option>
                        <option value="2023-08-6">6 August 2023</option>
                        <option value="2023-08-7">7 August 2023</option>
                        <option value="2023-08-8">8 August 2023</option>
                        <option value="2023-08-9">9 August 2023</option>
                        <option value="2023-08-10">10 August 2023</option>
                        <option value="2023-08-11">11 August 2023</option>
                    </select>
                </div>
                <label>
                <div class="packages">
                <label class="package">
                <input type="radio" name="package" value="IMAX" checked>
                <span class="package-title">IMAX</span>
                <span class="package-desc">Watch movies in stunning IMAX format</span>
                <span class="package-price">RM 30</span>
            </label>
            <label class="package">
                <input type="radio" name="package" value="Classic">
                <span class="package-title">Classic</span>
                <span class="package-desc">Enjoy a timeless cinema experience</span>
                <span class="package-price">RM 20</span>
            </label>
            <label class="package">
                <input type="radio" name="package" value="Beanie">
                <span class="package-title">Beanie</span>
                <span class="package-desc">Relax in our premium beanie package</span>
                <span class="package-price">RM 25</span>
            </label>
    </div>
        <div class="packages">
            <div class="package">
                <button type="submit" class="btn" name="timeslot" value="10:00 AM">10:00 AM</button>
            </div>
            <div class="package">
                <button type="submit" class="btn" name="timeslot" value="10:30 AM">10:30 AM</button>
            </div>
            <div class="package">
                <button type="submit" class="btn" name="timeslot" value="2:00 PM">2:00 PM</a>
            </div>
    </div>
            <div class="packages">
            <div class="package">
                <button type="submit" class="btn" name="timeslot" value="3:00 PM">3:00 PM</button>
            </div>
            <div class="package">
                <button type="submit" class="btn" name="timeslot" value="7:15 PM">7:15 PM</button>
            </div>
            <div class="package">
                <button type="submit" class="btn" name="timeslot" value="8:00 PM">8:00 PM</a>
            </div>
    </div>
            <div class="packages">
            <div class="package">
                <button type="submit" class="btn" name="timeslot" value="11:00 PM">11:00 PM</button>
            </div>
        </div>
    </div>
    </form>
</body>
</html>
<?php include('footer.php');?>