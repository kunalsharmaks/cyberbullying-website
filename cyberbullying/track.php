
<?php include 'footer.php';?>


<?php


$conn = mysqli_connect("localhost","root","","pin");
if(!$conn)
{
 die("Connection failed". mysqli_connect_error());
}
if(isset($_POST['submit']))
{
$pin=$_POST['name'];
$state=$_POST['pin'];
if($pin == $state)
{
$query = "INSERT INTO `pin`(`pin`, `state`) VALUES ([value-1],[value-2])";
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



 
  