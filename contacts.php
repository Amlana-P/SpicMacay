<?php
require("header.php");
?>
   <!-- Main Body-->
   <div class="container">
          <?php
     $conn= new mysqli("localhost","root","","spic_subs") or die ("Connection Failed");
     if($_SERVER['REQUEST_METHOD']=='POST'){?>
          <div class="response col-lg-6">
     <p> 
     <?php 
     $sender=$_POST['email'];
     $subject=$_POST['subject'];
     $message=$_POST['message'];
     if (!filter_var($sender, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address "; 
     }else{
     $sql="INSERT INTO feedback ( sender, subject , message) VALUES ( '$sender' , '$subject' , '$message')";
     if($conn->query($sql)==TRUE){
        echo "Message Sent";
     }else{
          echo "Some Problems Right Now !!. Try again later !!";
     }
     }
     ?>
     </p>
   </div>
<?php } ?>
     <div class="col-lg-6" id="mail_wrapper">
          <h4 class="text-center" style="font-family:'samarkan_____normal',Montserrat;">Feedback Form</h4> 
   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
     <div class="form-group">
     <label>From</label>
     <input type="text" name="email" placeholder="your@emailaddress.com" class="form-control">
     </div>
     <div class="form-group">
     <label>Subject</label>
     <input type="text" name="subject" placeholder="Subject" class="form-control">
     </div>
     <div class="form-group">
     <label>Message</label>
     <textarea name="message" rows="10" class="form-control">Your Message</textarea> 
     </div>
     <button type="submit" class="btn btn-primary form-control" id="send_btn">Send</button>
   </form>
   </div>
   </div>
   <div class="container" id="wrapper">
        <div class="card-4" style="grid-area:pic;">
               <img src="img/pic.jpg" style="object-fit: cover;width:100%;height:200px;object-position:0 0;border-radius:50px 50px 0 0;" alt="Faculty Advisor">
               <div class="info">
                    <p> Prof. Seemita Mohanty</p>
                    <h4>Faculty Advisor</h4>
                    <p class="text-muted" style="font-size:13px;">Department of Literature</p>
                    <p><i class="fa fa-envelope"></i> <a href="mailto:xyz@gmail.com" style="color:black">xyz@gmail.com</a></p>
                    <p class="text-center bg-dark text-light"style="padding:10px;" ><i class="fa fa-phone"></i> Contact</p></div></div>
        <div class="card-4" style="grid-area: president;">
               <img src="img/shivam.jpg" style="object-fit: cover;width:100%;height:200px;border-radius:50px 50px 0 0;">
               <div class="info">
                    <p> Shivam Kumar</p>
                    <h4>President</h4>
                    <p class="text-muted" style="font-size:13px;">Department of Food Processing Engg.</p>
                    <p><i class="fa fa-envelope"></i> <a href="mailto:s001shivamkumar@gmail.com" style="color:black">s001shivamkumar@gmail.com</a></p>
                    <p class="text-center bg-dark text-light"style="padding:10px;" ><i class="fa fa-phone"></i> +91 9337751074</p></div></div>
        <div class="card-4" style="grid-area: vice;">
               <img src="img/shivani.jpg" style="object-fit: cover;width:100%;height:200px;object-position:0 0;border-radius:50px 50px 0 0;">
               <div class="info">
                    <p> Shivani Maharana</p>
                    <h4>Vice-President</h4>
                    <p class="text-muted" style="font-size:13px;">Department of Industrial Design</p>
                    <p><i class="fa fa-envelope"></i> <a href="mailto:xyz@gmail.com" style="color:black">xyz@gmail.com</a></p>
                    <p class="text-center bg-dark text-light"style="padding:10px;" ><i class="fa fa-phone"></i> Contact</p></div></div>
        <div class="card-4" style="grid-area: manager;">
               <img src="img/manager.jpg" style="object-fit: cover;width:100%;height:200px;object-position:0 0;border-radius:50px 50px 0 0;">
               <div class="info">
                    <p> Swatantra Kumar Gupta</p>
                    <h4>Manager</h4>
                    <p class="text-muted" style="font-size:13px;">Department of Electrical Engineering</p>
                    <p><i class="fa fa-envelope"></i>  <a href="mailto:xyz@gmail.com" style="color:black">xyz@gmail.com</a></p>
                    <p class="text-center bg-dark text-light"style="padding:10px;" ><i class="fa fa-phone"></i> Contact</p>
                    </div></div>
        <div class="card-4" style="grid-area: webdev;">
               <img src="img/profile.jpg" style="object-fit:cover;width:100%;height:200px;object-position:0 0;border-radius:50px 50px 0 0;">
               <div class="info">
                    <p>Vishal Rana</p>
                    <h4>Website Designer</h4>
                    <p class="text-muted" style="font-size:13px;">Department of Chemical Engineering</p>
                    <p><i class="fa fa-envelope"></i> <a href="mailto:vishal.ch.36@gmail.com" style="color:black">vishal.ch.36@gmail.com</a></p>
                    <p class="text-center bg-dark text-light"style="padding:10px;" ><i class="fa fa-phone"></i> +91 8755755073</p></div></div>

   </div>


     <!-- Footer -->
     <?php
require("footer.php");
?>