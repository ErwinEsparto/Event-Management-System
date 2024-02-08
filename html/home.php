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
        <section class="title">
            <h1> Event Management System </h1> <hr>
            <p> An online event management system simplifies the entire event planning process by leveraging digital platforms to handle tasks 
                to ensure seamless organization and execution of events.</p>
            <a href="events.php"> Get Started </a>
        </section>
    </main>
</body>
</html>