<?php
    include "server.php";
    session_start();

    if(isset($_GET['delete'])){
        $event_id = $_GET['delete'];
        $confirm = $connectdb->prepare("DELETE FROM events WHERE event_id = :event_id");
        $confirm->bindvalue('event_id', $event_id);
        $confirm->execute();

        if($confirm){
            /* echo "<script>alert('Item dispensed!');
            window.open('admin.php', '_parent');</script>"; */
            $_SESSION['error'] = "Event Deleted";
            header("Location: admin.php");
        }else{
            $_SESSION['error'] = "failed to Delete";
            header("Location: admin.php");
        }
    }