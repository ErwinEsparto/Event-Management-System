<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participant List</title>
    <link rel="stylesheet" href="../css/participantList.css">
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

        $getIBITSParticipants = "SELECT * FROM participants WHERE eventReg='IBITS Week';";
        $IBITSparticipants = mysqli_query($conn, $getIBITSParticipants);

        $getValentinesParticipants = "SELECT * FROM participants WHERE eventReg='Valentines';";
        $Valentinesparticipants = mysqli_query($conn, $getValentinesParticipants);

        $getYearEndParticipants = "SELECT * FROM participants WHERE eventReg='Year-End Party';";
        $YearEndparticipants = mysqli_query($conn, $getYearEndParticipants);

        $getYearNewParticipants = "SELECT * FROM participants WHERE eventReg='Year-New Party';";
        $YearNewparticipants = mysqli_query($conn, $getYearNewParticipants);

        if(isset($_GET['participantID'])){
            $query = "DELETE FROM participants WHERE participantID = '$_GET[participantID]'";
            $delete = mysqli_query ($conn, $query);
            header("location:participantList.php");
            die();
        }
    ?>
    <header>
        <div class="logo">
            <p> EMS </p>
        </div>
        <nav>
            <div class="navigation">
                <a href="home.php"> Home </a>
                <a href="events.php"> Events </a>
                <a href="aboutUs.php"> About Us </a>
            </div>
            <?php
                if ($loggedIn == true){
                    echo '
                    <div class="adminLogged">
                        <a class="active" href="#"> Participant List </a>
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
            <section class="event IBITS">
                <div class="table">
                    <h2> IBITS WEEK </h2>
                    <table class="participants">
                        <thead>
                            <tr class="category">
                                <th>Full Name</th>
                                <th>Course</th>
                                <th>Email Address</th>
                                <th>Student Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $rownum = mysqli_num_rows($IBITSparticipants);

                            if($rownum>0){
                                while ($participants = mysqli_fetch_assoc($IBITSparticipants)){
                                    echo "
                                    <tr class='choice'>
                                        <td>".$participants['fullName']."</td>
                                        <td>".$participants['courseYearSection']."</td>
                                        <td>".$participants['emailAddress']."</td>
                                        <td>".$participants['studentNumber']."</td>
                                        <td>
                                            <a href='participantList.php?participantID=".$participants['participantID']."'> Delete </a>
                                        </td>
                                    </tr>";
                                }
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </section>
            <section class="event valentines">
                <div class="table">
                    <h2> VALENTINES </h2>
                    <table class="participants">
                        <thead>
                            <tr class="category">
                                <th>Full Name</th>
                                <th>Course</th>
                                <th>Email Address</th>
                                <th>Student Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $rownum = mysqli_num_rows($Valentinesparticipants);

                            if($rownum>0){
                                while ($participants = mysqli_fetch_assoc($Valentinesparticipants)){
                                    echo "
                                    <tr class='choice'>
                                        <td>".$participants['fullName']."</td>
                                        <td>".$participants['courseYearSection']."</td>
                                        <td>".$participants['emailAddress']."</td>
                                        <td>".$participants['studentNumber']."</td>
                                        <td>
                                            <a href='participantList.php?participantID=".$participants['participantID']."'> Delete </a>
                                        </td>
                                    </tr>";
                                }
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </section>
        <section class="bottom">
            <section class="event yearend">
                <div class="table">
                    <h2> Year-End Party </h2>
                    <table class="participants">
                        <thead>
                            <tr class="category">
                                <th>Full Name</th>
                                <th>Course</th>
                                <th>Email Address</th>
                                <th>Student Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $rownum = mysqli_num_rows($YearEndparticipants);

                            if($rownum>0){
                                while ($participants = mysqli_fetch_assoc($YearEndparticipants)){
                                    echo "
                                    <tr class='choice'>
                                        <td>".$participants['fullName']."</td>
                                        <td>".$participants['courseYearSection']."</td>
                                        <td>".$participants['emailAddress']."</td>
                                        <td>".$participants['studentNumber']."</td>
                                        <td>
                                            <a href='participantList.php?participantID=".$participants['participantID']."'> Delete </a>
                                        </td>
                                    </tr>";
                                }
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </section>
            <section class="event yearnew">
                <div class="table">
                    <h2> Year-New Party </h2>
                    <table class="participants">
                        <thead>
                            <tr class="category">
                                <th>Full Name</th>
                                <th>Course</th>
                                <th>Email Address</th>
                                <th>Student Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $rownum = mysqli_num_rows($YearNewparticipants);

                            if($rownum>0){
                                while ($participants = mysqli_fetch_assoc($YearNewparticipants)){
                                    echo "
                                    <tr class='choice'>
                                        <td>".$participants['fullName']."</td>
                                        <td>".$participants['courseYearSection']."</td>
                                        <td>".$participants['emailAddress']."</td>
                                        <td>".$participants['studentNumber']."</td>
                                        <td>
                                            <a href='participantList.php?participantID=".$participants['participantID']."'> Delete </a>
                                        </td>
                                    </tr>";
                                }
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </section>
    </main>
</body>
</html>