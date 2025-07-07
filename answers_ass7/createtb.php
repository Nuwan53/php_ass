<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("conn.php");

mysqli_select_db($conn,"ESHOP");
$sql1 = "CREATE TABLE IF NOT EXISTS user(Uid varchar(20) PRIMARY KEY,Uname varchar(20),PWD varchar(20),Role varchar(20))";
$result1=mysqli_query($conn,$sql1);
if(!$result1){
die("Inavlid query".mysqli_error($conn));
}
$sql2 = "CREATE TABLE IF NOT EXISTS product(Pid int AUTO_INCREMENT PRIMARY KEY,Pname varchar(200),Uprice float)";
$result2=mysqli_query($conn,$sql2);
if(!$result2){
die("Inavlid query".mysqli_error($conn));
}
 $sql = "insert into user(Uid,Uname,PWD,Role) values('A1','Admin','A1pwd','admin'),('B1','Nilmi','B1pwd','buyer') ";
$result=mysqli_query($conn,$sql);
if(!$result){
die("Inavlid query".mysqli_error($conn));
}   
$sql3 = "insert into product(Pname,Uprice) values('Phone 5s  ','45000.00'),('Asus laptop','100000.00') ";
$result3=mysqli_query($conn,$sql3);
if(!$result3){
die("Inavlid query".mysqli_error($conn));
}     

mysqli_close($conn);

?>
</body>
</html>