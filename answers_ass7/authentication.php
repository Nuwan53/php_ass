<?php
session_start();
include("conn.php");
mysqli_select_db($conn,"ESHOP");
extract($_POST);
echo "***$uname ";
echo "****$pass";


$sql = "select * from user where Uname='$uname' and PWD='$pass' ";
$result=mysqli_query($conn,$sql);
if(!$result){
die("Inavlid query".mysqli_error($conn)); 
}
$row = mysqli_fetch_assoc($result);
    
$_SESSION['Uname'] =$row['Uname'];
$_SESSION['Role'] = $row['Role'];
$_SESSION['Uid'] = $row['Uid'];
//    echo $uname." ******". $_SESSION['Uname'];
if($row['Role'] == "buyer"){
  header("Location: viewitem.php");
  
}
elseif($row['Role'] == "admin"){
	header("Location: additem.php");
	 
}
else{
  header("Location: login.php?error=1");  
} 
mysqli_close($conn);
 
?>
