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
          <li><a href="/Home/WatchExpenses/Report.php">Watch Expense Details</a></li>
           <li><a href="/Home/BankDetails/Login.php">AccountDetails</a></li>

        </ul>
      </div>
    </div>

    </br>
    </br>

<h1>Select Month of which you want to view the report</h1>    </br>


<h2> </h2>

<form action="/Home/WatchExpenses/Report.php" method="get">
<select name="monthval1">

   <option selected="true">Oct</option>
   <option>Nov</option>
   <option>Dec</option>
   
</select>
<input type="submit" value="submit">
</form>
</body>
</html>
