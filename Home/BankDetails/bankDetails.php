<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Login </title>


</head>

<body>


<center><h1>Account Details</h1></center>


<table border="5" cellspacing =18 cellpadding=18>

<tr   >
  <td><input type="submit" value ="icici" onclick="populateICICI()"></td>
  <td>CustID </td>
  <td>LoginID</td>
  <td>DematID </td>
  <td>TradingNo </td>
   <td>LoanNumber  </td>
  <td>CreditCardNo </td>


</tr>
<tr   >
  <td>----</td>

  <?php


$con=mysql_connect("localhost","","") or die ("could not connect");
$db=mysql_select_db("bank",$con);


$query ="select *  from bankdetails"   ;
//echo $query;
$Result=mysql_query($query);

while($row = mysql_fetch_array($Result))
{
echo " <td>" .$row['AccountNumber'] . "</td> "    ;
echo " <td>" .$row['LoginID'] . "</td> "    ;
echo " <td>" .$row['DematID'] . "</td> "    ;
echo " <td>" .$row['TradingNo'] . "</td> "    ;
echo " <td>" .$row['LoanNumber'] . "</td> "    ;
echo " <td>" .$row['CreditCardNo'] . "</td> "    ;
echo "</tr>";
echo "</table>";
}

?>


</body>
</html>
