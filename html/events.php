<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="../css/eventsRegisterform.css">
    <link rel="stylesheet" href="../css/events.css">
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
                <a class="active" href="#"> Events </a>
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
        <section class="top">
            <section class="event" onclick="openRegisterForm()">
                <div class="img">
                    <img src="../images/ibits.jpg">
                </div>
                <div class="description">
                    <h2> IBITS WEEK </h2>
                    <p> Join us for IBITS Week! 🎉 Calling all students to join us for a week packed with exciting workshops, and fun activities. 
                        Don't miss out on this unforgettable experience! See you at IBITS Week! 🚀 #IBITSWeek2024 </p>
                </div>
            </section>
            <section class="event" onclick="openRegisterForm()">
                <img src="../images/valentines.jpg">
                <div class="description">
                    <h2> VALENTINES </h2>
                    <p> Love is in the air! 💕 Whether you're celebrating with a special someone or spreading love with friends, come enjoy music, games, and sweet treats. 
                        Let's make this Valentine's Day one to remember! See you there! 💘 </p>
                </div>
            </section>
        </section>
        <section class="bottom">
            <section class="event" onclick="openRegisterForm()">
                <img src="../images/yearend.jpg">
                <div class="description">
                    <h2> Year-End Party </h2>
                    <p> You're invited to our Year-End Party! 🎉 Join us for an unforgettable celebration as we bid farewell to another amazing school year. 
                        Get ready for music, games, and lots of fun with your friends and classmates. See you there! 🎈 </p>
                </div>
            </section>
            <section class="event" onclick="openRegisterForm()">
                <img src="../images/yearnew.jpg">
                <div class="description">
                    <h2> Year-New Party </h2>
                    <p> Let's ring in the New Year together! 🎉 Join us for a festive celebration at our school's New Year Party. 
                        Get ready for music, dancing, and plenty of fun as we welcome in a fresh start. 🎆 </p>
                </div>
            </section>
        </section>
    </main>
    <div id="registerInfo" class="registerInfo">
        <div class="registerInfo-container">
            <form class="registrationForm" action="../dbConnections/eventsdb.php" method="post">
                <div class="contentContainer" style="text-align: right;"><span class="close-btn" onclick="closeRegisterForm()">&times;</span></div>
                <div class="contentContainer"><p style="font-size: 32px; padding: 15px;text-align: center; color:white; font-family:monospace; background-color:rgb(26, 71, 168);">Student Information<hr></p></div>
                <div class="contentContainer" style="display:block;">
                    <div class="register-content" style="text-align: center; padding: 20px;">
                        <div class="contents">
                            <input type="text" name="studentName" placeholder="Name: " required/>
                        </div>
                        <div class="contents">
                            <select id="Year&Section" name="studentYS" required>
                                <option value="BSIT 1-1">BSIT 1-1</option>
                                <option value="BSIT 2-1">BSIT 2-1</option>
                                <option value="BSIT 3-1">BSIT 3-1</option>
                            </select>
                        </div>
                        <div class="contents">
                            <input type="text" name="studentNumber" placeholder="Student Number: " maxlength="15" minlength="15" required/>
                        </div>
                        <div class="contents">
                            <input type="email" name="studentEmail" placeholder="Student Email: " required/>
                        </div>
                        <div class="contents">
                            <select name="eventName" required>
                                <option value="IBITS Week">IBITS WEEK</option>
                                <option value="Valentines">Valentines</option>
                                <option value="Year-End Party">Year-End Party</option>
                                <option value="Year-New Party">Year-New Party</option>
                            </select>
                        </div>
                        <div style="padding-top: 20px;"><a href="#" class="abttn"><button type="submit" name="registerNow" style="background-color: transparent; border: none;"><strong>Submit</strong></button></a></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        const registerInfo = document.getElementById('registerInfo');

        function openRegisterForm() {
            registerInfo.style.display = 'flex';
        }

        function closeRegisterForm() {
            registerInfo.style.display = 'none';
        }
    </script>
</body>
</html>