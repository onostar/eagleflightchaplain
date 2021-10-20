<?php
    require "server.php";
    session_start();
    if(isset($_SESSION['users'])){
        $user = $_SESSION['users'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Eristics is a target oriented 
	and goal driven platform/blog with the sole aim of providing 
	value-driven services, correct and information through the application of strategic and dynamic 
	solutions to meet up with challenges in all strata of the society">
    <meta name="keyword" content="events, eristics, eristicminds, politics, gossips,
	graphics, web, blog, news">
    <title>Eagle Flight Chaplain | Admin Portal</title>
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.css">
    <link rel="stylesheet" href="../fontawesome-free-5.15.1-web/css/all.css">
    <link rel="icon" type="image/png" href="../images/eristics_mini_logo.png" size="32X32">
    <link rel="stylesheet" href="style.css">
    
</head>
<body id="mainBody">
    <header class="admin_header">
        <h1 class="logo">
            <a href="admin.php" title="home">
                <img src="../images/eagle_flight_chaplain_logo.png" alt="Eagle flight chaplain" class="img-fluid">
                <span>
                    <span style="color:#fff;">Eagle</span> <span style="color:greenyellow;">Flight</span> <span style="color:red;">Chaplain</span>
                    <p class="sub_title">The Crusader</p>
                </span>
            </a>
        </h1>
        <div class="rms">
            <h2>Administrator Portal</h2>
            
        </div>
        <div class="login">
            <button id="loginDiv"><i class="far fa-user"></i> 
                <?php 
                    /* $statement = $connectdb->prepare("SELECT * FROM users WHERE email = :email");
                    $statement->bindvalue('email', $user);
                    $statement->execute();
                    $infos = $statement->fetchAll();
                    foreach($infos as $info){
                        echo "Hello $info->first_name";
                    }
                       */
                ?> Hello Admin
                <i class="fas fa-chevron-down"></i></button>
            <div class="login_option" id="account">
                <div>
                    <a href="javascript:void(0);" class="signupBtn">Change password</a>
                    <!-- <a href="javascript:void(0);" class="signupBtn">My orders</a> -->
                    <button id="logoutBtn"><a href="logout.php">Logout</a></button>
                    
                </div>
            </div>
        </div>
        <div class="menu_icon">
            <a href="javascript:void(0)"><i class="fas fa-bars"></i></a>
        </div>
    </header>
    <main class="admin_main">
        <aside class="main_menu" id="desktop_menu">
            <div class="login">
                <button id="loginDiv"><i class="far fa-user"></i> 
                     Hello Admin
                    <i class="fas fa-chevron-down"></i></button>
                <div class="login_option" id="account">
                    <div>
                        <a href="javascript:void(0);" class="signupBtn">Change password</a>
                
                        <button id="logoutBtn"><a href="logout.php">Logout</a></button>
                        
                    </div>
                </div>
            </div>
            <nav>
                <h3><a href="admin.php" title="Home"><i class="fas fa-user"></i> Admin</a></h3>
                <ul>
                    
                    <li><a href="javascript:void(0);" id="addMenu" title="Add updates and stories" class="page_navs" data-page="addItems">Post Events <i class="fas fa-newspaper"></i></a></li>
                    <li><a href="javascript:void(0);" id="deleteItem" title="Delete stories" class="page_navs" data-page="deleteItems">Delete Events <i class="fas fa-trash"></i></a></li>
                    <li><a id="showUsers" href="javascript:void(0);" class="page_navs" data-page="userList">Event List <i class="fas fa-blog"></i></a></li>
                    <li><a href="javascript:void(0);" id="addStore" class="page_navs" data-page="addRestaurant" class="page_navs">Upload Media <i class="fas fa-photo-video"></i></a></li>
                    <li><a href="javascript:void(0);" id="addMedia" class="page_navs" data-page="mediaList" class="page_navs">View Gallery <i class="fas fa-photo-video"></i></a></li>
                    <li><a id="subscriberList"  href="javascript:void(0);" class="page_navs" data-page="subscribers">Volunteers <i class="fas fa-users"></i></a></li>
                </ul>
            </nav>
        </aside>
        
        
        <section id="contents">
            <div class="success_message">
                <p>
                    <?php
                        if(isset($_SESSION['success'])){
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        }
                    ?>
                </p>
            </div>
            <div class="error_message">
                <p>
                    <?php
                        if(isset($_SESSION['error'])){
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        }
                    ?>
                </p>
            </div>
            <div id="dashboard">
                <!-- <div id="userSummary">
                    <figure>
                        <div id="user_img">
                            <img src="images/admin.png" alt="restuarant logo">
                        </div>
                        <figcaption>
                            <h3>Foodies</h3>
                            <h3>Onostar Media</h3>
                            <h3>Super Admin</h3>
                        </figcaption>
                    </figure>
                </div> -->
                <div class="cards" id="card0">
                    <a href="javascript:void(0)">
                        <p>Upcoming Events</p>
                        <div class="infos">
                            <i class="fas fa-newspaper"></i>
                            <p>
                                <?php
                                    
                                    $get_events = $connectdb->prepare("SELECT * FROM events WHERE event_date > CURDATE()");
                                    $get_events->execute();
                                    
                                    $events = $get_events->rowCount();
                                    
                                    echo $events;
                                ?>
                            </p>
                        </div>
                    </a>
                </div> 
                <div class="cards" id="card1">
                    <a href="javascript:void(0)">
                        <p>Total Events</p>
                        <div class="infos">
                            <i class="fas fa-eye"></i>
                            <p>
                                <?php
                                   $get_events = $connectdb->prepare("SELECT * FROM events");
                                   $get_events->execute();
                                   
                                   $events = $get_events->rowCount();
                                   
                                   echo $events;
                                
                                ?>
                            </p>
                        </div>
                    </a>
                </div> 
                <div class="cards" id="card2">
                    <a href="javascript:void(0)">
                        <p>Volunteers</p>
                        <div class="infos">
                            <i class="fas fa-comment"></i>
                            <p>
                                <?php
                                    $get_events = $connectdb->prepare("SELECT * FROM volunteers");
                                    $get_events->execute();
                                    
                                    $events = $get_events->rowCount();
                                    
                                    echo $events;
                                ?>
                            </p>
                        </div>
                    </a>
                </div> 
                <div class="cards" id="card3">
                    <a href="javascript:void(0)">
                        <p>Completed Events</p>
                        <div class="infos">
                            <i class="fas fa-envelope"></i>
                            <p>
                                <?php
                                    $get_events = $connectdb->prepare("SELECT * FROM events WHERE event_date < CURdATE()");
                                    $get_events->execute();
                                    
                                    $events = $get_events->rowCount();
                                    
                                    echo $events;
                                ?>
                            </p>
                        </div>
                    </a>
                </div> 
            </div>
            <!-- Dashboard Reports -->
            <div class="summaryReports" id="summaryReports">
                <!-- Graphical representation -->
                <div class="customers_attended" id="upcomingEvents">
                    <h3>Upcoming Events</h3>
                    <table class="sum_table">
                        <thead>
                            <tr>
                                <td>S/N</td>
                                <td>Event Title</td>
                                <td>Event Date</td>
                            </tr>
                        </thead>
                        <?php
                            $n = 1;
                            $get_event = $connectdb->prepare("SELECT * FROM events WHERE event_date >= CURDATE() ORDER BY event_date DESC");
                            $get_event->execute();

                            $events = $get_event->fetchAll();
                            foreach($events as $event):
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $n?></td>
                                <td><?php echo $event->title;?></td>
                                <td><?php echo date("jS M, Y", strtotime($event->event_date));?></td>
                            </tr>
                        </tbody>
                        <?php 
                            $n++; 
                            endforeach;
                               
                        ?>

                    </table>
                    <?php
                        if(!$get_event->rowCount() > 0){
                            echo "<p style='text-align:center; color:chocolate; font-size:1rem; padding:10px;'>No Bookings!</p>";
                        } 
                    ?>
                </div>
                
            </div>
            <!-- add items -->
            <div id="addItems" class="displays">
                <div class="info"></div>
                <div class="add_user_form">
                    <h3>Add an Upcominig Event</h3>
                    <form method="POST" id="addItemForm" action="add_items.php" enctype="multipart/form-data">
                        <div class="inputs">
                            <div class="data">
                                <label for="menu_category">Select date</label><br>
                                <input type="date" name="event_date" id="event_date" required>
                            </div>
                            <div class="data">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" placeholder="Enter item Name" required>
                            </div>
                        </div>
                        <div class="inputs">
                            
                            <div class="data" style="width:100%; height:30vh;">
                                <textarea style="height:100%;" name="details" id="details" placeholder="Enter story details"></textarea>
                            </div>
                        </div>    
                        <div class="inputs">
                            <div class="data">
                                <label for="item_foto">Upload Photo</label>
                                <input type="file" name="foto" id="foto" placeholder="Upload images">
                            </div>
                            <div class="data">
                                <label for="location">Event Location</label>
                                <input type="text" name="location" id="location" placeholder="24 Okumagba road, Warri, Nigeria">
                            </div>
                        </div>
                        <button type="submit" id="add_items" name="add_items">Post Event <i class="fas fa-plus"></i></button>
                    </form>
                </div>
            </div>
            <!-- delete items -->
            <div id="deleteItems" class="displays">
                <div class="info"></div>
                <div class="add_user_form">
                    <h3>Delete Events from Archive</h3>
                    <form method="POST" id="deleteItemForm">
                        <div class="inputs">
                            
                            <div class="data">
                                <label for="itemName">Select Item</label><br>
                                <select name="itemToDelete" id="itemToDelete" required>
                                    <option value="" selected>Select Event</option>
                                    <?php 
                                        $delete_event = $connectdb->prepare("SELECT * FROM events ORDER BY title ASC");
                                        $delete_event->execute();
                                        $shows = $delete_event->fetchAll();
                                        foreach($shows as $show):
                                    ?>
                                    <option value="<?php echo $show->event_id?>"><?php echo $show->title?></option>
                                    <?php endforeach?>
                                </select>
                            </div>
                        </div>
                        <button type="submit" id="delete_item" name="delete_item">Delete <i class="fas fa-trash"></i></button>
                    </form>
                </div>
            </div>
           <!-- Upload Photo -->
           <div id="addRestaurant" class="displays">
                <div class="info"></div>
                <div class="add_user_form">
                    <h3>Upload Photos to Gallery</h3>
                    <form method="POST" action="add_media.php" enctype="multipart/form-data">
                        <div class="inputs">
                            <!-- <input type="hidden" name="media_type" value="photo"> -->
                            <div class="data">
                                <label for="description">Title</label>
                                <input type="text" name="description" placeholder="Photo description" required>
                            </div>
                            <div class="data">
                                <label for="restaurantLogo">Select Image</label><br>
                                <input type="file" name="media_photo" id="mediaPhoto">
                            </div>
                            
                        </div>
                        <button type="submit" name="add_photo" id="add_photo">Add Photo <i class="fas fa-photo-video"></i></button>
                        
                    </form>
                </div>
            </div>
            <!-- Events List -->
            <div id="userList" class="management displays">
                <h3>Activities, Events & Updates List</h3>
                <hr>
                <div class="search">
                    <input type="search" id="searchUsers" placeholder="Enter keyword">
                </div>
                <table id="userTable" class="sum_table">
                    <thead>
                        <tr>
                            <td>S/N</td>
                            <td>Title</td>
                            <td>Location</td>
                            <td>Event Date</td>
                        </tr>
                    </thead>

                    <?php
                        $n = 1;
                        $select_event = $connectdb->prepare("SELECT * FROM events ORDER BY event_date DESC");

                        $select_event->execute();
                        
                        $rows = $select_event->fetchAll();
                        foreach($rows as $row):
                    ?>
                    <tbody>
                        <tr>
                            <td style="text-align:center;"><button style="padding:5px 10px; background:#fff; color:rgb(77, 74, 74); box-shadow:2px 2px 2px var(--secondaryColor);" title="Click to View Event" onclick="displayEvent('<?php echo $row->event_id;?>');"><?php echo $n?></button></td>
                            <td><?php echo $row->title?></td>
                            <td><?php echo $row->location?></td>
                            <td><?php echo date("jS M, Y", strtotime($row->event_date));?></td>
                        </tr>
                    </tbody>

                    <?php $n++; endforeach;?>
                </table>
            </div>
             
            
            <!-- View event details -->
            <div class="management displays" id="events_info">
                <?php
                    if(isset($_GET['update'])){
                        $event_id = $_GET['update'];
                
                        $select_event = $connectdb->prepare("SELECT * FROM events WHERE event_id = :event_id");
                        $select_event->bindvalue("event_id", $event_id);
                        $select_event->execute();
                
                        $views = $select_event->fetchAll();
                        foreach($views as $view):
                ?>
                
                    <h3><?php echo $view->title;?></h3>
                    <hr>
                    <div class="events">
                        <div class="appointments">
                            <div class="event_info">
                                <p><i class="fas fa-layer-group"></i> Location: <input type="text" name="category" value="<?php echo $view->location;?>"></p>

                            </div>
                            <div class="event_date">
                                
                                <p><strong>Date: </strong><input type="text" name="post_date" value="<?php echo date("jS M, Y", strtotime($view->event_date));?>"></p>
                            </div>
                        </div>
                        
                        <div class="event_descriptions">
                            <h4>Details</h4>
                            <hr>
                            <p><?php echo $view->details;?></p>
                        </div>
                        
                
                        <div class="status">
                            <?php
                                if(date("d-m-Y") > date("d-m-Y", strtotime($view->event_date))):
                            ?>
                                <button id="eventDone" >Event Completed <i class="fas fa-thumbs-up"></i></button>
                                
                            <?php endif;?>
                            
                            <button id="eventCancelled" onclick="eventCancelled('<?php echo $view->event_id;?>')">Delete <i class="fas fa-trash"></i></button>
                            <button id="updateStory" onclick="updateStory('<?php echo $view->event_id;?>')">Update <i class="fas fa-edit"></i></button>
                            <button id="volunteerBtn" >Volunteers <i class="fas fa-users"></i></button>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!-- volunteers for this event -->
                <div class="volunteers management" id="volunteerList">
                    <h3>Volunteers</h3>
                    <table id="priceTable" class="sum_table">
                    <div class="search">
                        <input type="search" id="searchPrice" placeholder="Search Volunteers">
                    </div>
                        <thead>
                            <tr>
                                <td>S/N</td>
                                <td>Full Name</td>
                                <!-- <td>Email</td> -->
                                <td>Phone No.</td>
                                <td>Address</td>
                                <td>Sex</td>
                                <td>Age</td>
                                
                                
                            </tr>
                        </thead>

                        <?php
                            $n = 1;
                            $select_volunteers = $connectdb->prepare("SELECT volunteers.full_name, volunteers.event, volunteers.email, volunteers.phone, volunteers.address, volunteers.age, volunteers.sex, events.title FROM volunteers, events WHERE volunteers.event = events.title AND events.event_id = :event_id");
                            $select_volunteers->bindvalue("event_id", $event_id);

                            $select_volunteers->execute();
                            
                            $rows = $select_volunteers->fetchAll();
                            foreach($rows as $row):
                        ?>
                        <tbody>
                            <tr>
                                <td style="text-align:center;"><?php echo $n?></td>
                                
                                <td><?php echo $row->full_name?></td>
                                <!-- <td><?php echo $row->email?></td> -->
                                <td><?php echo $row->phone?></td>
                                <td><?php echo $row->address?></td>
                                <td><?php echo $row->sex?></td>
                                <td><?php echo $row->age?></td>
                                
                            </tr>
                        </tbody>

                        <?php $n++; endforeach;?>
                    </table>
                </div> 
                <?php endforeach; }?>
                
                        
            </div>
            <!-- Update Event details -->
            <div class="management displays" id="events_info">
                <?php
                    if(isset($_GET['edit'])){
                        $event_id = $_GET['edit'];
                
                        $select_event = $connectdb->prepare("SELECT * FROM events WHERE event_id = :event_id");
                        $select_event->bindvalue("event_id", $event_id);
                        $select_event->execute();
                
                        $views = $select_event->fetchAll();
                        foreach($views as $view):
                ?>
                <form action="update_story.php" method="POST">
                    <input type="hidden" name="story_id" value="<?php echo $view->event_id;?>">
                    <h3><input type="text" name="title" id="title" value="<?php echo $view->title;?>"></h3>
                    <hr>
                    <div class="events">
                        <div class="appointments">
                            <div class="event_info">
                                
                                <p><i class="fas fa-layer-group"></i> Location: <input type="text" name="location" value="<?php echo $view->location;?>"></p>

                            </div>
                            <div class="event_date">
                                
                                <p><strong>Date: </strong><input type="date" name="event_date" value="<?php echo $view->event_date;?>"></p>
                            </div>
                        </div>
                        
                        <div class="event_descriptions">
                            <h4>Details</h4>
                            <hr>
                            <textarea name="details" id="story_details"><?php echo $view->details;?></textarea>
                        </div>
                        
                
                        <div class="status">
                            
                            <button type="submit" name="update_news">Update <i class="fas fa-pen-alt"></i></button>
                        </div>
                        <div class="clear"></div>
                    </div>
                </form>

                <?php endforeach; }?>            
            </div>
            
            <!-- media list -->
            <div id="mediaList" class="management displays">
                <h3>Gallery</h3>
                <hr>
                <div class="gallery">
                    <?php
                        $get_media = $connectdb->prepare("SELECT * FROM media ORDER BY Post_date");
                        $get_media->execute();

                        if(!$get_media->rowCount()){
                            echo "<p class='no_result'>No record found!</p>";
                        }
                        $fotos = $get_media->fetchAll();
                        foreach($fotos as $foto):
                    ?>
                    <figure>
                        <img src="<?php echo '../../media/'.$foto->photo?>" alt="<?php echo $foto->title;?>">
                        <figcaption>
                            <p><?php echo $foto->title;?></p>
                            <a href="javascript:void(0)" title="Delete photo" class="delete_foto_btn" onclick="deletePhoto('<?php echo $foto->media_id?>')"><i class="fas fa-trash"></i></a>
                            
                        </figcaption>
                    </figure>
                    <?php endforeach;?>
                </div>

            </div>
            <!-- Volunteer list -->
            <div id="subscribers" class="management displays">
                <h3>Events Volunteer List</h3>
                <hr>
                <div class="search">
                    <input type="search" id="searchSubscribers" placeholder="Enter keyword">
                </div>
                <table id="subscriberTable">
                    <thead>
                        <tr>
                            <td>S/N</td>
                            <td>Full Name</td>
                            <td>Event</td>
                            <td>Email</td>
                            <td>Phome</td>
                            <td>Address</td>
                            <td>Sex</td>
                            <td>Age</td>
                            
                            
                        </tr>
                    </thead>

                    <?php
                        $n = 1;
                        $select_volunteer = $connectdb->prepare("SELECT * FROM volunteers");

                        $select_volunteer->execute();
                        
                        $rows = $select_volunteer->fetchAll();
                        foreach($rows as $row):
                    ?>
                    <tbody>
                        <tr>
                            <td style="text-align:center;"><?php echo $n?></td>
                            
                            <td><?php echo $row->full_name?></td>
                            <td><?php echo $row->event?></td>
                            <td><?php echo $row->email?></td>
                            <td><?php echo $row->phone?></td>
                            <td><?php echo $row->address?></td>
                            <td><?php echo $row->sex?></td>
                            <td><?php echo $row->age?></td>
                            
                        </tr>
                    </tbody>

                    <?php $n++; endforeach;?>
                    
                </table>
            </div>
            <!-- Profile -->
            <div id="account" class="management">
                <?php include "profile.php";?>
            </div>
        </section>
    </main>
    

    <script src="jquery.js"></script>
    <script src="script.js"></script>

</body>
</html>

<?php
    }else{
        header("Location: ../index.php");
    }
?> 