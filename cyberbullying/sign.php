<?php
$conn = mysqli_connect("localhost","root","","table1");
if(!$conn)
{
 die("Connection failed". mysqli_connect_error());
}
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$password=$_POST['psw'];
$confirmpassword=$_POST['psw-repeat'];
if($password == $confirmpassword)
{
$query = "INSERT INTO `table12`(`email`, `password`, `confirm password`) VALUES ('$email','$password','$confirmpassword')";
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


}
?>



 
  