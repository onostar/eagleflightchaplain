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
    // if(isset($_POST['delete_item'])){
        $item = $_POST['itemToDelete'];
        $delete = $connectdb->prepare("DELETE FROM  events WHERE event_id = :event_id");
        $delete->bindvalue('event_id', $item);
        $delete->execute();

        if($delete){
            echo "<p class='exist'>Event deleted Successfully!</p>";
            /* $_SESSION['success'] = "$item Deleted From $restaurant!"; 
            header("Location: admin.php");*/
        }else{
            echo "<p class='exist'><span>".$item."</span> not deleted!</p>";
            /* $_SESSION['error'] = "$item could not be deleted!";
            header("Location: admin.php"); */

        }
    