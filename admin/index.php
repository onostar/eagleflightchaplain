<?php
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Eagle Flight Chaplain</title>
    <meta name="author" content="Onostar media">
    <meta name="description" content="Eagle Flight Chaplain is a Christian Organisation that engages in reaching out to students in schools, prisoners in the prison/correctional centers, reaching out to the sick in hospitals and praying for them, as well as reaching out to the public through Crusades in cities and villages.">
    <meta name="keyword" content="chaplain, military, services, schools, prisons, hospitals, helping hands">
    <meta property="og:title" content="Eagle flight chaplain.">
    <meta properrty="og:url" content="https://www.eagleflightchaplain.org">
    <meta property="og:description" content="Eagle Flight Chaplain is a Christian Organisation that engages in reaching out to the lost and helpless">
    <meta property="og:image" contentd="https://eaglgeflightchaplain.org/images/eagle_flight_chaplain_logo_fav_icon.png">
    <link rel="icon" href="images/eagle_flight_chaplain_logo.png" type="image/png" size="33X32">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.css">
    <link rel="stylesheet" href="fontawesome-free-5.12.1-web/css/all.css">
    <link rel="stylesheet" href="controller/style.css">
    
</head>
<body>
    <div class="banner_img">
        <img src="images/eagle_flight_chaplain_warri.jpg" alt="Eagle flight chaplain banner">
    </div>
    
    <header>
        <h1 class="logo">
            <a href="index.php" title="home">
                <img src="images/eagle_flight_chaplain_logo.png" alt="Eagle flight chaplain" class="img-fluid">
                <span>
                    <span style="color:#fff;">Eagle</span> <span style="color:greenyellow;">Flight</span> <span style="color:red;">Chaplain</span>
                    <p class="sub_title">The Crusader</p>
                </span>
            </a>
        </h1>
        <div class="rms">
            <h2>Administrator Portal</h2>
            
        </div>
        
    </header>
    
    <main>
        <div class="success">
            <?php
                if(isset($_SESSION['success'])){
                    echo "<p>" .$_SESSION['success']. "</p>";
                    unset($_SESSION['success']);
                }
            ?>
        </div>
        <section id="login_reg">
            <div class="login_details">
                <div class="error">
                    <?php
                        if(isset($_SESSION['error'])){
                            echo "<p>". $_SESSION['error']. "</p>";
                            unset($_SESSION['error']);
                        }
                    ?>
                </div>
                <h2>Enter Admin details</h2>
                <form action="controller/login.php" method="post">
                    <label for="login">Email</label><br>
                    <input type="email" name="admin_email" id="login" placeholder="Enter your email" required><br><br>
                    <label for="password">Password</label><br>
                    <input type="password" name="user_password" id="password" placeholder="Enter password" required><br>
                    <button type="submit" name="submit_login">Login</button>
                </form>
            </div>
                
            <!-- <div class="reg_details">
                <h2>Register for a new account</h2>
                <div class="error">
                    <?php
                        if(isset($_SESSION['error'])){
                            echo "<p>". $_SESSION['error']. "</p>";
                            unset($_SESSION['error']);
                        }
                    ?>
                </div>
                <form action="register.php" method="POST">
                    <div class="details">
                        <input type="text" name="first_name" placeholder="First Name">
                        <input type="text" name="last_name" placeholder="Last Name">
                    </div>
                    <div class="details">
                        <input type="email" name="email" placeholder="Email">
                        <input type="tel" name="phone_number" placeholder="Phone Number">
                    </div>
                    <div class="details">
                        <input type="password" name="user_password" placeholder="enter password">
                        <input type="password" name="confirm_password" placeholder="Confirm password">
                    </div>
                    <button type="submit" name="submit_reg">Register</button>
                </form>
            </div> -->
        </section>
    </main>
    
    <!-- <script src="bootstrap.min.js"></script> -->
    <script src="controller/jquery.js"></script>
    <script src="controller/script.js"></script>
</body>
</html>