<?php
include_once 'includes/config.php';
if(isset($_POST['submit']))
{	 
	 $rating1 = $_POST['rating1'];
	 $rating2 = $_POST['rating2'];
	 $rating = $_POST['rating'];
     $name = $_POST['name'];
	 $email = $_POST['email'];
     $text = $_POST['commentText'];
    
	 $sql = "INSERT INTO tbl_rating (rating1,rating2,rating,name,email,text)
	 VALUES ('$rating1','$rating2','$rating','$name','$email','$text')";
	 if (mysqli_query($con, $sql)) 
     {
		   
        ?>
        <script>alert("Review submitted successfully");  
        location.href="index.php";</script>
        <?php
	 } 
     else 
     {
            
     ?>
     <script>alert("Error occurred");  
     location.href="index.php";</script>
     <?php
		
	 }
	 mysqli_close($con);
}
?>