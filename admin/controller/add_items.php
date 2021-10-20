<?php
    include "server.php";
    session_start();

    /* function validate($field){
        if(!isset($_POST[$field])){
            return false;
        }else{
            return htmlspecialchars(stripcslashes($_POST[$field]));
        }
    } */
    
    $_SESSION['success'] = "";
    $_SESSION['error'] = "";
    if(isset($_POST['add_items'])){
        
        $event_date = ucwords(htmlspecialchars(stripslashes($_POST['event_date'])));
        $location = ucwords(htmlspecialchars(stripslashes($_POST['location'])));
        $item_name = ucwords(htmlspecialchars(stripslashes($_POST['title'])));
        /* $item_prize = htmlspecialchars(stripslashes($_POST['summary'])); */
        $item_description = htmlspecialchars(stripslashes($_POST['details']));
        $item_foto = $_FILES['foto']['name'];
        $items = "../../media/".$item_foto;
        // $status = 1;

        /* check user availability */
        $check_user = $connectdb->prepare("SELECT * FROM events WHERE title = :title");
        
        $check_user->bindvalue('title', $item_name);
        
        $check_user->execute();

        if($check_user->rowCount() > 0){
            $_SESSION['error'] = "<strong>'$item_name'</strong> already Exists!";
            header("Location: admin.php");
            // echo "<p class='exist'><span>" . $item_name . "</span> already Exists!</p>";

        }else{
            if(move_uploaded_file($_FILES['foto']['tmp_name'], $items)){
                $add_item = $connectdb->prepare("INSERT INTO events (event_date, title, photo, details, location) VALUES (:event_date, :title, :photo, :details, :location)");
                
                $add_item->bindvalue('event_date', $event_date);
                $add_item->bindvalue('title', $item_name);
                // $add_item->bindvalue('summary', $item_prize);
                $add_item->bindvalue('photo', $item_foto);
                $add_item->bindvalue('details', $item_description);
                $add_item->bindvalue('location', $location);
                $add_item->execute();

                if($add_item){
                    $_SESSION['success'] = "<strong>'$item_name'</strong> added Successfully!";
                    header("Location: admin.php");
                    /* echo "<p><span>" . $item_name . "</span> added successfully!</p>"; */

                    /* Send subscribers mail */
                    /* $subject = $item_name;
                    $message = "A new update has just been added to the archive. /n Be the first to view and comment /n <a href='https://eristics.com.ng' title='Order now'>Click to View Now</a>";
                    $mailheader = "From: admin@eristics.com.ng";
                    $get_subscribers = $connectdb->prepare("SELECT contact_email FROM subscribers");
                    $get_subscribers->execute();
                    $subscribers = $get_subscribers->fetchAll();
                    foreach($subscribers as $subscriber){
                        mail($subscriber->contact_email, $subject, $message, $mailHeader) or die("Error!");
                    } */
                }else{
                    $_SESSION['error'] = "$item_name not added!";
                    header("Location: admin.php");
                    /* echo "<p><span>" . $item_name . "</span> not added!</p>"; */

                }
            }else{
                /* echo "<p>Photo upload failure</p>"; */
                $_SESSION['error'] = "Photo upload failure!";
                header("Location: admin.php");
            }
            
        }
    }
?>

