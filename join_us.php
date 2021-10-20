<?php
    include "server.php";
    if(isset($_POST['volunteer'])){
        $event = ucwords(htmlspecialchars(stripslashes($_POST['event'])));
        $name = ucwords(htmlspecialchars(stripslashes($_POST['fullName'])));
        $email = htmlspecialchars(stripslashes($_POST['email']));
        $phone = htmlspecialchars(stripslashes($_POST['phone']));
        $address = ucwords(htmlspecialchars(stripslashes($_POST['address'])));
        $age = htmlspecialchars(stripslashes($_POST['age']));
        /* $busStop = $_POST['busStop']; */
        $sex = htmlspecialchars(stripslashes($_POST['sex']));

        //check if volunteer exist
        $check_volunteer = $connectdb->prepare("SELECT * FROM volunteers WHERE full_name = :full_name AND event = :event AND email = :email");
        $check_volunteer->bindvalue("full_name", $name);
        $check_volunteer->bindvalue("event", $event);
        $check_volunteer->bindvalue("email", $email);
        $check_volunteer->execute();
        if($check_volunteer->rowCount() > 0){
            echo "<script>alert('You have already volunteered for this event!');
            window.open('index.php', '_parent');</script>";
        }else{
            $get_volunteer = $connectdb->prepare("INSERT INTO volunteers (full_name, event, email, phone, sex, age, address) VALUES(:full_name, :event, :email, :phone, :sex, :age, :address)");
            $get_volunteer->bindvalue("full_name", $name);
            $get_volunteer->bindvalue("event", $event);
            $get_volunteer->bindvalue("email", $email);
            $get_volunteer->bindvalue("phone", $phone);
            $get_volunteer->bindvalue("sex", $sex);
            $get_volunteer->bindvalue("age", $age);
            $get_volunteer->bindvalue("address", $address);
            $get_volunteer->execute();
            /* $quantity = $_POST['quantity']; */
            /* $message = $_POST['otherInformation']; */
            $orderContent = "A new volunteer for $event. The details are stated below \n From: $name \n Phone Number: $phone \n Address: $address \n Age: $age \n Gender: $sex";
            // $recipient = "volunteer@eagleflightchaplain.org";
            $subject = "Volunteer for $event";
            $mailheader = "From: $email \r\n";
        
            if($get_volunteer){
                echo "<!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Join us - Eagle flight chaplain</title>
                    <style>
                        *{
                            margin:0;
                            padding:0;
                        }
                        body{
                            display:flex;
                            flex-direction:column;
                            justify-content:center;
                            align-items:center;
                            background:linear-gradient(#e66465, #9198e5);
                        }
                        .contact_img{
                            position:absolute;
                            top:0;
                            left:0;
                            width:100%;
                            height:100vh;
                        }
                        .contact_img img{
                            width:100%;
                            height:100%;
                        }
                        .contact_img:after{
                            content:'';
                            position:absolute;
                            top:0;
                            left:0;
                            width:100%;
                            height:100vh;
                            background:rgba(145, 152, 229, .8)
                        }
                        .contact_success{
                            position:absolute;
                            top:20vh;
                            background:green;
                            color:#fff;
                            padding:20px;
                            box-shadow:2px 2px 2px #c4c4c4;
                            font-size:1.2rem;
                            text-align:center;
                            animation:1s zoomOut 1;
                        }
                        @keyframes zoomOut{
                            0%{
                                opacity:0;
                                transform:scale(0);
                            }
                            100%{
                                opacity:1;
                                transform:scale(1);
                            }
                        }
                        .contact_success button{
                            background:#fff;
                            margin-top:10px;
                            tranistion:.5s all;
                            border:none;
                            padding:10px;
                        }
                        .contact_success button a{
                            color:#000;
                            text-decoration:none;
                            padding:10px;
                        }
                        .contact_success button:hover{
                            background:red;
                        }
                        .contact_success button a:hover{
                            color:#fff;
                        }
                    </style>
                </head>
                <body>
                    <div class='contact_img'>
                        <img src='images/efc_photo5.png' alt='eagle flight chaplain'>
                    </div>
                    <div class='contact_success'>
                        <p>Your registration is completed!<br>
                        Further information will be sent to your mail</p>
                        <button><a href='index.php'>Ok</a></button>
                    </div>
                </body>
                </html>";
                //send mail
                mail("info@eagleflightchaplain.org, clifdafe@gmail.com, volunteer@eagleflightchaplain.org", $subject, $orderContent, $mailheader) or die("Error!");
            }
        }    

    }

?>