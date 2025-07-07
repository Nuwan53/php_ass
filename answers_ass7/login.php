<html>
<body>
<?php
if(isset($_GET['error'])){
echo "Enter valid username/password";
}
?>
<div style="border:1px solid #000;width:350px;padding: 5px;">    
<h2> Login Form</h2>    
<form action="authentication.php" method="post">
Username :<input name="uname" type="text" /><br />
Password :<input name="pass" type="password" /><br />
<input name="btnlogin" type="submit"  value="Login"/>
<input type="reset" value="clear" />
</form>
    </div>
</body>
</html>