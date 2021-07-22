<h1 align="center"> Edit Your Account</h1>
<form action="" method="post" enctype="multipart/form-data"><!--form begin-->
    <div class="form-group"><!--form-group begin-->
    
        <label> Customer Name</label>
        <input type="text" name="c_name" class="form-control" required>
      
    </div><!--form-group finish-->
    <div class="form-group"><!--form-group begin-->
    
        <label> Customer Email</label>
        <input type="text" name="c_email" class="form-control" required>
      
    </div><!--form-group finish-->
    <div class="form-group"><!--form-group begin-->
    
        <label> Customer County</label>
        <input type="text" name="c_county" class="form-control" required>
      
    </div><!--form-group finish-->
    <div class="form-group"><!--form-group begin-->
    
        <label> Customer Contact</label>
        <input type="text" name="c_contact" class="form-control" required>
      
    </div><!--form-group finish-->
    <div class="form-group"><!--form-group begin-->
    
        <label> Customer Address</label>
        <input type="text" name="c_address" class="form-control" required>
      
    </div><!--form-group finish-->
    <div class="form-group"><!--form-group begin-->
    
        <label> Customer Image</label>
        <input type="file" name="c_image" class="form-control form-height-custom"  required>
        <img class="img-responsive" src="customer_images/profile_img.jpg" alt="customer_image">
      
    </div><!--form-group finish-->

    <div class="text-center"><!--text-center begin-->
    
         <button name="update" class="btn btn-primary">
            <i class="fa fa-user-md"></i> Update Now
        </button>
    </div><!--text-center finish-->



</form><!--form finish-->