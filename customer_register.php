<?php 
     $active='MY ACCOUNT';
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
                  Register
              </li>
          </ul><!--breadcrumb   Finish -->
    
    </div><!--container col-md-12  Finish -->
    <div class="col-md-3"><!--col-md-3   begin -->
    
          
       </div><!--col-md-3   Finish -->
       <div class="col-md-6"><!--col-md-9  begin -->
    
          <div class="box"><!--box  begin -->
            
            <div class="box-header"><!--box-header  begin -->
              
              <center>
              
                <h2>Register A New Account</h2>
                <p class="text-muted"><!--text-muted  begin -->
                
                    <strong>Please Register Here!</strong>
                
                </p><!--text-muted  Finish -->
               
             </center>
             <form action="customer_register.php" method="post" enctype="multipart/form-data"><!--form  begin -->
             
                <div class="formm-group"><!--form-group  begin-->
                
                    <label>Name</label>
                    <input type="text" class="form-control" name="c_name" required>
                
                </div><!--form-group  Finish -->
                 <div class="formm-group"><!--form-group  begin-->
                
                    <label>Second Name</label>
                    <input type="text" class="form-control" name="s_name" required>
                
                </div><!--form-group  Finish -->
                 <div class="formm-group"><!--form-group  begin-->
                
                    <label>Email</label>
                    <input type="text" class="form-control" name="c_email" required>
                
                </div><!--form-group  Finish -->
                 <div class="formm-group"><!--form-group  begin-->
                
                    <label>Password</label>
                    <input type="password" class="form-control" name="c_pass" required>
                
                </div><!--form-group  Finish -->
                 <div class="formm-group"><!--form-group  begin-->
                
                    <label>County</label>
                    <input type="text" class="form-control" name="c_county" required>
                
                </div><!--form-group  Finish -->
                 <div class="formm-group"><!--form-group  begin-->
                
                    <label>Contact</label>
                    <input type="text" class="form-control" name="c_contact" required>
                
                </div><!--form-group  Finish -->
                 <div class="formm-group"><!--form-group  begin-->
                
                    <label>Address</label>
                    <input type="text" class="form-control" name="c_address" required>
                
                </div><!--form-group  Finish -->
                 <div class="formm-group"><!--form-group  begin-->
                
                    <label>Profile Picture</label>
                    <input type="file" class="form-control form-height-custom " name="c_image" required>
                
                </div><!--form-group  Finish -->
                
                
                
                <div class="text-center">
                   
                   <button type="submit" name="register"class="btn btn-primary">
                   <i class="fa fa-user-md"></i> Register
                   </button>
                
                </div>
             
             </form><!--form  Finish -->
            
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

<?php 

  if(isset($_POST['register'])){
    
    $c_name = $_POST['c_name'];

    $s_name = $_POST['s_name'];
    
    $c_email = $_POST['c_email'];
    
    $c_pass = $_POST['c_pass'];
    
    $c_county = $_POST['c_county'];
    
    $c_contact = $_POST['c_contact'];
    
    $c_address = $_POST['c_address'];
    
    $c_image = $_FILES['c_image']['name'];
    
    $c_image_tmp = $_FILES['c_image']['tmp_name'];
    
    $c_ip = getRealIpUser();
    
    move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
    
    $insert_customer = "insert into customers (customer_name,second_name,customer_email,customer_pass,customer_county,customer_contact,customer_address,customer_image,customer_ip) values ('$c_name','$s_name','$c_email','$c_pass','$c_county','$c_contact','$c_address','$c_image','$c_ip')";
    
    $run_customer = mysqli_query($con,$insert_customer);
    
    $sel_cart = "select * from cart where ip_add='$c_ip'";
    
    $run_cart = mysqli_query($con,$sel_cart);
    
    $check_cart = mysqli_num_rows($run_cart);
    
    if($check_cart>0){
        
        /// If register have items in cart ///
        
        $_SESSION['customer_email']=$c_email;
        
        echo "<script>alert('You have been Registered Sucessfully')</script>";
        
        echo "<script>window.open('checkout.php','_self')</script>";
        
    }else{
        
        /// If register without items in cart ///
        
       /// $_SESSION['customer_email']=$c_email;
        
        echo "<script>alert('You have been Registered Sucessfully')</script>";
        
        echo "<script>window.open('index.php','_self')</script>";
        
    }
    
}
?>