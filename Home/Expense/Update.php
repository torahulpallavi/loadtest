<html>
  <body>
    
      <?php
         $con=new mysqli("127.0.0.1","root","","test");

         $ItemName = $_REQUEST["Item_Name"];
         $ItemPrice = $_REQUEST["Price"];
         $ItemType3 = $_REQUEST["ItemType"];
         $PurchaseDate = $_REQUEST["Date"];
         $ItemType = $_REQUEST["Date"];
         $ItemType1 = $_REQUEST["Month"];
         $ItemType2 = $_REQUEST["YYYY"];
         $Date_Cat=$ItemType2 ."-". $ItemType1 . "-" .$ItemType;


         
        if($ItemType1==10)
        {
          $Mon='Oct';
          }
          else{
                if($ItemType1==11)
                  {
                      $Mon='Nov';
                  }
                } 


        echo  $Date_Cat;
        $query = "insert into home_manage(itemname,price,type,date,year,month) values('$ItemName','$ItemPrice','$ItemType3','$Date_Cat','2018','$Mon')";
        $con->query($query);
      ?>


<script language="javascript" type="text/javascript">
 alert("Record Inserted Sucessfully");
</script>


  <?php
    $redirect =   "Location: Expenses.html";
    header($redirect);
  ?>









  </body>

</html>