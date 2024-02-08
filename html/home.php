<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/home.css">
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
                <a class="active" href="#"> Home </a>
                <a href="events.php"> Events </a>
                <a href="aboutUs.php"> About Us </a>
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
        <section class="welcome">
            <div class="title">
                <h1> Event Management System </h1>
                <p> Check out these news today. </p>
            </div>
        </section>
        <section class="news">
            <div class="upper">
                <div class="upperNews">
                    <div class="icon">
                        <img src="../images/puplogo.png"/>
                    </div>
                    <div class="description">
                        <h3> Polytechnic University <br> of the Philippines </h3>
                        <p> Biñan Campus </p>
                    </div>
                </div>
                <div id="middle">
                    <div class="container">
                        <img src="../images/events.gif"/>
                    </div>
                    <div class="head">
                        <h3> Check out PUPBC Events </h3>
                        <a href="events.php"> Get Started! </a>
                    </div>
                </div>
                <div class="upperNews">
                    <div class="icon">
                        <img src="../images/registerlogo.gif"/>
                    </div>
                    <div class="description">
                        <h3> Online Registration </h3>
                        <a href="events.php"> Register now for free! </a>
                    </div>
                </div>
            </div>
            <div class="lower">
                <a href="https://www.facebook.com/iBITSPUPBC" target="_blank" class="lowerNews IBITSNews">
                    <div class="icon">
                        <img src="../images/ibits.jpg"/>
                    </div>
                    <div class="description">
                        <h3> Institute of Bachelors in Information Technology Studies - PUPBC </h3>
                        <p> Check out the latest updates!  </p>
                    </div>
                </a>
                <a href="https://cybersecuritynews.com/" target="_blank" class="lowerNews cscNews">
                    <div class="icon">
                        <img src="../images/csc.jpg"/>
                    </div>
                    <div class="description">
                        <h3> Central Student Council </h3>
                        <p> Visit the CSC Offcial Page. </p>
                    </div>
                </a>
            </div>
        </section>
    </main>
</body>
</html>