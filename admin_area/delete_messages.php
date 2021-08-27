<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_messages'])){
        
        $message_id = $_GET['delete_messages'];
        
        $delete_message = "delete from messages where message_id='$message_id'";
        
        $run_delete = mysqli_query($con,$delete_message);
        
        if($run_delete){
            
            echo "<script>alert('Message Deleted Sucessfully!')</script>";
            
            echo "<script>window.open('index.php?messages','_self')</script>";
            
        }
        
    }

?>

<?php } ?>