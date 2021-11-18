<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Royal Palace</title>
    <link rel="stylesheet" href="booking_form.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    
    <header>
        <nav>
            <!-- Hotel Logo -->
            <div id="logo">
                <img src="images/The Royal Palace Logo.png">
            </div>

            <!-- Navbar list items -->
            <ul>
                <a href="home.html"><li>Home</li></a>
                <a href="booking.html"><li>Booking</li></a>
                <a href="about_us.html"><li>About</li></a>
                <a href="reviews.html"><li>Reviews</li></a>
                <a href="http://localhost/hotel/contact-us.php"><li>Contact Us</li></a>
            </ul>

            <!-- Searchbar input -->
            <div id="searchbar">
                <input type="text" placeholder="Search Here.." name="searchbar">
            </div>

            <!-- Search button -->
            <div id="search-button">
                <button> &#128269;</button>
            </div>

            <div class="admin-login">
                <a href="http://localhost/hotel/admin_login.php">Admin Login</a>
            </div>
        </nav>
    </header>
        
    <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "hotel";

            $first_name = $_POST['firstname'];
            $last_name = $_POST['lastname'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $gender = $_POST['gender'];
            $aadhar = $_POST['aadhar'];
            $date_of_arrival = $_POST['date-of-arrival'];
            $days = $_POST['day'];
            $rooms = $_POST['room'];
            $room_type = $_POST['specialization'];

            $conn = mysqli_connect($servername, $username, $password, $database);

            $sql = "INSERT INTO `booking` (`First Name`, `Last Name`, `Email ID`, `Mobile Number`, `Gender`, `Aadhar Card Number`, `Date of Arrival`, `Number of Days`, `Number of Rooms`, `Room Type`) VALUES ('$first_name', '$last_name', '$email', '$mobile', '$gender', '$aadhar', '$date_of_arrival', '$days', '$rooms', '$room_type')";

            $result = mysqli_query($conn, $sql);

            if($result)
            {
                echo "<div class='success'>
                <strong>Booking Successfull!</strong><pre> </pre>We're waiting for your arrival!
                </div>";
            }
        }

    ?>

    <main>

        <div class="container">
            <h1>Booking Form</h1>
            <hr>

            <form name="myForm" onsubmit="return validateForm()" method="post">

                <div class="first-name">
                    <label for="fname">First Name:</label>
                    <input type="text" id="ffname" name="firstname" placeholder="Enter your First name" required>
                </div>
                
                <div class="last-name">
                    <label for="fname">Last Name:</label>
                    <input type="text" id="flname" name="lastname" placeholder="Enter your Last name" required>
                </div>

                <div class="email">
                    <label for="femail">Email ID: </label>
                    <input type="email" id="femail" name="email" placeholder="Enter a valid email ID" required>
                </div>

                <div class="mobile-no" id="mobile">
                    <label for="mobile">Mobile:</label>
                    <input type="number" id="mobile" name="mobile" placeholder="Enter your phone number" required>
                    <b><span class = "form-error"></span></b>
                </div>
                
                <div class="gender">
                    <label for="gender">Gender:</label>
                    <input type="radio" id="male" name="gender" value="Male"/>Male
                    <input type="radio" id="female" name="gender" value="Female"/>Female
                </div>
                
                <div class="aadhar" id="aadhar">
                    <label for="aadhar">Aadhar Card Number:</label>
                    <input type="number" id="aadhar" name="aadhar" placeholder="Enter your aadhar card number" required>
                    <b><span class = "form-error"></span></b>
                </div>

                <div class="date-of-arrival">
                    <label for="date-of-arrival">Date of Arrival: </label>
                    <input type="date" name="date-of-arrival" id="date-of-arrival">
                </div>
            
                <div class="days">
                    <label for="day">Number of Days:</label>
                    <select name="day" id="day" required>
                        <option value=" ">No. of Days:</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>

                <div class="rooms">
                    <label for="room">Number of Rooms :</label>
               
                    <select name="room" id="room" required>
                        <option value=" ">No. of Rooms:</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <b><span class = "form-error"></span></b>
                    </select>
                </div>

                <div class="room-type">
                    <div class="col-10">
                        <label for="specialization">Room Type:</label>
                    </div>
                    <div class="col-90">
                        <input type="radio" class="specialization" id="lr" name="specialization" value="Luxury Room" required>Luxury Room<br/>
                        <input type="radio" class="specialization" id="lgrcv" name="specialization" value="Luxury Grand Room City View">Luxury Grand Room City View<br/>
                        <input type="radio" class="specialization" id="lgrsv" name="specialization" value="Luxury Grand Room Sea View">Luxury Grand Room Sea View<br/>
                        <input type="radio" class="specialization" id="tcbcv" name="specialization" value="Taj Club Room City View">Taj Club Room City View<br/>
                        <input type="radio" class="specialization" id="tcbsv" name="specialization" value="Taj Club Room Sea View">Taj Club Room Sea View<br/>
                        <input type="radio" class="specialization" id="escv" name="specialization" value="Executive Suite City View">Executive Suite City View<br/>
                        <b><span class = "form-error"></span></b>
                    </div>
                </div>
                
                <div class="button-space">
                    <button type="submit">Submit</button>
                </div>
            </form>


        </div>


    </main>

    <footer>
        <div class="foot">
            <div class="menu">
                <ul>
                    <a href="home.html"><li>Home</li></a>
                    <a href="booking.html"><li>Booking</li></a>
                    <a href="about_us.html"><li>About</li></a>
                    <a href="reviews.html"><li>Reviews</li></a>
                    <a href="http://localhost/hotel/contact-us.php"><li>Contact Us</li></a>
                </ul> 
            </div>
            <div class="social">
                <h4>Social Media</h4>
                <ul>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-snapchat"></i></a></li>
                </ul> 
            </div>
            
            <h5>Copyright &copy; The Royal Palace</h5>
        </div>
    </footer>

    <script src="booking_form.js"></script>
</body>

</html>

