<?php
    include "server.php";

    if(isset($_GET['event'])){
        $event_id = $_GET['event'];
        $show_event = $connectdb->prepare("SELECT * FROM events WHERE event_id = :event_id");
        $show_event->bindvalue("event_id", $event_id);
        $show_event->execute();
        $views = $show_event->fetchAll();
        foreach($views as $view):
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $view->title?> | Eagle Flight Chaplain</title>
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
        <section class="frontPage" id="aboutPage">
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
                        <li><a class="active" href="about.html" title="who we are">About us</a></li>
                        <li><a href="index.php#causes" title="Our causes & activities">Our Causes</a></li>
                        <li><a href="events.php" title="Upcoming events">Events</a></li>
                        <li><a href="gallery.php" title="Our activities in frames">Gallery</a></li>
                        <li><a href="index.php#getIntouch" title="contact us">Get in touch</a></li>
                    </ul>
                </nav>
                <div class="menu-icon" onclick="displayMenu()">
                    <a href="javasrcipt:void(0)"><i class="fas fa-bars"></i></a>
                </div>
            </header>
            <div class="banner">
                <img src="<?php echo 'images/'.$view->photo?>" alt="<?php echo $view->title?>">
            </div>
        <div class="tag">
            <div class="animate">
                <h2><?php echo $view->title?></h2>
                <!-- <p>We are dedicated to building caring relationships with the hope of gaining permission to share the life-changing Good News of Jesus Christ in a non-threatening manner</p> -->
            </div>
        </div>
        
    </section>
    <!-- main body -->
    <main class="container">
        <!-- about us section -->
        <section class="about" id="aboutUs">
            <h2>Event Details </h2>
            
            <div class="row">
                <div class="col-md-6 text-justify">
                   <p><?php echo $view->details?>
                    </p>
                    
                </div>
                <div class="col-md-6">
                    <figure class="more_info">
                        <p>Date: <span class="event_date"><?php echo date("jS M, Y", strtotime($view->event_date));?></span></p>
                        <p>Location: <span class="event_date"><?php echo $view->location;?></span></p>
                        <?php 
                            // $today_date = new Date();
                            if(date("Y-m-d") > date("Y-m-d", strtotime($view->event_date))){
                                echo "<p class='completed'><i class='fas fa-flag'></i> This Event has been completed</p>";
                            }else{
                                echo "<a href='volunteer.php'><button class='btn btn-success' style='background:green;'>Volunteer</button></a>";
                                
                            }
                        ?>
                        
                        
                    </figure>
                    
                </div>
            </div>
            <?php endforeach?>
            <section id="featured">
            
                <h2>More Events</h2>
                <div class="featured">
                    <?php
                        $select_featured = $connectdb->prepare("SELECT SUBSTRING_INDEX(details, ' ', 15) AS details, title, event_date, event_status, event_id, photo FROM events WHERE event_id != :event_id ORDER BY event_date ASC LIMIT 5");
                        $select_featured->bindvalue("event_id", $event_id);
                        $select_featured->execute();
                        $rows = $select_featured->fetchAll();
                        foreach($rows as $row):
                    ?>
                    <figure>
                        <a href="javascript:void(0);" onclick="showEvent('<?php echo $row->event_id?>')">
                            <img src="<?php echo 'images/'.$row->photo;?>" alt="Upcoming event">
                            <figcaption>
                                <div class="todo">
                                <p style="font-weight:bold;"><?php echo $row->title?></p>
                                <!-- <p> <?php echo $row->details?>.....</p> -->
                                </div>
                                
                            </figcaption>
                        </a>
                    </figure>
                    
                    <?php endforeach ?>
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
<?php }?>

    <!-- footer section -->
    <?php include "footer.php"?>

</body>
</html>