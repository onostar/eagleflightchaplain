<?php
    include "server.php";
    session_start();
    
    $_SESSION['success'] = "";
    $_SESSION['error'] = "";
    if(isset($_GET['media_id'])){
        $media_id = $_GET['media_id'];

        $delete_photo = $connectdb->prepare("DELETE FROM media WHERE media_id = :media_id");
        $delete_photo->bindvalue("media_id", $media_id);
        $delete_photo->execute();

        if($delete_photo){
            $_SESSION['success'] = "Photo Deleted Sucessfully!";
            header("Location: admin.php");
        }else{
            $_SESSION['error'] = "Failed to delete Photo";
        }
    }
?>