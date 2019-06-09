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

 <form method="post" action="/Home/WatchExpenses/DateView_Day.php">
<table border="1" width="50%">
  <tr>
    <th width="25%" bgcolor="#FF0000"><h1><font color="BLUE">Date</font></h1></th>
    <th width="25%" bgcolor="#FF0000"><h1><font color="BLUE">Total</font></h1></th>
  </tr>

<?php
   $con=new mysqli("127.0.0.1","root","","test");

       $datemon=$_REQUEST["MonthVal"] ;
       echo "<h2>Data for Month ".$datemon."</h2>";
   //echo $_REQUEST['button'];

   $query =  "select sum(price) as Total,date from home_manage where month='$datemon' group by date order by date";
   $Result=$con->query($query);


	while($row1=$Result->fetch_assoc() )
		{

		echo "<tr>";
		echo "<td><h2>" .$row1['date'] ."<input type='submit' name='button' value=".$row1['date'].">" . "</h2></td>" ;
		echo "<td><h1>".$row1['Total']."</h1></td>";
		echo "</tr>";




			}

?>
  </form>

  </table>


</center>




</body>
</html>
