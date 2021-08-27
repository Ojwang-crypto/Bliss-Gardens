<?php 

   session_start();
   if(!isset($_SESSION['customer_email'])){

     echo"<script>window.open('../checkout.php','_self')</script>";

   }else{

     
   include("includes/db.php"); 
   include("functions/functions.php");
   if(isset($_GET['order_id'])){

    $order_id = $_GET['order_id'];
       
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OJWANG'S ECOMMERCE</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    
</head>
<body>
     <div id="top"><!--Top begin -->

         <div class="container"><!--container begin -->
         
             <div class="col-md-6 offer"><!--offer begin -->

                <a href="#" class="btn btn-success btn-sm">
                
                      <?php 
                  
                     if(!isset($_SESSION['customer_email'])){
                       
                       echo "Welcome: Guest";
                       
                   }else{
                       
                       echo "Welcome: " . $_SESSION['customer_email'] . "";
                       
                   }
                  
                  ?>
                
                </a>
                <a href="checkout.php"><?php  items();  ?> Items In Your Cart | Total Price: Ksh.<?php total_price(); ?></a>

             </div><!--offer Finish -->

             <div class="col-md-6"><!--col-md-6 begin -->
                <ul class="menu"><!--menu begin -->
                    <li>
                       <a href="../customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="my_account.php">My Account</a>
                    </li>
                    <li>
                         <a href="../cart.php">Go To Cart</a>
                    </li>
                    <li>
                          <a href="../checkout.php">
                          
                             <?php 
                          
                               if(!isset($_SESSION['customer_email'])){
                       
                                  echo "<a href='checkout.php'>Login</a>";
                       
                                }else{
                       
                                   echo " <a href='logout.php'>Log Out</a> ";
                       
                                }
                          
                            ?>
                          
                          
                          </a>
                    </li>
                
                </ul><!--menu Finish -->
             </div><!--col-md-6 Finish -->

         </div> <!--container  Finish -->       

     </div><!--Top Finish -->
     <div id="navbar" class="navbar navbar-default"><!--navbar navbar-default  begin --> 
          <div class="container"><!--container begin -->
               <diV class="navbar-header"><!--navbar-header begin -->
               
                  <a href="../index.php" class="navbar-brand home"><!--navbar-brand home begin -->
                    <img src="images/ecom-store-logo.png" alt="M-Dev-Store Logo" class="hidden-xs">
                    <img src="images/ecom-store-logo-mobile.png" alt="M-Dev-Store Logo Mobile" class="visible-xs">

                  </a><!--navbar-brand home finish -->
                  <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                     <span class="sr-only">Toggle Navigation</span>
                     <i class="fa fa-align-justify"></i>  
                  </button>
                  <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                     <span class="sr-only">Toggle search</span>
                     <i class="fa fa-search"></i>  
                  </button>

                </diV><!--navbar-header  finish -->
                <div class="navbar-collapse collapse" id="navigation"><!--navbar-collapse collapse  begin -->
                      <div class="paddig-nav"><!--paddig-nav  Begin -->
                           <ul class="nav navbar-nav left"><!--nav navbar-nav left  Begin -->
                              <li>
                                 <a href="../index.php">HOME</a>
                              </li>
                              <li>
                                  <a href="../shop.php">SHOP</a>
                              </li>
                              <li>
                                  <a href="../cart.php">SHOPPING CART</a>
                              </li>
                              <li class="active">
                                 <a href="my_account.php">MY ACCOUNT</a>
                              </li>
                              <li>
                                <a href="../contact.php">CONTACT US</a> 
                              </li>
                           
                           </ul><!--nav navbar-nav left  finish -->
                       
                      </div><!--paddig-nav  finish -->
                        <a href="../cart.php" class="btn navbar-btn btn-primary right"><!--btn navbar-btn btn-primary right Begin -->
                            <i class="fa fa-shoping-cart"></i>
                               <span><?php  items();?> Items In Your Cart</span>
                        </a><!--btn navbar-btn btn-primary right Finish -->
                        <div class="navbar-collapse collapse right"><!--navbar-collapse collapse right  Begin -->
                        
                            <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!--btn btn-primary navbar-btn  finish -->
                                <span class="sr-only">Toggle Search</span>
                                <i class="fa fa-search"></i>
                            </button><!--btn btn-primary navbar-btn  finish -->
                           

                        </div><!--navbar-collapse collapse right  finish -->
                           <div class="collapse clearfix" id="search"><!--collapse clearfix  Begin -->
                        <form method="get" action="results.php" class="navbar-form">
                        
                            <div class="input group"><!--input group  Begin -->
                             <span class="input-group btn">
                                <input type="text" class="form control" placeholder="search" name="user-query" required>
                                 
                                 <button type="submit" name="search" class="btn btn-primary">
                                   <i class="fa fa-search"></i>
                                   
                                 </button> 
                             </span>   
                            </div><!--input group  finish -->

                        </form>
                     
                     </div><!--collapse clearfix  finish --> 
                
                </div><!--navbar-collapse collapse  finish -->
                    
          </div><!--container Finish -->

     </div><!--navbar navbar-default  Finish -->

<div id="content"><!--content  begin -->
  <div class="container"><!--container begin -->

    <div class="container col-md-12"><!--container col-md-12 begin -->
    
          <ul class="breadcrumb"><!--breadcrumb   begin -->
              <li>
                  <a href="index.php">Home</a>
              </li>
              <li>
                  My Account
              </li>
          </ul><!--breadcrumb   Finish -->
    
    </div><!--container col-md-12  Finish -->
    <div class="col-md-3"><!--col-md-3   begin -->
          <?php
               include("includes/sidebar.php")
           ?>
    </div><!--col-md-3   Finish -->
    <div class="col-md-9"><!--col-md-9   begin -->
    
         <div class="box"><!--box   begin-->
         
            <h1 align="center"> Please confirm your payment</h1>
                   
                   <form action="confirm.php?update_id=<?php echo $order_id;  ?>" method="post" enctype="multipart/form-data"><!-- form Begin -->
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Invoice No: </label>
                          
                          <input type="text" class="form-control" name="invoice_no" required>
                           
                       </div><!-- form-group Finish -->
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Amount Sent: </label>
                          
                          <input type="text" class="form-control" name="amount_sent" required>
                           
                       </div><!-- form-group Finish -->
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Select Payment Mode: </label>
                          
                          <select name="payment_mode" class="form-control"><!-- form-control Begin -->
                              
                              <option> Select Payment Mode </option>
                              <option> Back Code </option>
                              <option> Paypall </option>
                              <option> Payoneer </option>
                              <option> Western Union </option>
                              
                          </select><!-- form-control Finish -->
                           
                       </div><!-- form-group Finish -->
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Transaction / Reference ID: </label>
                          
                          <input type="text" class="form-control" name="ref_no" required>
                           
                       </div><!-- form-group Finish -->
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Paypall / Payoneer / Western Union Code: </label>
                          
                          <input type="text" class="form-control" name="code" required>
                           
                       </div><!-- form-group Finish -->
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Payment Date: </label>
                          
                          <input type="text" class="form-control" name="date" required>
                           
                       </div><!-- form-group Finish -->
                       
                       <div class="text-center"><!-- text-center Begin -->
                           
                           <button class="btn btn-primary btn-lg" name="confirm_payment"><!-- tn btn-primary btn-lg Begin -->
                               
                               <i class="fa fa-user-md"></i> Confirm Payment
                               
                           </button><!-- tn btn-primary btn-lg Finish -->
                           
                       </div><!-- text-center Finish -->
                       
                   </form><!-- form Finish -->
                   
                   <?php 
                   
                    if(isset($_POST['confirm_payment'])){
                        
                        $update_id = $_GET['update_id'];
                        
                        $invoice_no = $_POST['invoice_no'];
                        
                        $amount = $_POST['amount_sent'];
                        
                        $payment_mode = $_POST['payment_mode'];
                        
                        $ref_no = $_POST['ref_no'];
                        
                        $code = $_POST['code'];
                        
                        $payment_date = $_POST['date'];
                        
                        $complete = "Complete";
                        $insert_payment = "insert into payments (invoice_no,amount,payment_mode,ref_no,code,payment_date) values ('$invoice_no','$amount','$payment_mode','$ref_no','$code','$payment_date')";

                        $run_payment = mysqli_query($con,$insert_payment);
                        
                        $update_customer_order = "update customer_orders set order_status='$complete' where order_id='$update_id'";
                        
                        $run_customer_order = mysqli_query($con,$update_customer_order);
                        
                        $update_pending_order = "update pending_orders set order_status='$complete' where order_id='$update_id'";
                        
                        $run_pending_order = mysqli_query($con,$update_pending_order);
                        if($run_pending_order){

                            echo"<script>alert('Thank you for purchasing, Your order Will Be Completed Within 2 to 3 business days')</script>";
                             echo"<script>window.open('my_account.php?my_orders','_self')</script>";

                        }
                        

                    }
                  
              ?>

         </div><!--box   Finish -->
    
    </div><!--col-md-9   Finish -->
 </div><!--container   Finish -->
</div><!--content  Finish -->


 <?php
    
    include("includes/footer.php")
    
 ?>

    <script src="js/jquery-331.min.js"></script>
     <script src="js/bootstrap-337.min.js"></script>
</body>
</html> 
<?php } ?>  