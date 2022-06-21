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
  
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<div id="wrapper">

		



<?php include 'header4.php'; 
/*$uniqueId = time().'_'.mt_rand();
if(isset($_GET["client_id"])){
$client_id       = $_GET["client_id"];
}else{ $client_id="";
}*/
$sql="SELECT distinct month FROM payment where materialamt!=''";
$result=$conn->query($sql);
$sql5="SELECT * FROM trading ";
$result5=$conn->query($sql5);
?>
 <!-- /. NAV SIDE  -->
 <div id="page-wrapper">
		
		
            
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line"></h1>
                <form method='POST' name='trading' action='edit_trading.php'>
                        <table style='width:100%'>
                <?php
                //Trading detail
                    

                    //Trading account calculation
                     if(isset($_POST['submit2'])){

                    $name=$_POST['name'];
                    $year=$_POST['year'];
                    $pan=$_POST['pan'];
                    $phone=$_POST['phone'];
                    $aadhar=$_POST['aadhar'];
                    $customer_id=$_POST['customer_id'];

                        $customer_id=$_POST['customer_id'];
                        $customer_id=$_POST['customer_id'];
                        $o_stock=(int)$_POST['o_stock'];
                        $purchase=(int)$_POST['purchase'];
                        $purchasereturn=(int)$_POST['purchaseReturn'];
                        $less1=(int)$_POST['less1'];
                        $less2=(int)$_POST['less2'];
                        $sale=(int)$_POST['sale'];
                        $job=(int)$_POST['job'];
                        $salereturn=(int)$_POST['saleReturn'];
                        $c_stock=(int)$_POST['c_stock'];
                        $less3=(int)$_POST['less3'];
                        $less4=(int)$_POST['less4'];
                        $income=(int)$_POST['income'];
                        $expense=(int)$_POST['expense'];
                       
                        

                       
                        $a1=(int)$_POST['a1']; $b1=(int)$_POST['b1'];
                        $a2=(int)$_POST['a2']; $b2=(int)$_POST['b2'];
                        $a3=(int)$_POST['a3']; $b3=(int)$_POST['b3'];
                        $a4=(int)$_POST['a4']; $b4=(int)$_POST['b4'];
                        $a5=(int)$_POST['a5']; $b5=(int)$_POST['b5'];
                        $a6=(int)$_POST['a6']; $b6=(int)$_POST['b6'];
                        $a7=(int)$_POST['a7']; $b7=(int)$_POST['b7'];
                        $a8=(int)$_POST['a8']; $b8=(int)$_POST['b8'];
                        $a9=(int)$_POST['a9']; $b9=(int)$_POST['b9'];
                        $a10=(int)$_POST['a10']; $b10=(int)$_POST['b10'];
                        $a11=(int)$_POST['a11']; $b11=(int)$_POST['b11'];
                        $a12=(int)$_POST['a12']; $b12=(int)$_POST['b12'];
                        $a13=(int)$_POST['a13']; $b13=(int)$_POST['b13'];
                        $a14=(int)$_POST['a14']; $b14=(int)$_POST['b14'];
                        $a15=(int)$_POST['a15']; $b15=(int)$_POST['b15'];
                        $a16=(int)$_POST['a16']; $b16=(int)$_POST['b16'];
                        $a17=(int)$_POST['a17']; $b17=(int)$_POST['b17'];
                        $a18=(int)$_POST['a18']; $b18=(int)$_POST['b18'];
                        $a19=(int)$_POST['a19']; $b19=(int)$_POST['b19'];
                        $a20=(int)$_POST['a20']; $b20=(int)$_POST['b20'];
                                                $b21=(int)$_POST['b21'];

                    $at1=$_POST['at1']; $bt1=$_POST['bt1'];
                    $at2=$_POST['at2']; $bt2=$_POST['bt2'];
                    $at3=$_POST['at3']; $bt3=$_POST['bt3'];
                    $at4=$_POST['at4']; $bt4=$_POST['bt4'];
                    $at5=$_POST['at5']; $bt5=$_POST['bt5'];
                    $at6=$_POST['at6']; $bt6=$_POST['bt6'];
                    $at7=$_POST['at7']; $bt7=$_POST['bt7'];
                    $at8=$_POST['at8']; $bt8=$_POST['bt8'];
                    $at9=$_POST['at9']; $bt9=$_POST['bt9'];
                    $at10=$_POST['at10']; $bt10=$_POST['bt10'];
                    $at11=$_POST['at11']; $bt11=$_POST['bt11'];
                    $at12=$_POST['at12']; $bt12=$_POST['bt12'];
                    $at13=$_POST['at13']; $bt13=$_POST['bt13'];
                    $at14=$_POST['at14']; $bt14=$_POST['bt14'];
                    $at15=$_POST['at15']; $bt15=$_POST['bt15'];
                    $at16=$_POST['at16']; $bt16=$_POST['bt16'];
                    $at17=$_POST['at17']; $bt17=$_POST['bt17'];
                    $at18=$_POST['at18']; $bt18=$_POST['bt18'];
                    $at19=$_POST['at19']; $bt19=$_POST['bt19'];
                    $at20=$_POST['at20']; $bt20=$_POST['bt20'];
                    $bt21=$_POST['bt21'];

                    $t_purchase=$purchase+$a1+$a2+$a3+$a4+$a5-$purchasereturn-$less1-$less3;
                        

                    $t_sale=$sale+$job+$b1+$b2+$b3+$b4-$salereturn-$less2-$less4;

                    $total2=$t_sale+$income+$c_stock+$b5+$b6+$b7+$b8+$b9+$b10+$b11+$b12+$b13+$b14+$b15+$b16+$b17+$b18+$b19+$b20+$b21;
                   
                    $pnl=$total2-$t_purchase-$expense-$a6-$a7-$a8-$a9-$a10-$a11-$a12-$a13-$a14-$a15-$a16-$a17-$a18-$a19-$a20;
                   
                    $total1=$total2;
                   
                    $q1="UPDATE trading SET o_stock='$o_stock',purchase='$purchase',purchasereturn='$purchasereturn',less1='$less1',less2='$less2',sale='$sale',job='$job',salereturn='$salereturn',c_stock='$c_stock',less3='$less3',less4='$less4',income='$income',expense='$expense',t_purchase='$t_purchase',t_sale='$t_sale',pnl='$pnl',total1='$total1',total2='$total2',a1='$a1',a2='$a2',a3='$a3',a4='$a4',a5='$a5',a6='$a6',a7='$a7',a8='$a8',a9='$a9',a10='$a10',a11='$a11',a12='$a12',a13='$a13',a14='$a14',a15='$a15',a16='$a16',a17='$a17',a18='$a18',a19='$a19',a20='$a20',a1='$at1',at2='$at2',at3='$at3',at4='$at4',at5='$at5',at6='$at6',at7='$at7',at8='$at8',at9='$at9',at10='$at10',at11='$at11',at12='$at12',at13='$at13',at14='$at14',at15='$at15',at16='$at16',at17='$at17',at18='$at18',at19='$at19',at20='$at20',b1='$b1',b2='$b2',b3='$b3',b4='$b4',b5='$b5',b6='$b6',b7='$b7',b8='$b8',b9='$b9',b10='$b10',b11='$b11',b12='$b12',b13='$b13',b14='$b14',b15='$b15',b16='$b16',b17='$b17',b18='$b18',b19='$b19',b20='$b20',b1='$bt1',bt2='$bt2',bt3='$bt3',bt4='$bt4',bt5='$bt5',bt6='$bt6',bt7='$bt7',bt8='$bt8',bt9='$bt9',bt10='$bt10',bt11='$bt11',bt12='$bt12',bt13='$bt13',bt14='$bt14',bt15='$bt15',bt16='$bt16',bt17='$bt17',bt18='$bt18',bt19='$bt19',bt20='$bt20' WHERE customer_id='$customer_id'";
                    $r1=$conn->query($q1);

                      
                        echo "<br>";

                        $name=$_POST['name'];
                        $year=$_POST['year'];
                        $pan=$_POST['pan'];
                        $aadhar=$_POST['aadhar'];
                        $phone=$_POST['phone'];

                        echo "<input type='hidden' value='$name' name='name'>
                                    <input type='hidden' value='$year' name='year'>
                                    <input type='hidden' value='$pan' name='pan'>
                                    <input type='hidden' value='$aadhar' name='aadhar'>
                                    <input type='hidden' value='$phone' name='phone'>
                                    <input type='hidden' value='$customer_id' name='customer_id'>
          
                                    ";
          
                                  echo "
                                  <lable>Name:</lable><input type='pan' name='pan' value='$name'>
                                  <lable>Phone:</lable><input type='pan' name='phone' value='$phone'>
                                  <br>
                                  
                                  <lable>PAN:</lable><input type='pan' name='pan' value='$pan'>
                                  <lable>Aadhar:</lable><input type='pan' name='aadhar' value='$aadhar'>
                                  
                                  
                                  <br>
                        <h1><u>Trading A/C for Year Ending</u></h1>
                        <br><br>
                        <tr>
                            <th>PARTICULAR</th>
                            <th>AMOUNT</th>
                            <th>PARTICULAR</th>
                            <th>AMOUNT</th>
                        </tr>
                        <tr>
                    <td><B>To OPENING STOCK</B></td>
                        <td>$o_stock</td>
                    <input type='hidden' value='$o_stock' name='o_stock'>
                   <td></td>
                   <td></td>
                </tr>

              
                


                <tr>
                    <td>To PURCHASE</td>
                    <td><input type='number' name='purchase' value='$purchase' require>
                    <td>By Sales</td>
                    <td><input type='number' name='sale' value='$sale' require></td>

                   
                </tr>
                <tr>
                <td><input type='text' name='at1' value='$at1'></td>
                <td><input type='number' name='a1' value='$a1'></td>
                <td>By JOBWORK</td>
                <td><input type='number' name='job' value='$job' require>

                </tr>

                <tr>
                <td><input type='text' name='at2' value='$at2'></td>
                <td><input type='number' name='a2' value='$a2'></td>
                <td><input type='text' name='bt1' value='$bt1'></td>
                <td><input type='number' name='b1' value='$b1'></td>
                </tr>

                <tr>
                <td><input type='text' name='at3' value='$at3'></td>
                <td><input type='number' name='a3' value='$a3'></td>
                <td><input type='text' name='bt2' value='$bt2'></td>
                <td><input type='number' name='b2' value='$b2'></td>
                </tr>

                <tr>
                <td><input type='text' name='at4' value='$at4'></td>
                <td><input type='number' name='a4' value='$a4'></td>
                <td><input type='text' name='bt3' value='$bt3'></td>
                <td><input type='number' name='b3' value='$b3'></td>
                </tr>

                <tr>
                <td><input type='text' name='at5' value='$at5'></td>
                <td><input type='number' name='a5' value='$a5'></td>
                <td><input type='text' name='bt4' value='$bt4'></td>
                <td><input type='number' name='b4' value='$b4'></td>
                </tr>

                <tr>
                    <td>Less PURCHASE RETURN</td>
                    <td><input type='number' name='purchaseReturn' value='$purchasereturn' require></td>
                    <td>Less SALES RETURN</td>
                    <td><input type='number' name='saleReturn' value='$salereturn' ></td>
                </tr>
                <tr>
                    <td>Less</td>
                    <td><input type='number' name='less1' value='$less1'></td>
                    <td>Less</td>
                    <td><input type='number' name='less2' value='$less2'></td>
                </tr>
                <tr>
                    <td>Less</td>
                    <td><input type='number' name='less3' value='$less3'></td>
                    <td>Less</td>
                    <td><input type='number' name='less4' value='$less4'></td>
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
                    <td><input type='number' name='expense' value='$expense'></td>
                    <td>By INCOME</td>
                    <td><input type='number' name='income' value='$income'></td>
                </tr>

                <tr>
                <td><input type='text' name='at6' value='$at6'></td>
                <td><input type='number' name='a6' value='$a6'></td>
                <td><input type='text' name='bt5' value='$bt5'></td>
                <td><input type='number' name='b5' value='$b5'></td>
                </tr>
                <tr>
                <td><input type='text' name='at7' value='$at7'></td>
                <td><input type='number' name='a7' value='$a7'></td>
                <td><input type='text' name='bt6' value='$bt6'></td>
                <td><input type='number' name='b6' value='$b6'></td>
                </tr>
                <tr>
                <td><input type='text' name='at8' value='$at8'></td>
                <td><input type='number' name='a8' value='$a8'></td>
                <td><input type='text' name='bt7' value='$bt7'></td>
                <td><input type='number' name='b7' value='$b7'></td>
                </tr>
                <tr>
                <td><input type='text' name='at9' value='$at9'></td>
                <td><input type='number' name='a9' value='$a9'></td>
                <td><input type='text' name='bt8' value='$bt8'></td>
                <td><input type='number' name='b8' value='$b8'></td>
                </tr>
                <tr>
                <td><input type='text' name='at10' value='$at10'></td>
                <td><input type='number' name='a10' value='$a10'></td>
                <td><input type='text' name='bt9' value='$bt9'></td>
                <td><input type='number' name='b9' value='$b9'></td>
                </tr>
                <tr>
                <td><input type='text' name='at11' value='$at11'></td>
                <td><input type='number' name='a11' value='$a11'></td>
                <td><input type='text' name='bt10' value='$bt10'></td>
                <td><input type='number' name='b10' value='$b10'></td>
                </tr>
                <tr>
                <td><input type='text' name='at12' value='$at12'></td>
                <td><input type='number' name='a12' value='$a12'></td>
                <td><input type='text' name='bt11' value='$bt11'></td>
                <td><input type='number' name='b11' value='$b11'></td>
                </tr>
                <tr>
                <td><input type='text' name='at13' value='$at13'></td>
                <td><input type='number' name='a13' value='$a13'></td>
                <td><input type='text' name='bt12' value='$bt12'></td>
                <td><input type='number' name='b12' value='$b12'></td>
                </tr>
                <tr>
                <td><input type='text' name='at14' value='$at14'></td>
                <td><input type='number' name='a14' value='$a14'></td>
                <td><input type='text' name='bt13' value='$bt13'></td>
                <td><input type='number' name='b13' value='$b13'></td>
                </tr>
                <tr>
                <td><input type='text' name='at15' value='$at15'></td>
                <td><input type='number' name='a15' value='$a15'></td>
                <td><input type='text' name='bt14' value='$bt14'></td>
                <td><input type='number' name='b14' value='$b14'></td>
                </tr>
                <tr>
                <td><input type='text' name='at16' value='$at16'></td>
                <td><input type='number' name='a16' value='$a16'></td>
                <td><input type='text' name='bt15' value='$bt15'></td>
                <td><input type='number' name='b15' value='$b15'></td>
                </tr>
                <tr>
                <td><input type='text' name='at17' value='$at17'></td>
                <td><input type='number' name='a17' value='$a17'></td>
                <td><input type='text' name='bt16' value='$bt16'></td>
                <td><input type='number' name='b16' value='$b16'></td>
                </tr>
                <tr>
                <td><input type='text' name='at18' value='$at18'></td>
                <td><input type='number' name='a18' value='$a18'></td>
                <td><input type='text' name='bt17' value='$bt17'></td>
                <td><input type='number' name='b17' value='$b17'></td>
                </tr>
                <tr>
                <td><input type='text' name='at19' value='$at19'></td>
                <td><input type='number' name='a19' value='$a19'></td>
                <td><input type='text' name='bt18' value='$bt18'></td>
                <td><input type='number' name='b18' value='$b18'></td>
                </tr>
                <tr>
                <td><input type='text' name='at20' value='$at20'></td>
                <td><input type='number' name='a20' value='$a20'></td>
                <td><input type='text' name='bt19' value='$bt19'></td>
                <td><input type='number' name='b19' value='$b19'></td>
                </tr>

                <tr>
                    <td><B>GROSS PROFIT C/F<B></td>
                    <td value=''>$pnl</td>
                    <td><B> CLOSING STOCK C/F TO B.S</B></td>
                    <td><input type='number' name='c_stock' value='$c_stock'></td>
                </tr>
                
                <tr>
                <td></td>
                <td></td>
                <td><input type='text' name='bt20' value='$bt20'></td>
                <td><input type='number' name='b20' value='$b20'></td>

                </tr>
                <tr>
                <td></td>
                <td></td>
                <td><input type='text' name='bt21' value='$bt21'></td>
                <td><input type='number' name='b21' value='$b21'></td>
                </tr>
            
            
           
          
                <tr>
                <td><b> TOTAL</b></td>
                <td value=''>$total1</td>
                <td><b> TOTAL</b></td>
                <td value=''>$total2</td>
            </tr>   
                </tr>
                <tr>
                    <td><a href='print_trading.php?&customer_id=".$customer_id. " &year=".$year."''>Print</a></td>
                </tr>";


                     } 
                     else{
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
                        
                        //$y=$year+1;
                            //$y2= $year .'-'. $y;

                            echo "<input type='hidden' value='$name' name='name'>
                              <input type='hidden' value='$y2' name='year'>
                              <input type='hidden' value='$pan' name='pan'>
                              <input type='hidden' value='$aadhar' name='aadhar'>
                              <input type='hidden' value='$phone' name='phone'>
                              <input type='hidden' value='$customer_id' name='customer_id'>

                              ";

                            echo "
                            
                            <lable>Name:</lable><input type='pan' name='pan' value='$name'>
                            <lable>Phone:</lable><input type='pan' name='phone' value='$phone'>
                            <br>
                            
                            <lable>PAN:</lable><input type='pan' name='pan' value='$pan'>
                            <lable>Aadhar:</lable><input type='pan' name='aadhar' value='$aadhar'>
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
                    <input type='hidden' value='$o_stock' name='o_stock'>

                   <td></td>
                   <td></td>
                </tr>
                <tr>
                    <td>To PURCHASE</td>
                    <td><input type='number' name='purchase' value='$purchase' require>
                    <td>By Sales</td>
                    <td><input type='number' name='sale' value='$sale' require></td> 
                </tr>
                <tr>
                <td><input type='text' name='at1' value='$at1'></td>
                <td><input type='number' name='a1' value='$a1'></td>
                <td>By JOBWORK</td>
                <td><input type='number' name='job' value='$job' require>

                </tr>

                <tr>
                <td><input type='text' name='at2' value='$at2'></td>
                <td><input type='number' name='a2' value='$a2'></td>
                <td><input type='text' name='bt1' value='$bt1'></td>
                <td><input type='number' name='b1' value='$b1'></td>
                </tr>

                <tr>
                <td><input type='text' name='at3' value='$at3'></td>
                <td><input type='number' name='a3' value='$a3'></td>
                <td><input type='text' name='bt2' value='$bt2'></td>
                <td><input type='number' name='b2' value='$b2'></td>
                </tr>

                <tr>
                <td><input type='text' name='at4' value='$at4'></td>
                <td><input type='number' name='a4' value='$a4'></td>
                <td><input type='text' name='bt3' value='$bt3'></td>
                <td><input type='number' name='b3' value='$b3'></td>
                </tr>

                <tr>
                <td><input type='text' name='at5' value='$at5'></td>
                <td><input type='number' name='a5' value='$a5'></td>
                <td><input type='text' name='bt4' value='$bt4'></td>
                <td><input type='number' name='b4' value='$b4'></td>
                </tr>

                <tr>
                    <td>Less PURCHASE RETURN</td>
                    <td><input type='number' name='purchaseReturn' value='$purchasereturn' require></td>
                    <td>Less SALES RETURN</td>
                    <td><input type='number' name='saleReturn' value='$salereturn' ></td>
                </tr>
                <tr>
                    <td>Less</td>
                    <td><input type='number' name='less1' value='$less1'></td>
                    <td>Less</td>
                    <td><input type='number' name='less2' value='$less2'></td>
                </tr>
                <tr>
                    <td>Less</td>
                    <td><input type='number' name='less3' value='$less3'></td>
                    <td>Less</td>
                    <td><input type='number' name='less4' value='$less4'></td>
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
                    <td><input type='number' name='expense' value='$expense'></td>
                    <td>By INCOME</td>
                    <td><input type='number' name='income' value='$income'></td>
                </tr>

                <tr>
                <td><input type='text' name='at6' value='$at6'></td>
                <td><input type='number' name='a6' value='$a6'></td>
                <td><input type='text' name='bt5' value='$bt5'></td>
                <td><input type='number' name='b5' value='$b5'></td>
                </tr>
                <tr>
                <td><input type='text' name='at7' value='$at7'></td>
                <td><input type='number' name='a7' value='$a7'></td>
                <td><input type='text' name='bt6' value='$bt6'></td>
                <td><input type='number' name='b6' value='$b6'></td>
                </tr>
                <tr>
                <td><input type='text' name='at8' value='$at8'></td>
                <td><input type='number' name='a8' value='$a8'></td>
                <td><input type='text' name='bt7' value='$bt7'></td>
                <td><input type='number' name='b7' value='$b7'></td>
                </tr>
                <tr>
                <td><input type='text' name='at9' value='$at9'></td>
                <td><input type='number' name='a9' value='$a9'></td>
                <td><input type='text' name='bt8' value='$bt8'></td>
                <td><input type='number' name='b8' value='$b8'></td>
                </tr>
                <tr>
                <td><input type='text' name='at10' value='$at10'></td>
                <td><input type='number' name='a10' value='$a10'></td>
                <td><input type='text' name='bt9' value='$bt9'></td>
                <td><input type='number' name='b9' value='$b9'></td>
                </tr>
                <tr>
                <td><input type='text' name='at11' value='$at11'></td>
                <td><input type='number' name='a11' value='$a11'></td>
                <td><input type='text' name='bt10' value='$bt10'></td>
                <td><input type='number' name='b10' value='$b10'></td>
                </tr>
                <tr>
                <td><input type='text' name='at12' value='$at12'></td>
                <td><input type='number' name='a12' value='$a12'></td>
                <td><input type='text' name='bt11' value='$bt11'></td>
                <td><input type='number' name='b11' value='$b11'></td>
                </tr>
                <tr>
                <td><input type='text' name='at13' value='$at13'></td>
                <td><input type='number' name='a13' value='$a13'></td>
                <td><input type='text' name='bt12' value='$bt12'></td>
                <td><input type='number' name='b12' value='$b12'></td>
                </tr>
                <tr>
                <td><input type='text' name='at14' value='$at14'></td>
                <td><input type='number' name='a14' value='$a14'></td>
                <td><input type='text' name='bt13' value='$bt13'></td>
                <td><input type='number' name='b13' value='$b13'></td>
                </tr>
                <tr>
                <td><input type='text' name='at15' value='$at15'></td>
                <td><input type='number' name='a15' value='$a15'></td>
                <td><input type='text' name='bt14' value='$bt14'></td>
                <td><input type='number' name='b14' value='$b14'></td>
                </tr>
                <tr>
                <td><input type='text' name='at16' value='$at16'></td>
                <td><input type='number' name='a16' value='$a16'></td>
                <td><input type='text' name='bt15' value='$bt15'></td>
                <td><input type='number' name='b15' value='$b15'></td>
                </tr>
                <tr>
                <td><input type='text' name='at17' value='$at17'></td>
                <td><input type='number' name='a17' value='$a17'></td>
                <td><input type='text' name='bt16' value='$bt16'></td>
                <td><input type='number' name='b16' value='$b16'></td>
                </tr>
                <tr>
                <td><input type='text' name='at18' value='$at18'></td>
                <td><input type='number' name='a18' value='$a18'></td>
                <td><input type='text' name='bt17' value='$bt17'></td>
                <td><input type='number' name='b17' value='$b17'></td>
                </tr>
                <tr>
                <td><input type='text' name='at19' value='$at19'></td>
                <td><input type='number' name='a19' value='$a19'></td>
                <td><input type='text' name='bt18' value='$bt18'></td>
                <td><input type='number' name='b18' value='$b18'></td>
                </tr>
                <tr>
                <td><input type='text' name='at20' value='$at20'></td>
                <td><input type='number' name='a20' value='$a20'></td>
                <td><input type='text' name='bt19' value='$bt19'></td>
                <td><input type='number' name='b19' value='$b19'></td>
                </tr>

                <tr>
                    <td><B>GROSS PROFIT C/F<B></td>
                    <td value=''>$pnl</td>
                    <td><B> CLOSING STOCK C/F TO B.S</B></td>
                    <td><input type='number' name='c_stock' value='$c_stock'></td>
                </tr>
                
                <tr>
                <td></td>
                <td></td>
                <td><input type='text' name='bt20' value='$bt20'></td>
                <td><input type='number' name='b20' value='$b20'></td>

                </tr>
                <tr>
                <td></td>
                <td></td>
                <td><input type='text' name='bt21' value='$bt21'></td>
                <td><input type='number' name='b21' value='$b21'></td>
                </tr>
            
           
          
                <tr>
                <td><b> TOTAL</b></td>
                <td value=''>$total1</td>
                <td><b> TOTAL</b></td>
                <td value=''>$total2</td>
            </tr>   
                </tr>";
                                }
                            }

             echo "   <tr>
                    <td colspan='4'><input type='submit' name='submit2' value='submit' ></td>
                </tr>";
        
                     }
                     
