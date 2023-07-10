<?php
$name=$_POST['customer-name'];
$add=$_POST['customer-add'];
$address_event=$_POST['address_event'];
$price=$_POST['price'];
$event=$_POST['event'];
$event_date=$_POST['date'];
$email=$_POST['email'];
$mob_no=$_POST['mobile_number'];




$con=mysql_connect("localhost",'root','');
if($con==false)
{
    die("connection error");
}
mysql_query("use customer");
$res=mysql_query("insert into customer.order1 values('$name','$add','$address_event','$price','$event','$event_date','$email','$mob_no','$i')");
if($res==true)
{
    echo("<script>alert('Data Saved Successfuly')</script>");
}
else{
    echo("<script>alert('There is a Problem')</script>");
}
mysql_close($con);
header('location:admin.php');


?>