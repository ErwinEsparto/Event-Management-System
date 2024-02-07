<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="../css/aboutUs.css">
</head>
<body>
    <?php
        session_start();

        $DBHost = "localhost";
        $DBUser = "root";
        $DBPass = "";
        $DBName = "eventsdb";
        $conn = mysqli_connect($DBHost, $DBUser, $DBPass, $DBName);
        $loggedIn = $_SESSION['loggedIn'] ?? false;
    ?>
    <header>
        <div class="logo">
            <p> EMS </p>
        </div>
        <nav>
            <div class="navigation">
                <a href="home.php"> Home </a>
                <a href="events.php"> Events </a>
                <a class="active" href="#"> About Us </a>
            </div>
            <?php
                if ($loggedIn == true){
                    echo '
                    <div class="adminLogged">
                        <a href="participantList.php"> Participant List </a>
                        <a class="btnLogin" href="profile.php"> Profile </a>
                        <a href="logout.php"> Logout </a>
                    </div>
                    ';
                }
                else {
                    echo '<a class="btnLogin" href="login.php"> Login </a>';
                }
            ?>
        </nav>
    </header>
    <main>
        <section id="main">
            <div class="title">
                <h1> EMS </h1> <hr>
                <p class="description"> 
                    EMS is a comprehensive platform designed to streamline the planning, organization, and execution of events entirely through the internet. 
                    It facilitates tasks such as event registration, ticketing, promotion, and attendee engagement, offering convenience for both organizers and participants. 
                    By centralizing event logistics and communication, these systems simplify event management processes and enhance the overall attendee experience.
                </p>
            </div>
        </section>
        <section id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61855.4196567874!2d121.00211974863281!3d14.313539699999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d77dec99259b%3A0x85e6a0648bf24d87!2sPolytechnic%20University%20of%20the%20Philippines%20-%20Bi%C3%B1an%20Campus!5e0!3m2!1sen!2sph!4v1706864674702!5m2!1sen!2sph" 
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <section id="contactus">
            <div class="contacts">
                <div class="contactone">
                    <img src="../images/email.png">
                    <h2> Email Address </h2>
                    <p> pupems@gmail.com </p>
                </div>
                <div class="contacttwo">
                    <img src="../images/contact.png">
                    <h2> Contact Number  </h2>
                    <p> +639158291856 </p>
                </div>
                <div class="contactthree">
                    <img src="../images/facebook.png">
                    <h2> Facebook Page  </h2>
                    <p> EMS Official </p>
                </div>
            </div>
        </section>
    </main>
</body>
</html>