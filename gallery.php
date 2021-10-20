<?php include "server.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gallery | Eagle Flight Chaplain</title>
        <meta name="author" content="Onostar media">
        <meta name="description" content="Eagle Flight Chaplain is a Christian Organisation that engages in reaching out to students in schools, prisoners in the prison/correctional centers, reaching out to the sick in hospitals and praying for them, as well as reaching out to the public through Crusades in cities and villages.">
        <meta name="keyword" content="chaplain, military, services, schools, prisons, hospitals, helping hands">
        <link rel="icon" href="images/eagle_flight_chaplain_logo.png" type="image/png" size="33X32">
        <link rel="stylesheet" href="fontawesome-free-5.12.1-web/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.css">
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!-- Banner and frontpage with logo and nav -->
        <section class="frontPage" id="galleryPage">
            <header class="main-head" id="mainHeader">
                <h1 id="h1">
                    <a href="index.php" title="home">
                        <img class="logo" src="images/eagle_flight_chaplain_logo.png" alt="Eagle flight chaplain">
                        <div class="title"><span>Eagle</span> <span style="color:yellow">Flight</span> <span style="color:red">Chaplain</span>
                        <br><span class="tagline">the crusader</span></div>
                    </a>
                </h1>
                <nav id="navigation">
                    <ul>
                        <li><a href="about.php" title="who we are">About us</a></li>
                        <li><a href="index.php#causes" title="Our causes & activities">Our Causes</a></li>
                        <li><a href="events.php" title="Upcoming events">Events</a></li>
                        <li><a class="active" href="gallery.php" title="Our activities in frames">Gallery</a></li>
                        <li><a href="index.php#getIntouch" title="contact us">Get in touch</a></li>
                    </ul>
                </nav>
                <div class="menu-icon" onclick="displayMenu()">
                    <a href="javasrcipt:void(0)"><i class="fas fa-bars"></i></a>
                </div>
            </header>
            <div class="banner">
                <img src="images/gallery.jpg" alt="Eagle flight chaplain">
            </div>
        <div class="tag">
            <h2>Gallery</h2>
            <p>Shots of our activities</p>
        </div>
        
    </section>
    <!-- main body -->
    <main class="container">
        <!-- menu items section -->
        <section class="menu-page" id="galleryItems">
            <p class="text-center">See photos of our causes and activities</p>
            <div class="gallery-items">
                <?php
                    $get_media = $connectdb->prepare("SELECT * FROM media ORDER BY post_date LIMIT 8");
                    $get_media->execute();
                    
                    if(!$get_media->rowCount() > 0){
                        echo "<p class='no_result'>No record found!</p>";
                    }else{
                
                    $views = $get_media->fetchAll();
                    foreach($views as $view):
                ?>
                <figure>
                    <img src="<?php echo 'images/'.$view->photo;?>" alt="<?php echo $view->title;?>">
                    <figcaption><?php echo $view->title?></figcaption>
                </figure>
                <?php endforeach; }?>
                
            </div>
        </section>
        <!-- social media section -->
        <section class="connect">
            <h2 class="text-center">Connect with us</h2>
            <div class="socila-media">
                <a href="#" title="Connect with us on facebook"><i class="fab fa-facebook"></i></a>
                <a href="#" title="Connect with us on Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" title="Connect with us on twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" title="Connect with us on linkedin"><i class="fab fa-linkedin"></i></a>
            </div>
        </section>
    </main>
    <!-- footer section -->
    <?php include "footer.php"?>

</body>
</html>