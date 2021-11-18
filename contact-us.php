<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - The Royal Palace</title>
    <link rel="stylesheet" href="contact-us.css">
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
        </nav>
    </header>

    <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "hotel";

            $name = $_POST['full-name'];
            $email = $_POST['email'];
            $concern = $_POST['concern'];

            $conn = mysqli_connect($servername, $username, $password, $database);

            $sql = "INSERT INTO `contact us` (`Name`, `Email ID`, `Concern`) VALUES ('$name', '$email', '$concern')";

            $result = mysqli_query($conn, $sql);

            if ($result)
            {
                echo "<div class='success'>
                <strong>Successfully Noted!</strong><pre> </pre>Our executive will get back to you on this!
                </div>";
            }
        }
    ?>

    <main>

        <div class="main-container">
            <h1>Contact Us</h1>
            <hr>

            <form action="/hotel/contact-us.php" method="post">
                <div class="name">
                    <label for="name">Full Name: </label>
                    <input type="text" name="full-name" id="full-name">
                </div>

                <div class="email">
                    <label for="email">Email ID: </label>
                    <input type="email" name="email" id="email">
                </div>

                <div class="concern">
                    <label for="concern">Enter your concern: </label> <br>
                    <textarea name="concern" id="concern" cols="30" rows="10"></textarea>
                </div>

                <div class="button-space">
                    <button id="concern" type="submit">Submit</button>
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

</body>
</html>