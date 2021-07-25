<?php 
     $active='SHOPPING CART';
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
                  Cart
              </li>
          </ul><!--breadcrumb   Finish -->
    
    </div><!--container col-md-12  Finish -->

    <div id="cart" class="col-md-9" ><!--cart col-md-9   begin-->
    
       <div class="box"><!--box   begin-->
       
           <form action="cart.php" method="post" enctype="multipart/form-data"><!--form   begin -->
           
               <h1>Shopping Cart</h1>

                <?php 
                
                  $ip_add = getRealIpUser();
                  $select_cart = "select * from cart where ip_add='$ip_add'";
                  $run_cart = mysqli_query($con,$select_cart );
                  $count = mysqli_num_rows($run_cart);
                
               ?>

               <p class="text-muted">You Currently Have <?php echo $count?> Item(s) In Your Cart</p>
               <div class="table-responsive"><!--table-responsive   begin -->
               
                <table class="table"><!--table   begin -->
                 
                    <thead>
                       <tr><!--tr   begin -->
                       
                           <th colspan="2">Product</th>
                           <th>Quantity</th>
                           <th>Unit Price</th>
                           <th>Category</th>
                           <th colspan="1">Delete</th>
                           <th colspan="2">Sub-Total</th>
                       
                       </tr><!--tr   finish -->
                    
                    </thead>
                    <tbody><!--tbody  begin -->
                       <?php 
                       
                          $total = 0;
                          while($row_cart = mysqli_fetch_array($run_cart)){

                             $pro_id = $row_cart['p_id'];
                             $pro_size = $row_cart['size'];
                             $pro_qty = $row_cart['qty'];
                             $get_products = "select *from products where product_id='$pro_id'";
                             $run_products = mysqli_query($con,$get_products);
                             while($row_products = mysqli_fetch_array($run_products)){
                                 $product_title = $row_products['product_title'];
                                 $product_img1 = $row_products['product_img1'];
                                 $only_price = $row_products['product_price'];
                                 $sub_total = $row_products['product_price']*$pro_qty;
                                 $total += $sub_total;

        
                      ?>
                    
                       <tr><!--tr   begin-->
                          <td>
                             <img class="img-responsive" src="admin_area/product_images/<?php echo $product_img1; ?>" alt="product-d2">
                          </td>
                          <td>
                              <a href="details.php?pro_id=<?php echo $pro_id; ?>"> <?php echo $product_title; ?></a>
                          </td>
                          <td>
                              <?php echo $pro_qty; ?>
                          </td>
                          <td>
                              <?php echo $only_price; ?>
                          </td>
                          <td>
                              <?php echo $pro_size; ?>
                          </td>
                          <td>
                              <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
                          </td>
                          <td>
                              Ksh.<?php echo $sub_total; ?>
                          </td>
                       </tr><!--tr   Finish -->
                       <?php 
                       
                             }
                          }
                       
                       ?>
                    
                    </tbody><!--tbody   Finish -->
                     
                     
                    <tfoot><!--tfoot   begin -->
                      <tr>
                        <th colspan="5">Total</th>
                        <th colspan="2">Ksh.<?php echo $total; ?></th>
                        
                      </tr>
                      
                    </tfoot><!--tfoot   Finish -->
                
                </table><!--table   Finish -->

               </div><!--table-responsive   Finish -->
               <div class="box-footer"><!--box-footer  begin -->
               
                  <div class="pull-left"><!--pull-left begin -->
                  
                     <a href="index.php" class="btn btn-default">
                        <i class="fa fa-chevron-left"></i>Continue Shopping
                  
                     </a>

                  </div><!--pull-left Finish -->
                 <div class="pull-right"><!--pull-left begin -->
                  
                     <button class="submit"name="update" value="Update Cart" class="btn btn-default">
                        <i class="fa fa-refresh"></i> Update Cart
                  
                     </button>
                     <a href="checkout.php" class="btn btn-primary">
                        Proceed Checkout <i class="fa fa-chevron-right"></i>
                     
                     </a>

                  </div><!--pull-left Finish -->
               
               </div><!--box-footer  Finish -->
           
           </form><!--form   Finish -->
       
       </div><!--box   Finish -->

            <?php 
            
               function update_cart(){

                global $con;
                if(isset($_POST['update'])){

                    foreach($_POST['remove'] as $remove_id){

                       $delete_product = "delete from cart where p_id='$remove_id'";
                       $run_delete = mysqli_query($con,$delete_product);
                       if($run_delete){

                          echo "
                          
                             <script>window.open('cart.php','_self')</script>
                          
                          ";

                       }

                    }


                }

               }
               
               echo
               
                  @$up_cart = update_cart(); 
               
               ;            
            ?>

       <div id="row" class="same-height-row"><!--row same-height-row   begin -->
              <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6   begin -->
                  <div class="box same-height headline"><!--box same-height headline   begin -->
                      <h3 class="text-center">Products You May Like</h3>
                  </div><!--box same-height headline   Finish -->
              </div><!--col-md-3 col-sm-6   Finish -->

                <?php 
                
                    $get_products = "select * from products order by rand() LIMIT 0,3";
                   
                    $run_products = mysqli_query($con,$get_products);
                   
                   while($row_products=mysqli_fetch_array($run_products)){
                       
                       $pro_id = $row_products['product_id'];
                       
                       $pro_title = $row_products['product_title'];
                       
                       $pro_img1 = $row_products['product_img1'];
                       
                       $pro_price = $row_products['product_price'];
                       
                       echo "
                       
                        <div class='col-md-3 col-sm-6 center-responsive'>
                        
                            <div class='product same-height'>
                            
                                <a href='details.php?pro_id=$pro_id'>
                                
                                    <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                                
                                </a>
                                
                                <div class='text'>
                                
                                    <h3> <a href='details.php?pro_id=$pro_id'> $pro_title </a> 
                                    
                                           <p class='price'> Ksh.$pro_price </p>
                                
                                    </h3>

                                </div>
                            
                            </div>
                        
                        </div>
                       
                       ";
                       
                   }
                
                ?>
               
          </div><!--row same-height-row   Finish -->
    
    
    </div><!--cart col-md-9   Finish -->
    <div class="col-md-3"><!--col-md-3   begin -->
    
          <div id="order-summary" class="box"><!--order-summary box begin  -->
          
             <div class="box-header"><!--box-header  begin -->
                
                 <h1>Order Summary</h1>
             
             </div><!--box-header  Finish -->
             <p class="text-muted"><!--text-muted  begin -->
             
                 Shipping and additional costs are calculated based on the value you have entered
        
             </p><!--text-muted  Finish -->
             <div class="table-responsive"><!--table-responsive  begin -->
             
                <table class="table"><!--table  begin -->
                
                    <tbody><!--tbody  begin -->
                    
                       <tr>
                       
                          <td>Order All Sub-Total</td>
                          <th>Ksh.<?php echo $total; ?></th>
                       
                       </tr>
                       <tr>
                       
                            <td>Shipping And Handling </td>
                            <th>Ksh.0</th>

                       </tr>
                        <tr>
                       
                            <td>Tax </td>
                            <th>Ksh.0</th>

                       </tr>
                        <tr class="total">
                       
                            <td>Total </td>
                            <th>Ksh.<?php echo $total; ?></th>

                       </tr>
                    
                    </tbody><!--tbody  Finish -->
                
                </table><!--table  Finish -->
             
             </div><!--table-responsive  Finish -->
          
          </div><!--order-summary box  Finish -->
    
    </div><!--col-md-3   Finish -->

    </div><!--container   Finish -->
</div><!--content  Finish -->


 <?php
    
    include("includes/footer.php")
    
 ?>

    <script src="js/jquery-331.min.js"></script>
     <script src="js/bootstrap-337.min.js"></script>
</body>
</html>