

<?php
$val=strtolower($_POST["t1"]);
$con=mysql_connect("localhost",'root','');
if($con==false)
{
    die("connection error");
}
mysql_query("use customer");
$res=mysql_query("DELETE FROM order1 WHERE name='$val'");
if($res==true)
{
echo("<script>alert('deleted successfuly');</script>");
}
else{
    echo("<script>alert('record not found');</script>");
}
mysql_close($con);
?>