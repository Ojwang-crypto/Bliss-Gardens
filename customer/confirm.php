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

                <a href="#" class="btn btn-success btn-sm">welcome</a>
                <a href="checkout.php">4 Items In Your Cart | Total Price: $300</a>

             </div><!--offer Finish -->

             <div class="col-md-6"><!--col-md-6 begin -->
                <ul class="menu"><!--menu begin -->
                    <li>
                       <a href=".. /customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="my_account.php">My Account</a>
                    </li>
                    <li>
                         <a href="../cart.php">Go To Cart</a>
                    </li>
                    <li>
                          <a href="../checkout.php">Login</a>
                    </li>
                
                </ul><!--menu Finish -->
             </div><!--col-md-6 Finish -->

         </div> <!--container  Finish -->       

     </div><!--Top Finish -->
     <div id="navbar" class="navbar navbar-default"><!--navbar navbar-default  begin --> 
          <div class="container"><!--container begin -->
               <diV class="navbar-header"><!--navbar-header begin -->
               
                  <a href="index.php" class="navbar-brand home"><!--navbar-brand home begin -->
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
                        <a href="cat.php" class="btn navbar-btn btn-primary right"><!--btn navbar-btn btn-primary right Begin -->
                            <i class="fa fa-shoping-cart"></i>
                               <span>4 Items In Your Cart</span>
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
         
             <h1 align="center">Please confirm your payment</h1>
             <form action="confirm.php" method="post" enctypt="multipart/form-data"><!--form  begin -->
             
                 <div class="form-group"><!--form-group  begin -->
                 
                     <label>Invoice No</label>
                     <input type="text" class="form-control" name="invoice_no" required>
                 
                 </div><!-- form-group  Finish -->
                  <div class="form-group"><!--form-group  begin -->
                 
                     <label>Amount Sent</label>
                     <input type="text" class="form-control" name="amount_sent" required>
                 
                 </div><!-- form-group  Finish -->
                  <div class="form-group"><!--form-group  begin -->
                 
                     <label>Select payment method</label>
                     <select name="payment_mode" class="form-control">
                     
                         <option>Select Payment Mode</option>
                         <option>Back code</option>
                         <option>UBL</option>
                         <option>Easy Pay</option>
                         <option>Western Union</option>
                     
                     </select>
                 
                 </div><!-- form-group  Finish --> 
                 <div class="form-group"><!--form-group  begin -->
                 
                     <label>Transaction / Reference ID </label>
                     <input type="text" class="form-control" name="ref_no" required>
                 
                 </div><!-- form-group  Finish -->
                 <div class="form-group"><!--form-group  begin -->
                 
                     <label>UBL</label>
                     <input type="text" class="form-control" name="code" required>
                 
                 </div><!-- form-group  Finish -->
                 <div class="form-group"><!--form-group  begin -->
                 
                     <label>Payment Date</label>
                     <input type="text" class="form-control" name="date" required>
                 
                 </div><!-- form-group  Finish -->
                 <div class="text-center"><!-- text-center  begin -->
                 
                  <button class="btn btn-primary btn-lg"><!-- btn btn-primary btn-lg  begin -->
                  
                      <i class="fa fa-user-md"></i> Confirm Payment
                  
                  </button><!-- btn btn-primary btn-lg  Finish -->
                 
                 </div><!-- text-center  Finish -->
             
            </form><!--form  Finish -->

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