<?php
$conn = mysqli_connect("localhost","root","","problem");
if(!$conn)
{
 die("Connection failed". mysqli_connect_error());
}
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$problem=$_POST['problem'];
$phoneno=$_POST['phoneno'];
$email=$_POST['email'];

$query = "INSERT INTO `fed`(`name`, `problem`, `phone no`, `email`) VALUES ('$name','$problem','$phoneno','$email')";
$run = mysqli_query($conn,$query);
 
   if($run == true)
    {
           echo "inserted success";
    }
      
  
 else
    {
           echo "error";
}  

}



?>



 
  