<?php
$conn = mysqli_connect("localhost","root","","mydb");
if(!$conn)
{
 die("Connection failed". mysqli_connect_error());
}
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$query = "INSERT INTO `table`(`username`, `password`) VALUES ('$username','$password')";
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



 
  