<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <?php
        session_start();

        $DBHost = "localhost";
        $DBUser = "root";
        $DBPass = "";
        $DBName = "eventsdb";
        $conn = mysqli_connect($DBHost, $DBUser, $DBPass, $DBName);
    ?>
    <main>
        <section class="loginform">
            <img src="../images/loginbg.jpg">
            <form method="POST">
                <h1> Welcome </h1>
                <input type="text" name="email" placeholder="Email Address" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" name="submit" value="Login">
                <?php 
                    if(isset($_POST["submit"])){
                        $email = $_POST["email"];
                        $password = $_POST["password"];

                        $getAdmin = "SELECT * FROM admins WHERE emailAddress='$email' AND password='$password';";
                        $adminsResult = mysqli_query($conn, $getAdmin);

                        if (mysqli_num_rows($adminsResult) == 1) {
                            $admin=mysqli_fetch_assoc($adminsResult);

                            $_SESSION['adminID'] = $admin['adminID'];
                            $_SESSION['username'] = $admin['fld_username'];
                            $_SESSION['loggedIn'] = true;

                            header("location: home.php");
                            exit();
                        } 
                        else {
                            echo "<p class='result'> Invalid credentials. </p>";
                        }
                    }
                ?>
                <div class="socials">
                    <p> Continue with social media </p> 
                    <div class="accounts">
                        <div class="media">
                            <a href="https://www.facebook.com" target="_blank"><img src="../images/fblogo.png"></a>
                            <p> Facebook </p>
                        </div>
                        <div class="media">
                            <a href="https://www.twitter.com" target="_blank"><img src="../images/xlogo.png"></a>
                            <p> X </p>
                        </div>
                        <div class="media">
                            <a href="https://www.google.com" target="_blank"><img src="../images/googlelogo.png"></a>
                            <p> Google </p>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
</body>
</html>