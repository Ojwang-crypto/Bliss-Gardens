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
               <p class="text-muted">You Currently Have 3 Item(s) In Your Cart</p>
               <div class="table-responsive"><!--table-responsive   begin -->
               
                <table class="table"><!--table   begin -->
                 
                    <thead>
                       <tr><!--tr   begin -->
                       
                           <th colspan="2">Product</th>
                           <th>Quantity</th>
                           <th>Unit Price</th>
                           <th colspan="1">Delete</th>
                           <th colspan="2">Sub-Total</th>
                       
                       </tr><!--tr   finish -->
                    
                    </thead>
                    <tbody><!--tbody  begin -->
                    
                       <tr><!--tr   begin-->
                          <td>
                             <img class="img-responsive" src="admin_area/product_images/product-d2.jpg" alt="product-d2">
                          </td>
                          <td>
                              <a href="#"> Tomatoes</a>
                          </td>
                          <td>
                              2
                          </td>
                          <td>
                              $50
                          </td>
                          <td>
                              <input type="checkbox" name="remove[]">
                          </td>
                          <td>
                              $100
                          </td>
                       </tr><!--tr   Finish -->
                    
                    </tbody><!--tbody   Finish -->
                     <tbody><!--tbody  begin -->
                    
                       <tr><!--tr   begin-->
                          <td>
                             <img class="img-responsive" src="admin_area/product_images/product-5.jpg" alt="product-5">
                          </td>
                          <td>
                              <a href="#"> Onions</a>
                          </td>
                          <td>
                              2
                          </td>
                          <td>
                              $25
                          </td>
                          <td>
                              <input type="checkbox" name="remove[]">
                          </td>
                          <td>
                              $50
                          </td>
                       </tr><!--tr   Finish -->
                    
                    </tbody><!--tbody   Finish -->
                     <tbody><!--tbody  begin -->
                    
                       <tr><!--tr   begin-->
                          <td>
                             <img class="img-responsive" src="admin_area/product_images/product-6.jpg" alt="product-6">
                          </td>
                          <td>
                              <a href="#"> Pepper</a>
                          </td>
                          <td>
                              2
                          </td>
                          <td>
                              $30
                          </td>
                          <td>
                              <input type="checkbox" name="remove[]">
                          </td>
                          <td>
                              $60
                          </td>
                       </tr><!--tr   Finish -->
                    
                    </tbody><!--tbody   Finish -->
                    <tfoot><!--tfoot   begin -->
                      <tr>
                        <th colspan="3">Total</th>
                        <th colspan="2">$210</th>
                        
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
       <div id="row" class="same-height-row"><!--row same-height-row   begin -->
              <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6   begin -->
                  <div class="box same-height headline"><!--box same-height headline   begin -->
                      <h3 class="text-center">Products You May Like</h3>
                  </div><!--box same-height headline   Finish -->
              </div><!--col-md-3 col-sm-6   Finish -->
              <div class="col-md-3 col-sm-6 center-responsive"><!--col-md-3 col-sm-6 center-responsive  begin-->
                  <div class="product same-height"><!--product same-height  begin -->
                      <a href="">
                          <img class="img-responsive" src="admin_area/product_images/product-5.jpg" alt="product-5">
                      </a>
                      <div class="text"><!--text  begin -->
                          <h3> 
                             <a href="details.php">Bliss Onions</a>
                          </h3>
                          <p class="price">$0.75</p>
                      </div><!--text   Finish -->
                   </div><!--product same-height   Finish -->
              </div><!--col-md-3 col-sm-6 center-responsive  Finish -->
               <div class="col-md-3 col-sm-6 center-responsive"><!--col-md-3 col-sm-6 center-responsive  begin-->
                  <div class="product same-height"><!--product same-height  begin -->
                      <a href="">
                          <img class="img-responsive" src="admin_area/product_images/product-6.jpg" alt="product-6">
                      </a>
                      <div class="text"><!--text  begin -->
                          <h3> 
                             <a href="details.php">Bliss Pepper</a>
                          </h3>
                          <p class="price">$2.00</p>
                      </div><!--text   Finish -->
                   </div><!--product same-height   Finish -->
              </div><!--col-md-3 col-sm-6 center-responsive  Finish -->
               <div class="col-md-3 col-sm-6 center-responsive"><!--col-md-3 col-sm-6 center-responsive  begin-->
                  <div class="product same-height"><!--product same-height  begin -->
                      <a href="">
                          <img class="img-responsive" src="admin_area/product_images/product-2.jpg" alt="product-2">
                      </a>
                      <div class="text"><!--text  begin -->
                          <h3> 
                             <a href="details.php">Bliss Carrots</a>
                          </h3>
                          <p class="price">$1.50</p>
                      </div><!--text   Finish -->
                   </div><!--product same-height   Finish -->
              </div><!--col-md-3 col-sm-6 center-responsive  Finish -->
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
                       
                          <td>Order Sub-Total</td>
                          <th>$210</th>
                       
                       </tr>
                       <tr>
                       
                            <td>Shipping And Handling </td>
                            <th>$0</th>

                       </tr>
                        <tr>
                       
                            <td>Tax </td>
                            <th>$0</th>

                       </tr>
                        <tr class="total">
                       
                            <td>Total </td>
                            <th>$210</th>

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