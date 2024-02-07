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

        $getParticipants = "SELECT * FROM participants;";
        $participantsResult = mysqli_query($conn, $getParticipants);

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
        <section>
            <table class="participants">
                    <thead>
                        <tr class="category">
                            <th>Full Name</th>
                            <th>Course</th>
                            <th>Year</th>
                            <th>Section</th>
                            <th>Email Address</th>
                            <th>Student Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $rownum = mysqli_num_rows($participantsResult);

                        if($rownum>0){
                            while ($participants = mysqli_fetch_assoc($participantsResult)){
                                echo "
                                <tr class='choice'>
                                    <td>".$participants['fullName']."</td>
                                    <td>".$participants['course']."</td>
                                    <td>".$participants['year']."</td>
                                    <td>".$participants['section']."</td>
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
        </section>
    </main>
</body>
</html>