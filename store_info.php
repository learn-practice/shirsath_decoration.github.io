
<?php
$name=strtolower($_POST['customer-name']);
$add=strtolower($_POST['customer-add']);
$address_event=strtolower($_POST['address_event']);
$price=$_POST['price'];
$event=strtolower($_POST['event']);
$event_date=$_POST['date'];
$email=strtolower($_POST['email']);
$mob_no=$_POST['mobile_number'];
 
if($event==null)
{
    $event="wedding";
}
$con=mysql_connect("localhost",'root','');
if($con==false)
{
    die("connection error");
}
mysql_query("use customer");
$res=mysql_query("insert into customer.order1 values('$name','$add','$address_event','$price','$event','$event_date','$email','$mob_no','$i')");
mysql_close($con);
header('location:index.html');


?>