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
  echo "<div align='left' color='blue' >";
echo "<form method='post' action='/Home/WatchExpenses/DateView.php'>";
							global $monthVal;
							$monthVal=$_REQUEST['monthval1'];

 echo "<input type='hidden' name='MonthVal' value=".$monthVal.">"  ;
 echo "<center><input type='submit' name='button' value='GetDateWiseTotal'></center>";

 echo "</form>";

 echo "</div>";
 echo "<center>";

     echo " <p>";
      echo "</p>";

echo " <form method='post' action='/Home/WatchExpenses/TransactionDetails.php'>";
echo "<input type='hidden' name='MonthVal' value=".$monthVal.">"  ;
echo "<table border='1' width='30%'>";
  echo "<tr>";
   echo " <th width='20%' bgcolor='yellow'><h1><font color='BLUE'>Type</font></h1></th>";
   echo "<th width='10%' bgcolor='yellow'><h1><font color='BLUE'>Total</font></h1></th>";
  echo "</tr>";
  echo "<tr>";
    echo "<td><h2><a href='ExpenseList.php'>Sum Of All Expenses</a></h2></td>";



	$con=new mysqli("127.0.0.1","root","","test");




   $query =  "select sum(price)as total from home_manage where month='$monthVal' ";
   $query1 = "select sum(price)as Petrol from home_manage where type='Petrol' and  month='$monthVal' ";
   $query2 = "select sum(price)as Lunch from home_manage where type='Lunch' and  month='$monthVal'";
   $query3 = "select sum(price)as Breakfast from home_manage where type='Breakfast'and  month='$monthVal' ";
   $query4 = "select sum(price)as Dinner from home_manage where type='Dinner' and  month='$monthVal'";
   $query5 = "select sum(price)as Loans from home_manage where type='Loans' and  month='$monthVal' ";
   $query6 = "select sum(price)as Maintenance from home_manage where type='Maintenance' and  month='$monthVal'";
   $query7 = "select sum(price)as Snacks from home_manage where type='Snacks' and  month='$monthVal'";
   $query8 = "select sum(price)as Grocery from home_manage where type='Grocery' and  month='$monthVal'";
   $query9 = "select sum(price)as Vegetables from home_manage where type='Vegetables' and  month='$monthVal' ";
   $query10 = "select sum(price)as Investment from home_manage where type='Investment' and  month='$monthVal' ";

	$Result=$con->query($query);
	$Result1=$con->query($query1);
	$Result2=$con->query($query5);
	$Result3=$con->query($query2);
	$Result4=$con->query($query4);
	$Result5=$con->query($query3);
	$Result6=$con->query($query6);
	$Result7=$con->query($query7);
	$Result8=$con->query($query8);
	$Result9=$con->query($query9);
	$Result10=$con->query($query10);

	
              /*Sum of All Expences*/
			  while($row=$Result->fetch_assoc() )
			  {
	  
			  echo "<td><h2>" . $row['total'] ."</h2></td>" ;
			  echo "</tr>";
	  
				  }


				   /*Petrol*/

	while($row1=$Result1->fetch_assoc()  )
	{
	echo "<tr>";
	echo "<td><h2>Petrol&nbsp;&nbsp;<input type='submit' name='button' value='Petrol'></h2></td>";
	echo "<td><h2>" . $row1['Petrol'] ."</h2></td>" ;
	echo "</tr>";
		}


		/*Petrol*/

while($row3=$Result2->fetch_assoc()  )
	{
	echo "<tr>";
	echo "<td><h2>Loans&nbsp;&nbsp;<input type='submit' name='button' value='Loans'></h2></td>";
	echo "<td><h2>" . $row3['Loans'] ."</h2></td>" ;
	echo "</tr>";
		}
		/*Petrol*/

while($row4=$Result3->fetch_assoc()  )
	{
	echo "<tr>";
	echo "<td><h2>Lunch&nbsp;&nbsp;<input type='submit' name='button' value='Lunch'></h2></td>";
	echo "<td><h2>" . $row4['Lunch'] ."</h2></td>" ;
	echo "</tr>";
		}
		/*Petrol*/

while($row5=$Result4->fetch_assoc()  )
	{
	echo "<tr>";
	echo "<td><h2>Dinner&nbsp;&nbsp;<input type='submit' name='button' value='Dinner'></h2></td>";
	echo "<td><h2>" . $row5['Dinner'] ."</h2></td>" ;
	echo "</tr>";
		}
		/*Petrol*/

while($row6=$Result5->fetch_assoc() )
	{
	echo "<tr>";
	echo "<td><h2>Breakfast&nbsp;&nbsp;<input type='submit' name='button' value='Breakfast'></h2></td>";
	echo "<td><h2>" . $row6['Breakfast'] ."</h2></td>" ;
	echo "</tr>";
		}
		/*Petrol*/

while($row7=$Result6->fetch_assoc()  )
	{
	echo "<tr>";
	echo "<td><h2>Maintainance&nbsp;&nbsp;<input type='submit' name='button' value='Maintenance'></h2></td>";
	echo "<td><h2>" . $row7['Maintenance'] ."</h2></td>" ;
	echo "</tr>";
		}

   while($row8=$Result7->fetch_assoc()  )
	{
	echo "<tr>";
	echo "<td><h2>Snacks&nbsp;&nbsp;<input type='submit' name='button' value='Snacks'></h2></td>";
	echo "<td><h2>" . $row8['Snacks'] ."</h2></td>" ;
	echo "</tr>";
		}
		/*Petrol*/

while($row9=$Result8->fetch_assoc()  )
	{
	echo "<tr>";
	echo "<td><h2>Grocery&nbsp;&nbsp;<input type='submit' name='button' value='Grocery'></h2></td>";
	echo "<td><h2>" . $row9['Grocery'] ."</h2></td>" ;
	echo "</tr>";
		}
		/*Petrol*/

while($row10=$Result9->fetch_assoc()  )
	{
	echo "<tr>";
	echo "<td><h2>Vegetables&nbsp;&nbsp;<input type='submit' name='button' value='Vegetables'></h2></td>";
	echo "<td><h2>" . $row10['Vegetables'] ."</h2></td>" ;
	echo "</tr>";
		}


while($row11=$Result10->fetch_assoc()  )
	{
	echo "<tr>";
	echo "<td><h2>Investment&nbsp;&nbsp;<input type='submit' name='button' value='Investment'></h2></td>";
	echo "<td><h2>" . $row11['Investment'] ."</h2></td>" ;
	echo "</tr>";
		}

?>


  </table>


</center>
</form>

</body>
</html>
