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
    if(isset($_POST['update_news'])){
    
        $story_id = ucwords(htmlspecialchars(stripslashes($_POST['event_id'])));
        /* $posted_by = ucwords(htmlspecialchars(stripslashes($_POST['posted_by'])));*/
        $location = ucwords(htmlspecialchars(stripslashes($_POST['location'])));
        $item_name = ucwords(htmlspecialchars(stripslashes($_POST['title'])));
        $event_date = ucwords(htmlspecialchars(stripslashes($_POST['event_date'])));
        // $summary = htmlspecialchars(stripslashes($_POST['summary']));
        $item_description = htmlspecialchars(stripslashes($_POST['details']));
        /* $item_foto = $_FILES['foto']['name'];
        $items = "../../media/".$item_foto; */
                $update_story = $connectdb->prepare("UPDATE events SET details = :details, location = :location, event_date = :event_date WHERE event_id = :event_id");
                
                // $update_story->bindvalue('summary', $summary);
                $update_story->bindvalue('details', $item_description);
                $update_story->bindvalue('location', $location);
                $update_story->bindvalue('event_date', $event_date);
                $update_story->bindvalue('event_id', $event_id);
                $update_story->execute();

                if($update_story){
                    $_SESSION['success'] = "$item_name Updated!";
                    header("Location: admin.php");
                    /* echo "<p><span>" . $item_name . "</span> added successfully!</p>"; */

                    /* Send subscribers mail */
                    /* $subject = "$item_name Updated";
                    $message = "$item_name has just been Updated. /n Be the first to place view. /n <a href='https://ersitics.com.ng/item_info.php?='+$story_id title='Order now'>Click to View</a>";
                    $mailheader = "From: admin@eristics.com.ng";
                    $get_subscribers = $connectdb->prepare("SELECT email FROM users WHERE subscriber = 1");
                    $get_subscribers->execute();
                    $subscribers = $get_subscribers->fetchAll();
                    foreach($subscribers as $subscriber){
                        mail($subscriber->email, $subject, $message, $mailHeader) or die("Error!");
                    } */
                }else{
                    $_SESSION['error'] = "$item_name not updated!";
                    header("Location: admin.php");
                    /* echo "<p><span>" . $item_name . "</span> not added!</p>"; */

                }
            
            
    }
?>

