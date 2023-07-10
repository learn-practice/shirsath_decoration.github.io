<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search page</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
    
</body>
</html>
<?php

$con=mysql_connect("localhost",'root','');
if($con==false)
{
    die("connection error");
}
$value=$_POST["t1"];
mysql_select_db("customer");
$res=mysql_query("SELECT order1.name,order1.add,order1.address_event,order1.price,order1.event,order1.event_date,order1.email,order1.mob_no,order1.cust_id FROM customer.order1 WHERE event_date='$value'");
echo"<center>";
echo"<table border=1><tr><th>name</th><th>address</th><th>address of event</th><th>price</th><th>event</th><th>date of event</th><th>email address</th><th>mobile number</th><th>customer id</th></tr>";
while($row=mysql_fetch_array($res))
{
    echo("<tr><td>$row[0]");
    echo("<td>$row[1]");
    echo("<td>$row[2]");
    echo("<td>$row[3]");
    echo("<td>$row[4]");
    echo("<td>$row[5]");
    echo("<td>$row[6]");
    echo("<td>$row[7]");
    echo("<td>$row[8]");
    echo("</tr>");

}
echo"</table>";
echo"</center>";
echo"<br><a href='admin.php' class='back'>back</a>";
// else{
//     echo("<script>alert('record not found');</script>");
// }
mysql_close($con);


?>