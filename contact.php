<?php 
     $active='CONTACT US';
    include("includes/header.php");


?>

<div id="content"><!--content  begin -->
  <div class="container"><!--container begin -->
    <div class="container col-md-12"><!--container col-md-12 begin -->
    
          <ul class="breadcrumb"><!--breadcrumb   begin -->
              <li>
                  <a href="index.php">Home</a>
              </li>
              <li>
                  Contact US
              </li>
          </ul><!--breadcrumb   Finish -->
    
    </div><!--container col-md-12  Finish -->
    <div class="col-md-3"><!--col-md-3   begin -->
    
          <?php
               include("includes/sidebar.php")
           ?>
       </div><!--col-md-3   Finish -->
       <div class="col-md-9"><!--col-md-9  begin -->
    
          <div class="box"><!--box  begin -->
            
            <div class="box-header"><!--box-header  begin -->
              
              <center>
              
                <h2>Feel Free To contact Us</h2>
                <p class="text-muted"><!--text-muted  begin -->
                
                    If you have any questions, feel free to contact us. Our customer service works <strong>24/7</strong>
                
                </p><!--text-muted  Finish -->
               
             </center>
             <form action="contact.php"method="post"><!--form  begin -->
             
                <div class="formm-group"><!--form-group  begin-->
                
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" required>
                
                </div><!--form-group  Finish -->
                 <div class="formm-group"><!--form-group  begin-->
                
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" required>
                
                </div><!--form-group  Finish -->
                 <div class="formm-group"><!--form-group  begin-->
                
                    <label>Subject</label>
                    <input type="text" class="form-control" name="subject" required>
                
                </div><!--form-group  Finish -->
                 <div class="formm-group"><!--form-group  begin-->
                
                    <label>Message</label>
                    <textarea name="message" class="form-control"></textarea>
                
                </div><!--form-group  Finish -->
                <div class="text-center">
                   
                   <button type="submit" name="submit"class="btn btn-primary">
                   <i class="fa fa-user-md"></i> Send Message
                   </button>
                
                </div>
             
             </form><!--form  Finish -->

             <?php 
             
               if(isset($_POST['submit'])){

                 ///Admin receives messages with this

                 $sender_name = $_POST['name'];
                 $sender_email = $_POST['email'];
                 $sender_subject = $_POST['subject'];
                 $sender_message = $_POST['message'];
                 $receiver_email = "omondicollins163@gmail.com";
                 mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);

                 ///Auto reply to sender with this///

                 $email = $_POST['email'];
                 $subject = "Welcome to Bliss Gardens Ecommerce";
                 $msg = "thank you for sending us a Message, We will reply to your message ASAP!";
                 $from = "omondicollins163@gmail.com";
                 mail($email,$subject,$msg,$from);

                 echo"<h2 align='center'>Your Message has been sent successfully </h2> ";

               }
             
             ?>
            
            </div><!--box-header  Finish -->
          
          </div><!--box  Finish -->
    
    </div><!--col-md-9  Finish -->
   </div><!--container   Finish -->
</div><!--content  Finish -->


 <?php
    
    include("includes/footer.php")
    
 ?>

    <script src="js/jquery-331.min.js"></script>
     <script src="js/bootstrap-337.min.js"></script>
</body>
</html>