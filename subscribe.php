<?php
$conn= new mysqli("localhost","root","","spic_subs") or die("Connection Failed");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $email=$_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address"; 
    }else{
        $query=$conn->query("SELECT id FROM subs WHERE email ='".$email."'");
        if($query->num_rows>0){
            echo "You have already Subscribed";

        }
        else{
            $sql="INSERT INTO subs (email) VALUES ('".$email."')";
            if($conn->query($sql)==TRUE){
                echo "<h4>Subscription Succesfull!!</h4>
                    <p>You will get latest event and other important notifications on your email</p>";
            }
            else{
                echo "There is a Problem right now. Try again in a while";
            }
        }
    }
}


?>