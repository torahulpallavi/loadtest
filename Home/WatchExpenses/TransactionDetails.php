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
<?php

$PETROL=  $_REQUEST['button'];
   echo "<h1>Transactions Details for ".$PETROL."</h1>    </br>";

?>
 <center>

 <form method="post" action="/Home/index.php">
<table border="1" width="50%">
  <tr>
    <th width="25%" bgcolor="#FF0000"><h1><font color="BLUE">Date</font></h1></th>
    <th width="25%" bgcolor="#FF0000"><h1><font color="BLUE">TransactionName</font></h1></th>
    <th width="25%" bgcolor="#FF0000"><h1><font color="BLUE">Price</font></h1></th>

  </tr>

<?php
   $con=new mysqli("127.0.0.1","root","","test");
   $Mon=$_REQUEST['MonthVal'];
   $PETROL=  $_REQUEST['button'];
   //echo $_REQUEST['button'];

   $query =  "select *  from home_manage where type='$PETROL' and month='$Mon' order by date";
   $query1 =  "select sum(price)as total  from home_manage where  type='$PETROL'and month='$Mon' order by date";
   $Result=$con->query($query);
   $Result1=$con->query($query1);

	while($row1=$Result->fetch_assoc() )
		{
		echo "<tr>";
		echo "<td><h2>" .$row1['date'] ."</h2></td>" ;
		echo "<td><h1>".$row1['itemname']."</h1></td>";
		echo "<td><h2>" .$row1['price'] ."</h2></td>" ;
		echo "</tr>";
			}

	while($row2=$Result1->fetch_assoc() )
		{
		echo "<tr>";
		echo "<td> </td>";
		echo "<td></td>";
		echo "<td><h2><font color='black'>" .$row2['total'] ."</font></h2></td>" ;
		echo "</tr>";
			}

?>


  </table>


</center>
</form>



</body>
</html>
