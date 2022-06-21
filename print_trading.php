<!DOCTYPE html>
<html>
<head>
<style>
select{
    width: 40%;
    padding: 10px 20px 8px 8px;
    margin: 8px 8px 8px 8px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;

}

input[type=pan]{
    width: 40%;
    padding: 10px 20px 8px 8px;
    margin: 8px 8px 8px 8px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
                   
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

input[type=submit]{
    background:linear-gradient(120deg,#191970, #900C3F ,#581845);
    color: white;
    
}
.row{
            display: flex;
            flex-wrap: wrap;
            margin-left: 10%;
            padding-left: 5%;
        }
        .col-6{
            width: 20%;
            flex: 0 0 auto;
            padding: auto;
            margin-left: 1%;
            margin-right: 1%;
        }

  
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clients</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
	   
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body onload="window.print()">

 <div id="page-wrapper">
		
		
            
 <div class="row">
     <div class="col-md-12">
         <?php
	session_start();
	include'conith.php';
	
                        $customer_id=$_REQUEST['customer_id'];
                      
                        $y2=$_REQUEST['year'];
                        $e='-'.$y2;
                        $name=str_replace($e,'',$customer_id);

                        $y3=substr($y2,5);
                        $y3=(int)$y3-1;
                        $y4=$y3-1;
                        
                            
                            $p_year=$y4.'-'.$y3;
                            $p_cid=$name.'-'.$p_year;

                            

                            $q3="SELECT c_stock FROM trading WHERE customer_id='$p_cid'";
                            $r3=$conn->query($q3);

                            if ($r3->num_rows > 0) {
                                while($row3 = $r3->fetch_assoc()) {
                                    $o_stock=$row3['c_stock'];
                                }}

                        
                        //$name=$_POST['name'];
                        //$year=$_POST['year'];
                       
                        $sql2="SELECT distinct fine,due,email FROM payment WHERE month='$name'";
                        $result2=$conn->query($sql2);
                        if ($result2->num_rows > 0) {
                            while($row2 = $result2->fetch_assoc()) {
                                $pan=$row2['fine'];
                                $phone=$row2['due'];
                                $aadhar=$row2['email'];
                                
                            }}

                            echo "
                            <table style='width:100%'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-6'>
                                    <lable><b>Name:<b></lable>$name
                                    </div>
                                    <div class='col-6'>
                                    <lable><b>Phone:</b></lable>$phone
                                    </div>
                                    </div>
                                    <div class='row'>
                                    <div class='col-6'>
                                    <lable><b>PAN:</b></lable>$pan
                                    </div>
                                    <div class='col-6'>
                                    <lable><b>Aadhar:</b></lable>$aadhar
                                    </div>
                            </div></div>
                            <br>
                            <h1><u>Trading A/C for Year Ending</u></h1>

                        
                            <br><br>
                            <tr>
                            <th>PARTICULAR</th>
                            <th>AMOUNT</th>
                            <th>PARTICULAR</th>
                            <th>AMOUNT</th>
                            </tr>";

                            $sql7="SELECT * FROM trading WHERE customer_id='$customer_id'"; 
                            $result7=$conn->query($sql7);
                            if ($result7->num_rows > 0) {
                                while($row7 = $result7->fetch_assoc()) {
                                 
                                    $o_stock=$row7['o_stock'];
                        $purchase=$row7['purchase'];
                        $purchasereturn=$row7['purchasereturn'];
                        $less1=$row7['less1'];
                        $less2=$row7['less2'];
                        $sale=$row7['sale'];
                        $job=$row7['job'];
                        $salereturn=$row7['salereturn'];
                        $c_stock=$row7['c_stock'];
                        $less3=$row7['less3'];
                        $less4=$row7['less4'];
                        $income=$row7['income'];
                        $expense=$row7['expense'];
                        $t_purchase=$row7['t_purchase'];
                        $t_sale=$row7['t_sale'];
                        $g_total1=$row7['g_total1'];
                        $g_total2=$row7['g_total2'];
                        $pnl=$row7['pnl'];
                        $total1=$row7['total1'];
                        $total2=$row7['total2'];
                        $a1=$row7['a1']; $b1=$row7['b1'];
                        $a2=$row7['a2']; $b2=$row7['b2'];
                        $a3=$row7['a3']; $b3=$row7['b3'];
                        $a4=$row7['a4']; $b4=$row7['b4'];
                        $a5=$row7['a5']; $b5=$row7['b5'];
                        $a6=$row7['a6']; $b6=$row7['b6'];
                        $a7=$row7['a7']; $b7=$row7['b7'];
                        $a8=$row7['a8']; $b8=$row7['b8'];
                        $a9=$row7['a9']; $b9=$row7['b9'];
                        $a10=$row7['a10']; $b10=$row7['b10'];
                        $a11=$row7['a11']; $b11=$row7['b11'];
                        $a12=$row7['a12']; $b12=$row7['b12'];
                        $a13=$row7['a13'];$b13=$row7['b13'];
                        $a14=$row7['a14']; $b14=$row7['b14'];
                        $a15=$row7['a15']; $b15=$row7['b15'];
                        $a16=$row7['a16']; $b16=$row7['b16'];
                        $a17=$row7['a17']; $b17=$row7['b17'];
                        $a18=$row7['a18']; $b18=$row7['b18'];
                        $a19=$row7['a19']; $b19=$row7['b19'];
                        $a20=$row7['a20']; $b20=$row7['b20'];
                        $b21=$row7['b21'];

                        $at1=$row7['at1']; $bt1=$row7['bt1'];
                        $at2=$row7['at2']; $bt2=$row7['bt2'];
                        $at3=$row7['at3']; $bt3=$row7['bt3'];
                        $at4=$row7['at4']; $bt4=$row7['bt4'];
                        $at5=$row7['at5']; $bt5=$row7['bt5'];
                        $at6=$row7['at6']; $bt6=$row7['bt6'];
                        $at7=$row7['at7']; $bt7=$row7['bt7'];
                        $at8=$row7['at8']; $bt8=$row7['bt8'];
                        $at9=$row7['at9'];$bt9=$row7['bt9'];
                        $at10=$row7['at10']; $bt10=$row7['bt10'];
                        $at11=$row7['at11']; $bt11=$row7['bt11'];
                        $at12=$row7['at12']; $bt12=$row7['bt12'];
                        $at13=$row7['at13']; $bt13=$row7['bt13'];
                        $at14=$row7['at14']; $bt14=$row7['bt14'];
                        $at15=$row7['at15']; $bt15=$row7['bt15'];
                        $at16=$row7['at16'];$bt16=$row7['bt16'];
                        $at17=$row7['at17']; $bt17=$row7['bt17'];
                        $at18=$row7['at18']; $bt18=$row7['bt18'];
                        $at19=$row7['at19']; $bt19=$row7['bt19'];
                        $at20=$row7['at20']; $bt20=$row7['bt20'];
                        $bt21=$row7['bt21'];;

                                
                           echo " <tr>
                    <td><B>To OPENING STOCK</B></td>
                    <td>$o_stock</td>
   
                   <td></td>
                   <td></td>
                </tr>
                <tr>
                    <td>To PURCHASE</td>
                    <td  type='number' name='purchase' value='$purchase'>$purchase</td>
                    <td>By Sales</td>
                    <td type='number' name='sale' value='$sale'>$sale</td> 
                </tr>
                <tr>
                <td type='text' name='at1' value='$at1'>$at1</td>
                <td type='number' name='a1' value='$a1'>$a1</td>
                <td>By JOBWORK</td>
                <td type='number' name='job' value='$job' >$job</td>

                </tr>

                <tr>
                <td type='text' name='at2' value='$at2'>$at2</td>
                <td type='number' name='a2' value='$a2'>$a2</td>
                <td type='text' name='bt1' value='$bt1'>$bt1</td>
                <td type='number' name='b1' value='$b1'>$b1</td>
                </tr>

                <tr>
                <td type='text' name='at3' value='$at3'>$at3</td>
                <td type='number' name='a3' value='$a3'>$a3</td>
                <td type='text' name='bt2' value='$bt2'>$bt2</td>
                <td type='number' name='b2' value='$b2'>$b2</td>
                </tr>

                <tr>
                <td type='text' name='at4' value='$at4'>$at4</td>
                <td type='number' name='a4' value='$a4'>$a4</td>
                <td type='text' name='bt3' value='$bt3'>$bt3</td>
                <td type='number' name='b3' value='$b3'>$b3</td>
                </tr>

                <tr>
                <td type='text' name='at5' value='$at5'>$at5</td>
                <td type='number' name='a5' value='$a5'>$a5</td>
                <td type='text' name='bt4' value='$bt4'>$bt4</td>
                <td type='number' name='b4' value='$b4'>$b4</td>
                </tr>

                <tr>
                    <td>Less PURCHASE RETURN</td>
                    <td type='number' name='purchaseReturn' value='$purchasereturn'>$purchasereturn</td>
                    <td>Less SALES RETURN</td>
                    <td type='number' name='saleReturn' value='$salereturn' >$salereturn</td>
                </tr>
                <tr>
                    <td>Less</td>
                    <td type='number' name='less1' value='$less1'>$less1</td>
                    <td>Less</td>
                    <td type='number' name='less2' value='$less2'>$less2</td>
                </tr>
                <tr>
                    <td>Less</td>
                    <td type='number' name='less3' value='$less3'>$less3</td>
                    <td>Less</td>
                    <td type='number' name='less4' value='$less4'>$less4</td>
                </tr>

                </tr>
                <tr>
                    <td><b>TOTAL PURCHASE</b></td>
                    <td value=''>$t_purchase</td>
                    <td><B>TOTAL SALES</B></td>
                    <td value=''>$t_sale</td>
                </tr>

                <tr>
                    <td>To EXPENSES</td>
                    <td type='number' name='expense' value='$expense'>$expense</td>
                    <td>By INCOME</td>
                    <td type='number' name='income' value='$income'>$income</td>
                </tr>

                <tr>
                <td type='text' name='at6' value='$at6'>$at6</td>
                <td type='number' name='a6' value='$a6'>$a6</td>
                <td type='text' name='bt5' value='$bt5'>$bt5</td>
                <td type='number' name='b5' value='$b5'>$b5</td>
                </tr>
                <tr>
                <td type='text' name='at7' value='$at7'>$at7</td>
                <td type='number' name='a7' value='$a7'>$a7</td>
                <td type='text' name='bt6' value='$bt6'>$bt6</td>
                <td type='number' name='b6' value='$b6'>$b6</td>
                </tr>
                <tr>
                <td type='text' name='at8' value='$at8'>$at8</td>
                <td type='number' name='a8' value='$a8'>$a8</td>
                <td type='text' name='bt7' value='$bt7'>$bt7</td>
                <td type='number' name='b7' value='$b7'>$b7</td>
                </tr>
                <tr>
                <td type='text' name='at9' value='$at9'>$at9</td>
                <td type='number' name='a9' value='$a9'>$a9</td>
                <td type='text' name='bt8' value='$bt8'>$bt8</td>
                <td type='number' name='b8' value='$b8'>$b8</td>
                </tr>
                <tr>
                <td type='text' name='at10' value='$at10'>$at10</td>
                <td type='number' name='a10' value='$a10'>$a10</td>
                <td type='text' name='bt9' value='$bt9'>$bt9</td>
                <td type='number' name='b9' value='$b9'>$b9</td>
                </tr>
                <tr>
                <td type='text' name='at11' value='$at11'>$at11</td>
                <td type='number' name='a11' value='$a11'>$a11</td>
                <td type='text' name='bt10' value='$bt10'>$bt10</td>
                <td type='number' name='b10' value='$b10'>$b10</td>
                </tr>
                <tr>
                <td type='text' name='at12' value='$at12'>$at12</td>
                <td type='number' name='a12' value='$a12'>$a12</td>
                <td type='text' name='bt11' value='$bt11'>$b11</td>
                <td type='number' name='b11' value='$b11'>$bt11</td>
                </tr>
                <tr>
                <td type='text' name='at13' value='$at13'>$at13</td>
                <td type='number' name='a13' value='$a13'>$a13</td>
                <td type='text' name='bt12' value='$bt12'>$bt12</td>
                <td type='number' name='b12' value='$b12'>$b12</td>
                </tr>
                <tr>
                <td type='text' name='at14' value='$at14'>$at14</td>
                <td type='number' name='a14' value='$a14'>$a14</td>
                <td type='text' name='bt13' value='$bt13'>$bt13</td>
                <td type='number' name='b13' value='$b13'>$b13</td>
                </tr>
                <tr>
                <td type='text' name='at15' value='$at15'>$at15</td>
                <td type='number' name='a15' value='$a15'>$a15</td>
                <td type='text' name='bt14' value='$bt14'>$bt14</td>
                <td type='number' name='b14' value='$b14'>$b14</td>
                </tr>
                <tr>
                <td type='text' name='at16' value='$at16'>$at16</td>
                <td type='number' name='a16' value='$a16'>$a16</td>
                <td type='text' name='bt15' value='$bt15'>$bt15</td>
                <td type='number' name='b15' value='$b15'>$b15</td>
                </tr>
                <tr>
                <td type='text' name='at17' value='$at17'>$at17</td>
                <td type='number' name='a17' value='$a17'>$a17</td>
                <td type='text' name='bt16' value='$bt16'>$bt16</td>
                <td type='number' name='b16' value='$b16'>$b16</td>
                </tr>
                <tr>
                <td type='text' name='at18' value='$at18'>$at18</td>
                <td type='number' name='a18' value='$a18'>$a18</td>
                <td type='text' name='bt17' value='$bt17'>$bt17</td>
                <td type='number' name='b17' value='$b17'>$b17</td>
                </tr>
                <tr>
                <td type='text' name='at19' value='$at19'>$at19</td>
                <td type='number' name='a19' value='$a19'>$a19</td>
                <td type='text' name='bt18' value='$bt18'>$bt18</td>
                <td type='number' name='b18' value='$b18'>$b18</td>
                </tr>
                <tr>
                <td type='text' name='at20' value='$at20'>$at20</td>
                <td type='number' name='a20' value='$a20'>$a20</td>
                <td type='text' name='bt19' value='$bt19'>$bt19</td>
                <td type='number' name='b19' value='$b19'>$b19</td>
                </tr>

                <tr>
                    <td><B>GROSS PROFIT C/F<B></td>
                    <td value=''>$pnl</td>
                    <td><B> CLOSING STOCK C/F TO B.S</B></td>
                    <td type='number' name='c_stock' value='$c_stock'>$c_stock</td>
                </tr>
                
                <tr>
                <td></td>
                <td></td>
                <td type='text' name='bt20' value='$bt20'>$bt20</td>
                <td type='number' name='b20' value='$b20'>$b20</td>

                </tr>
                <tr>
                <td></td>
                <td></td>
                <td type='text' name='bt21' value='$bt21'>$bt21</td>
                <td type='number' name='b21' value='$b21'>$b21</td>
                </tr>
            
           
          
                <tr>
                <td><b> TOTAL</b></td>
                <td value=''>$total1</td>
                <td><b> TOTAL</b></td>
                <td value=''>$total2</td>
            </tr>   
                </tr>";
                        
                                }}
        
        $conn->close();
        ?>



        


            
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->
  

    
	
</body>

</html>