<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
    <center>
    <div class="container"></div>
    <form action="search.php" method="post">
     <div class="search">
        
    <input type="text" name="t1" placeholder="Enter Date To Search"><br>
     <br><input type="submit" value="Search" class="submit">
    
    </div>
    </form>
    
     <div>
        <a href="insert.html"><button>Insert</button> </a>
    </div>
    
    
     <div class="delete-cont">
     <a href="delete.html"><button>Delete</button> </a>
    </div>
    </center>
</body>
</html>
 <?php
$con=mysql_connect("localhost",'root','');
if($con==false)
{
    die("connection error");
}
mysql_query("use customer");
$res=mysql_query("select* from customer.order1");
echo"<center>";
echo"<table border=1 ><tr> <th>name</th><th>address</th><th>address of event</th><th>price</th><th>event</th><th>date of event</th><th>email address</th><th>mobile number</th><th>customer id</th></tr>";
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
mysql_close($con);

echo"<br><a href='index.html' class='back'>back</a>";


?>  