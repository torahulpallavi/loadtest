<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Report</title>
	<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />

</head>

<body>
  <div id="wrapper">
      <div id="nav">
        <ul>
          <li class="home"><a href="/Home/index.html">Home</a></li>
          <li><a href="/Home/Expense/Expenses.html">Enter Expenses</a></li>
          <li><a href="/Home/WatchExpenses/month.php">Watch Expense Details</a></li>
           <li><a href="/Home/BankDetails/Login.php">AccountDetails</a></li>

        </ul>
      </div>
    </div>

    </br>
    </br>

<h1>Transactions Done During The Period</h1>    </br>
 <center>


<table border="1" width="50%">
  <tr>
    <th width="25%" bgcolor="#FF0000"><h1><font color="BLUE">Date</font></h1></th>
    <th width="25%" bgcolor="#FF0000"><h1><font color="BLUE">itemname</font></h1></th>
    <th width="25%" bgcolor="#FF0000"><h1><font color="BLUE">type</font></h1></th>
    <th width="25%" bgcolor="#FF0000"><h1><font color="BLUE">price</font></h1></th>
  </tr>

<?php
    $con=mysql_connect("localhost","root","pa55word") or die ("could not connect");
    $db=mysql_select_db("test",$con);

  $Date12=  $_REQUEST['button'];



   $query =  "select date,itemname,type,price from home_manage where date='$Date12'";
    $query1 =  "select sum(price)as total from home_manage where date='$Date12'";
    $Result=mysql_query($query);
   $Result1=mysql_query($query1);


   while($row3=mysql_fetch_array($Result) )
		{
		echo "<tr>";
		echo "<td><h2>" . $row3['date'] ."</h2></td>" ;
		echo "<td><h2>" . $row3['itemname'] ."</h2></td>" ;
		echo "<td><h2>" . $row3['type'] ."</h2></td>" ;
		echo "<td><h2>" . $row3['price'] ."</h2></td>" ;
		echo "</tr>";
			}


	while($row5=mysql_fetch_array($Result1) )
		{
		echo "<tr>";
		echo "<td><h2>Total</h2></td>" ;
		echo "<td><h2></h2></td>" ;
		echo "<td><h2></h2></td>" ;
		echo "<td><h2><font color='black'>" . $row5['total'] ."</font></h2></td>" ;
		echo "</tr>";
			}

?>


  </table>


</center>
</form>



</body>
</html>
