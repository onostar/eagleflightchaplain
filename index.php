<?php include "server.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eagle Flight Chaplain</title>
    <meta name="author" content="Onostar media">
    <meta name="description" content="Eagle Flight Chaplain is a Christian Organisation that engages in reaching out to students in schools, prisoners in the prison/correctional centers, reaching out to the sick in hospitals and praying for them, as well as reaching out to the public through Crusades in cities and villages.">
    <meta name="keyword" content="chaplain, military, services, schools, prisons, hospitals, helping hands">
    <meta property="og:title" content="Eagle flight chaplain.">
    <meta properrty="og:url" content="https://www.eagleflightchaplain.org">
    <meta property="og:description" content="Eagle Flight Chaplain is a Christian Organisation that engages in reaching out to the lost and helpless">
    <meta property="og:image" contentd="https://eaglgeflightchaplain.org/images/eagle_flight_chaplain_logo_fav_icon.png">
    <link rel="icon" href="images/eagle_flight_chaplain_logo.png" type="image/png" size="33X32">
    <link rel="stylesheet" href="fontawesome-free-5.12.1-web/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Banner and frontpage with logo and nav -->
    <section class="frontPage" id="frontPage">
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
                    <li><a href="#whoWeAre" title="who we are">About us</a></li>
                    <li><a href="#causes" title="Our causes & activities">Our Causes</a></li>
                    <li><a href="events.php" title="Events">Events</a></li>
                    <li><a href="gallery.php" title="Our activities in frames">Gallery</a></li>
                    <li><a href="#getIntouch" title="contact us">Get in touch</a></li>
                </ul>
            </nav>
            
            <div class="menu-icon" onclick="displayMenu()">
                <a href="javasrcipt:void(0)"><i class="fas fa-bars"></i></a>
            </div>
        </header>
        <div class="sliding">
            <div class="slidethis">
                <div class="bana">
                    <div class="banner">
                        <img src="images/eagle_flight_chaplain_warri.jpg" alt="Eagle flight chaplain">
                    </div>
                    <div class="tag">
                        <div class="animate">
                            <h2>Service to Humanity</h2>
                            <p>Providing needed support to aid the human existence while upholding Godly standards<br>Prisons, schools, Hospitals and rescue mission</p>
                            <div>
                                <a href="volunteer.php"><button>Join us</button></a>
                                <a  href="#getInTouch"><button class="trans">Contact us</button></a>
                            </div>
                        </div>
                        <div class="indicator">
                            <a href="#whoWeAre"><i class="fas fa-angle-double-down"></i></a>
                        </div>
                    </div>
                </div>
                <div class="bana">
                    <div class="banner">
                        <img src="images/eagle_flight_chaplain_helping_people.jpg" alt="Eagle flight chaplain">
                    </div>
                    <div class="tag">
                        <div class="animate">
                            <h2>Service to Humanity</h2>
                            <p>Providing needed support to aid the human existence while upholding Godly standards<br>Prisons, Schools, Hospitals and Rescue Mission for accident victims</p>
                            <div>
                                <a href="volunteer.php"><button>Join us</button></a>
                                <a  href="#getInTouch"><button class="trans">Contact us</button></a>
                            </div>
                        </div>
                        <div class="indicator">
                            <a href="#whoWeAre"><i class="fas fa-angle-double-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main body -->
    <main class="container">
        <section id="welcome">
            <h2>Welcome to <span style="color:green">Eagle</span> <span style="color:yellow">Flight</span> <span style="color:red">Chaplain</span></h2>
            <hr>
        </section>
        <!-- about us section -->
        <section class="about" id="whoWeAre">
            <h2>Who we are</h2>
            <div class="row">
                <div class="col-md-6">
                   <p class="text-justify">Eagle Flight Chaplain is a Non Governmental Organisation, fully registered by the federal Government of Nigeria under the Corporate Affairs Commission in 2015.We are a Christian Organisation that engages in reaching out to students in schools, prisoners in the prison/correctional centers, reaching out to the sick in hospitals and praying for them, as well as reaching out to the public through Crusades in cities and villages<br><br>
                    
                    The Chaplaincy is a military-like organisation in line with St. Martins' dream, who happened to be a military officer that rendered help to a beggar in the cold season by giving him his jacket to cover up against the cold. He was however visited by Christ for that help, and this brought about the Chaplain Movemnet in the military till today, to assist officers even during wars and periods of crisis.

                </p> 
                   <a href="about.php"><button class="btn btn-info">Learn more</button></a> 
                   <a href="#getIntouch"><button class="btn btn-info">Contact us</button></a> 
                </div>
                <div class="col-md-6">
                    <img class="img-thumbnail" src="images/eagle_flight_chaplain_banner2.jpg" alt="about us">
                </div>
            </div>
        </section>
        <!-- activities and causes -->
        <section class="featured" id="causes">
            <h2 class="text-center">Our Causes</h2>
            <p class="text-center">We are dedicated to building caring relationships with the hope of gaining permission to share the life-changing Good News of Jesus Christ in a non-threatening manner</p>
            <hr>
            <div class="featured_cousines">
                <div class="featuredCousines">
                    <figure id="featured1">
                        <div class="featuredSlide">
                            <div class="slideImg">
                                <img src="images/eagleflight_chaplain_helping_schools.jpg" alt="Reach out to students">
                            </div>
                            <!-- <div class="slideImg">
                                <img src="images/chef-pee-corporate-beans-plantain.jpg" alt="Corporate cuisines">
                            </div> -->
                        </div>
                        <figcaption class="text-center">
                            <h3>Help children through schools</h3>
                            <p>Helping the helpless child to achieve their dreams through good edcuation.</p>
                        </figcaption>
                    </figure>
                    <figure id="featured2">
                        <div class="featuredSlide">
                            <div class="slideImg">
                                <img src="images/help_to_hsopiatl_patients.jpeg" alt="Reach out to the sick">
                            </div>
                            <!-- <div class="slideImg">
                                <img src="images/chef-pee-in-home-akpu-egusi.jpg" alt="Home dishes">
                            </div> -->
                        </div>
                        <figcaption class="text-center">
                            <h3>Reaching out to the sick</h3>
                            <p>We Support the sick via prayer and finance.</p>
                        </figcaption>
                    </figure>
                    <figure id="featured3">
                        <div class="featuredSlide">
                            <div class="slideImg">
                                <img src="images/helping_prisoners.jpg" alt="Preaching the gospel to prisoners">
                            </div><!-- 
                            <div class="slideImg">
                                <img src="images/chef-pee-events-fried-n-jollof-rice-chicken.png" alt="Special events cusisines">
                            </div> -->
                        </div>
                        <figcaption class="text-center">
                            <h3>Reaching out to the lost</h3>
                            <p>Showing prisoners the way to a better future and incoperating them to the society</p>
                        </figcaption>
                    </figure>
                    
                </div>
            </div>
        </section>
        <!-- Upcoming events -->
        <section class="food-of-the-day" id="events">
            <h2>Upcoming Events</h2>
            <?php
                $get_event = $connectdb->prepare("SELECT SUBSTRING_INDEX(details, ' ', 40) AS details, title, event_date, event_status, event_id, photo FROM events WHERE event_date > CURDATE() ORDER BY event_date ASC LIMIT 1");
                $get_event->execute();
                if(!$get_event->rowCount() > 0){
                    echo "<p class='no_result'>No record found!</p>";
                }else{
                $events = $get_event->fetchAll();
                foreach($events as $event):
            ?>
            <div class="row">
                <div class="col-md-7 col-sm-7">
                    <img class="img-thumbnail" src="<?php echo 'media/'.$event->photo ?>" alt="<?php echo $event->title?>">
                </div>
                <div class="col-md-5 col-sm-5">
                    <h3><?php echo $event->title?></h3>
                    <p class="text-justify"><?php echo $event->details ?>.....More</p>
                    <div class="daily-food-price">
                        <a href="join_us.html"><button class="btn btn-danger">Volunteer Now</button></a>
                        <a href="javascript:void(0)" title="Event information" onclick="showEvent('<?php echo $event->event_id?>')"><button class="btn btn-danger" style="background:green;">View Details</button></a>
                    </div>
                </div>
            </div>
            <?php endforeach; }?>
        </section>
    </main>
    <section class="call-to-action">
        <img src="images/littleboy_with_water.jpg" alt="rendering help">
        <div class="in-house-text">
            <div class="in-house-image">
                <img src="images/soldier-giving-red-fruit-on-2-children-during-daytime-36785.jpg" alt="soldier giving help">
            </div>
            <div class="in-house">
                <h2>We help people in need</h2>
                <h3>VOLUNTEER OR DONATE TODAY</h3>
                <p>Join us in making an impact in the world today. Help people live a better life, lets give hope to the hopeless and homes to the homeless.</p>
                <a href="volunteer.php"><button>Join us</button></a>
            </div>
        </div>
    </section>
    <section class="container">
        <!-- clients section -->
        <section class="clientsPhotos">
            <h2 class="text-center">Activities in Frame</h2>
            <p class="text-center">Take a peek at our recent events media and gallery</p>
            <hr>
            <div class="clients">
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
                    <img src="<?php echo 'media/'.$view->photo;?>" alt="<?php echo $view->title?>">
                    <figcaption><?php echo $view->title?></figcaption>
                </figure>
                
                
                <?php endforeach;?>
                

                <?php }?>
            </div>
            
                <a href="gallery.php" style="text-align:center; display:block;" title="Our activities in frames"><button>View more <i class="fas fa-angle-double-right"></i></button></a>
        </section>
        <section class="tips">
            <h2 class="text-center">Our Partners</h2>
            <p>We are glad to be a blessing to others with the help of our partners</p>
            <hr>
            <div class="tipsNtricks">
                <!-- <article><a href="javascript:void(0);">
                    <figure>
                        <img src="images/chef-pee-bbq-fish.jpg" alt="how to make cat fish bbq">
                        <figcaption>
                            <h4>How to make Cat Fish Barbeque at Home</h4>
                            <p>It is always quite dificult for individuals to get this done at home...</p>
                        <figcaption>
                    </figure></a>
                </article>
                <article><a href="javascript:void(0);">
                    <figure>
                        <img src="images/chef-pee-benefits-of-pineapple.jpg" alt="Benefits of pineapple">
                        <figcaption>
                            <h4>10 Benefits of Pineapple to your health</h4>
                            <p>Pineapples are rich in so many benefits to the human body...</p>
                        <figcaption>
                    </figure></a>
                </article>
                <article><a href="javascript:void(0);">
                    <figure>
                        <img src="images/chef-pee-bbq-fish.jpg" alt="how to make cat fish bbq">
                        <figcaption>
                            <h4>Best cake designs for your wedding</h4>
                            <p>Your wedding cake speaks so much about your wedding, we offer you...</p>
                        <figcaption>
                    </figure></a>
                </article> -->
                <img src="" alt="partners">
                <img src="" alt="partners">
                <img src="" alt="partners">
                <img src="" alt="partners">
                <img src="" alt="partners">
                <img src="" alt="partners">
            </div>
        </section>
    </section>
    <section class="get-in-touch" id="getIntouch">
        <h2 class="text-center">Get in touch with us</h2>
        <div class="contactInfo">
            <div class="infos">
                <p>Our team is entirely committed to you and your needs. We are very prompt and return inquiries within minutes during our normal hours of operation. Please feel free to inquire about any questions or comments you may have.</p>
                <p>You can also visit us at:</p>
             <p><i class="fas fa-street-view"></i> 90 Warri/Sapele road, Warri, Delta state.</p>
             <p><i class="fas fa-tty"></i> Phone: +2348105371146, +2348029714568</p>
             <p><i class="fas fa-envelope-open-text"></i> Email: info@eagleflightchaplain.org</p>
                <p><i class="fas fa-hands-helping"></i> To volunteer or make any contributions, kindly fill the form</p>
            </div>
            <div class="contactForm">
                <h3 class="text-center">Fill the form</h3>
                <form method="POST" action="contact.php" id="contactForm">
                    <div class="contact-flex">
                        <input type="text" name="contactName" id="contactName" placeholder="Full Name*" required>
                        <input type="text" name="contactEmail" id="contactEmail" placeholder="Email*" required>
                    </div>
                    <div class="contact-flex">
                        <input type="tel" name="contactPhone" id="contactPhone" placeholder="Phone Number*" required>
                        <select name="serviceRequest" id="serviceRequest">
                            <option selected value="">Service Request</option>
                            <option value="Complaints and review">General Complaints and review</option>
                            <option value="Volunteer">Volunteer for upcoming event</option>
                            <option value="Donation">Partnership & Donation</option>
                            
                        </select>
                        
                    </div>
                    <!-- <div class="contact-flex">
                        <input type="text" name="contactAddress" id="contactAddress" placeholder="Your Address*" required>
                        <input type="text" name="eventDate" id="eventDate" placeholder="Event Date">
                    </div> -->
                    <!-- <div class="contact-flex">
                        <input type="text" name="eventBudget" id="eventBudget" placeholder="Event Budget">
                        <input type="text" name="eventLocation" id="eventLocation" placeholder="Event Location">
                    </div> -->
                    <textarea name="contactMessage" id="contactMessage" placeholder="Your message"></textarea>
                    <button type="submit" name="submitContact" id="submitContact">Send</button>
                </form>
            </div>
        </div>
        
    </section>
    <section class="container">
        <!-- social media section -->
        <section class="connect">
            <h2 class="text-center">Connect with us</h2>
            <div class="socila-media">
                <a href="#" title="Connect with us on facebook"><i class="fab fa-facebook"></i></a>
                <a href="#" title="Connect with us on Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" title="Watch us on Youtube"><i class="fab fa-youtube"></i></a>
                <a href="#" title="Connect with us on linkedin"><i class="fab fa-linkedin"></i></a>
            </div>
        </section>
    </section>
    <!-- footer section -->
    <?php include "footer.php"?>


    
</body>
</html>