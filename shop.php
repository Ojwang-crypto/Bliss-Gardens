<?php 
     $active='SHOP';
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
                  Shop
              </li>
          </ul><!--breadcrumb   Finish -->
    
    </div><!--container col-md-12  Finish -->
    <div class="col-md-3"><!--col-md-3   begin -->
          <?php
               include("includes/sidebar.php")
           ?>
       </div><!--col-md-3   Finish -->
       <div class="col-md-9"><!--col-md-9   begin -->

        <?php

            if(! isset($_GET['p_cat'])){            

            echo"
               <div class='box'><!--box   begin -->
                     <h1>Shop</h1>
                     <p>
                          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem unde tempora facilis ratione, voluptate totam. Vitae sunt a ab eos animi officia, nam consequatur enim quos dolorum? Rerum, veritatis eum?
                     </p>
                 </div><!--box   Finish -->

             ";
             }

         ?>

           <div class="row"><!--row  begin -->
              
               <?php 
               
                   if(! isset($_GET['p_cat'])){
                   if(! isset($_GET['cat'])){ ///this category might bring a problem remember you dont have it in the database///

                      $per_page=6;
                      if(isset($_GET['page'])) {

                      $page = $_GET['page'];
                        }else{

                            $page=1;
                         
                        }

                         $start_from = ($page-1) * $per_page;
                         $get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page ";
                         $run_products = mysqli_query($con, $get_products);

                         while($row_products=mysqli_fetch_array($run_products)){

                                 $pro_id = $row_products['product_id'];
           
                                 $pro_title = $row_products['product_title'];
                                 $pro_price = $row_products['product_price'];
                                 $pro_img1 = $row_products['product_img1'];

                            echo"
                            
                                <div class='colmd-4 col-sm-4 center-responsive'>
                                
                                      <div class='product'>
                                        
                                          <a href='details.php?pro_id=$pro_id'>
                                          
                                                <img class='img-responsive'src='admin_area/product_images/$pro_img1'>
                                          
                                          </a>

                                          <div class='text'>
                                          
                                               <h3>
                                               
                                                  <a href='details.php?pro_id=$pro_id'>$pro_title</a>
                                               
                                                 

                                               <p class='price'>
                                               
                                                   $$pro_price
                                               
                                               </p>

                                               </h3>
                                               <p class='button'>
                                               
                                                   <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
                                                   
                                                       View Details

                                                   </a>
                                                   <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                                                   
                                                      <i class='fa fa-shopping-cart'></i> Add To Cart

                                                   </a>
                                               
                                               </p>
                                          
                                          </div>
                                      
                                      </div>
                                
                                </div>
                            
                            
                            
                            ";

                         
                   }
                    
                   
              
               
               ?>
               
           </div><!--row   Finish -->
           <center>
               <ul class="pagination"><!--pagination   begin -->
                   
                    <?php 
                    
                      $query = "select * from products";
                      $result = mysqli_query($con,$query );
                      $total_records = mysqli_num_rows($result);
                      $total_pages = ceil($total_records / $per_page );

                      echo"
                      
                           <li>
                           
                                <a href='shop.php?page=1'> ".'First Page'." </a>
                           
                           </li>
                      
                      
                      ";
                      for($i=1; $i<=$total_pages; $i++){

                          echo"
                      
                           <li>
                           
                                <a href='shop.php?page=".$i."'> ".$i." </a>
                           
                           </li>
                      
                      
                      ";

                      };

                      echo"
                      
                           <li>
                           
                                <a href='shop.php?page=$total_pages'> ".'Last Page'." </a>
                           
                           </li>
                      
                      
                      ";

                          }
                    
                     } 
                    
                    ?>

               </ul>
           </center></div><!--pagination   Finish -->

            <div class="row"><!--row  begin -->
            
               <?php 
               
                  getpcatpro();
               
               ?>
            
            
            </div><!--row   Finish -->

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