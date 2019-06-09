<html>


<body>
<?php


$con=mysql_connect("localhost","root","") or die ("could not connect");
$db=mysql_select_db("webauth",$con);
$Name = $_REQUEST["username"];

$query ="select *  from user_pwd where name='$Name'"   ;
//echo $query;
$Result=mysql_query($query);


while($row = mysql_fetch_array($Result))
{

if($_REQUEST["password"]==$row['pass'])
{
     $redirect =   "Location: bankDetails.php";
    header($redirect);
     }

     else
     {
      echo "<h1> Access Denied</h1>";
     	}

     	}
?>

<a href="index.html"> click to go to main page </a>
</body>
</html>