<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF=8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KickSiteLogIn</title>
        <link rel="stylesheet" href="css/log-in_style.css">
        <!----favicon need-->
    </head>

    <body>
        <div class="container">
            
            <div class="forms-container">

                <div class="form-section admin-form">
                    <form action="" method="post">

                      <h2>KickSite</h2>
                      <span>Admin Log In</span>
                      <input type="text" placeholder="Username" required />
                      <input type="password" placeholder="Password" required />
                      <button>Log-in</button>
                    </form>
                </div>
            

                <div class="form-section enrollee-form">
                    <form action="" method-="post">
                <?php 
             
                include("php/config.php");
                if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $password = mysqli_real_escape_string($con,$_POST['password']);

                $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['id'] = $row['Id'];
                }else{
                    echo "<div class='message'>
                        <p>Wrong Username or Password</p>
                        </div> <br>";
                    echo "<a href='html/index.html'><button class='btn'>Go Back</button>";
            
                }
                if(isset($_SESSION['valid'])){
                    header("Location: index.html");
                }
                }else{
            
                ?>

                      <h2>KickSite</h2>
                      <span>Enrollee Log-In</span>
                      <input type="text" for="email" id="email" placeholder="Email" autocomplete="off" required />
                      <input type="password" for="password" id="password" placeholder="Password" autocomplete="off" required />
    
                      <div class="field">
                        <input type="submit" class="btn" name="submit" value="Login" required>
                      </div>
                    </form>
                   <a href="sign-up.php" target="_blank">Sign-Up Here!</a>
                </div>
                <?php } ?>
            </div>

            <div class="overlay">

                <div class="overlay-panel adlog">
                    
                    <div class="overlay-panel-active">
                        <h2>Welcome Admin!</h2>

                        <p>If you're an Enrollee Please Log Here</p>
                        <button id="enllog-button">Sign-In as a Enrollee</button>
                    </div>
                </div>

                <div class="overlay-panel enllog">
                    <div class="overlay-panel-active">
                        <h2>Welcome Enrollee!</h2>

                        <p>If you're an Admin Please Log Here</p>
                        <button id="adlog-button">Sign-In as a Admin</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="jscript/script.js"></script>
    </body>
</html>


