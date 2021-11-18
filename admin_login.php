<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Royal Palace</title>
    <link rel="stylesheet" href="admin_login.css">
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
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user1 = "Abhigyan";
            $user2 = "Shreyash";

            $pass1 = "123456";
            $pass2 = "abcd";
                
            if (($username == $user1 && $password == $pass1) || ($username == $user2 && $password == $pass2))
            {
                header("Location: http://localhost/hotel/admin_control.html");
                exit();
            }

            else
            {
                echo "<div class='fail'>
                <strong>Failed!</strong><pre> </pre>Wrong Username or Password
                </div>";
            }
        }
    ?>

    <main>

        <div class="main-container">
            <h1>Admin Login</h1>
            <hr>

            <form action="/hotel/admin_login.php" method="post">
                <div class="inputs">
                    <div class="username">
                        Username: <input type="text" name="username" id="username"><br>
                    </div>
                    <div class="password">
                        Password: <input type="password" name="password" id="password">
                    </div>
                </div>
                <div class="class-buttons">
                    <input type="submit" value="Submit" id="submit-button">
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
                    <li><a href="https://www.facebook.com/OberoiHotels"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/oberoihotels/?hl=en"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/OberoiHotels?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.oberoihotels.com/hotels-in-chandigarh-sukhvilas-resort/"><i class="fab fa-snapchat"></i></a></li>
                </ul> 
            </div>
            
            <h5>Copyright &copy; The Royal Palace</h5>
        </div>
    </footer>

</body>
</html>