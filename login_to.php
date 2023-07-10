<?php
$username=$_POST['email-add'];
$password=$_POST['login-password'];
if($username=="savta_decoretors@"&& $password=="#9970@")
{
    header("Location:admin.php");
}
else
{
$con=mysql_connect("localhost",'root','');
if($con==false)
{
    die("connection error");
}
mysql_query("use customer");
mysql_query("insert into customer.login values('$username','$password')");
mysql_close($con);
header('location:index.html');

}
?>
<script>
alert("login sucessfuly")    
</script>
