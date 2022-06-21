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
                <form method='POST' name='trading' action='trading.php'>
                        <table style='width:100%'>
                <?php
                //Trading detail
                     if(isset($_POST['submit'])) {

                    
                        $purchase=0;
                        $purchasereturn=0;
                        $less1=0;
                        $less2=0;
                        $sale=0;
                        $job=0;
                        $salereturn=0;
                        $c_stock=0;
                        $less3=0;
                        $less4=0;
                        $income=0;
                        $expense=0;
                        $t_purchase=0;
                        $t_sale=0;
                        $g_total1=0;
                        $g_total2=0;
                        $pnl=$g_total1-$g_total2;
                        $total1=$g_total1-$pnl;
                        $total2=$g_total2;
                        $a1=0; $b1=0;
                        $a2=0; $b2=0;
                        $a3=0; $b3=0;
                        $a4=0; $b4=0;
                        $a5=0; $b5=0;
                        $a6=0; $b6=0;
                        $a7=0; $b7=0;
                        $a8=0; $b8=0;
                        $a9=0; $b9=0;
                        $a10=0; $b10=0;
                        $a11=0; $b11=0;
                        $a12=0; $b12=0;
                        $a13=0; $b13=0;
                        $a14=0; $b14=0;
                        $a15=0; $b15=0;
                        $a16=0; $b16=0;
                        $a17=0; $b17=0;
                        $a18=0; $b18=0;
                        $a19=0; $b19=0;
                        $a20=0; $b20=0;
                        $b21=0;

                        $at1=''; $bt1='';
                        $at2=''; $bt2='';
                        $at3=''; $bt3='';
                        $at4=''; $bt4='';
                        $at5=''; $bt5='';
                        $at6=''; $bt6='';
                        $at7=''; $bt7='';
                        $at8=''; $bt8='';
                        $at9=''; $bt9='';
                        $at10=''; $bt10='';
                        $at11=''; $bt11='';
                        $at12=''; $bt12='';
                        $at13=''; $bt13='';
                        $at14=''; $bt14='';
                        $at15=''; $bt15='';
                        $at16=''; $bt16='';
                        $at17=''; $bt17='';
                        $at18=''; $bt18='';
                        $at19=''; $bt19='';
                        $at20=''; $bt20='';
                        $bt21='';


                      


                        
                        $name=$_POST['name'];
                        $year=$_POST['year'];
                        
                       
                        

                               
                        $sql2="SELECT distinct fine,due,email FROM payment WHERE month='$name'";
                        $result2=$conn->query($sql2);
                        if ($result2->num_rows > 0) {
                            while($row2 = $result2->fetch_assoc()) {
                                $pan=$row2['fine'];
                                $phone=$row2['due'];
                                $aadhar=$row2['email'];

                                
                            }}
                            
                            $y=$year+1;
                            $y2= $year .'-'. $y;
                            $customer_id = $name . '-' . $y2;
                            $y3=$y-2;
                            
                            $p_year=$y3.'-'.$year;
                            $p_cid=$name.'-'.$p_year;

                            //echo $p_year;

                            $q3="SELECT c_stock FROM trading WHERE customer_id='$p_cid'";
                            $r3=$conn->query($q3);

                            if ($r3->num_rows > 0) {
                                while($row3 = $r3->fetch_assoc()) {
                                    $o_stock=$row3['c_stock'];
                                }}
                            else{
                                $o_stock=0;
                                
                            }
                            
                            
                            $q2="SELECT customer_id FROM trading";
                            $r2=$conn->query($q2);

                            if ($r2->num_rows > 0) {
                                while($ro2 = $r2->fetch_assoc()) {
                                    $c_id=$ro2['customer_id'];
                                }}

                                          

                            
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
                    <td colspan='4'><input type='submit' name='submit2' value='submit' ></td>
                </tr>";
        
                     }

                    //Trading account calculation
                     else if(isset($_POST['submit2'])){


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
                   

                    
                     

                      
                        echo "<br>";

                        $name=$_POST['name'];
                        $year=$_POST['year'];
                        $pan=$_POST['pan'];
                        $phone=$_POST['phone'];
                        $aadhar=$_POST['aadhar'];

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
                                    
                                    ";

                        $query="INSERT INTO trading (customer_id,year) VALUES ('$customer_id','$year')";
                        $q=$conn->query($query);
                              
                          
  
                      $q1="UPDATE trading SET o_stock='$o_stock',purchase='$purchase',purchasereturn='$purchasereturn',less1='$less1',less2='$less2',sale='$sale',job='$job',salereturn='$salereturn',c_stock='$c_stock',less3='$less3',less4='$less4',income='$income',expense='$expense',t_purchase='$t_purchase',t_sale='$t_sale',pnl='$pnl',total1='$total1',total2='$total2',a1='$a1',a2='$a2',a3='$a3',a4='$a4',a5='$a5',a6='$a6',a7='$a7',a8='$a8',a9='$a9',a10='$a10',a11='$a11',a12='$a12',a13='$a13',a14='$a14',a15='$a15',a16='$a16',a17='$a17',a18='$a18',a19='$a19',a20='$a20',a1='$at1',at2='$at2',at3='$at3',at4='$at4',at5='$at5',at6='$at6',at7='$at7',at8='$at8',at9='$at9',at10='$at10',at11='$at11',at12='$at12',at13='$at13',at14='$at14',at15='$at15',at16='$at16',at17='$at17',at18='$at18',at19='$at19',at20='$at20',b1='$b1',b2='$b2',b3='$b3',b4='$b4',b5='$b5',b6='$b6',b7='$b7',b8='$b8',b9='$b9',b10='$b10',b11='$b11',b12='$b12',b13='$b13',b14='$b14',b15='$b15',b16='$b16',b17='$b17',b18='$b18',b19='$b19',b20='$b20',b1='$bt1',bt2='$bt2',bt3='$bt3',bt4='$bt4',bt5='$bt5',bt6='$bt6',bt7='$bt7',bt8='$bt8',bt9='$bt9',bt10='$bt10',bt11='$bt11',bt12='$bt12',bt13='$bt13',bt14='$bt14',bt15='$bt15',bt16='$bt16',bt17='$bt17',bt18='$bt18',bt19='$bt19',bt20='$bt20' WHERE customer_id='$customer_id'";
                      $r1=$conn->query($q1);
                      

                        echo "
                        
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
                     
                     //Slect user name and year
                     else{
                         echo "
                         <br>
                            <h1><u>Trading A/C for Year Ending</u></h1>
                            <br>
                            
                         
                         <lable>Name:</lable><select name='name' required>";
                         while($rows=$result->fetch_assoc()){
                            $id=$rows['month'];
                            echo"<option name='name' value='$id'>$id</option>";
                    }
                    echo"</select>
                    <lable>year:</lable><select name='year'>";
                    
                    $s_year=2017;
                    $e_year=2031;
                    $user_selected_y=date('Y');
                    for($i_year=$e_year;$i_year>=$s_year;$i_year--){

                        $selected=($user_selected_y==$i_year?'selected':'');
                        $ii=$i_year+1;
                        echo '<option value="'.$i_year.'"'.$selected.'>'.$i_year.'-'.$ii.'</option>';
                    }
                    echo " </select>
                    <br>
                    <input type='submit' name='submit' value='submit' >
                    <br><br>
                    <table>
               <tr>
               <th>NAME</th>
               <th>YEAR</TH>
               <TH>EDIT</TH>
               <TH>PRINT</TH></TR>";

               if ($result5->num_rows > 0) {
                // output data of each row
                while($row5 = $result5->fetch_assoc()) {
            
                    $client_id=$row5["customer_id"];
                    $e='-'.$row5["year"];
                    $name=str_replace($e,'',$client_id);

                echo "<tr>\n";
                    echo "<td>".$name."</td>\n";
                    echo "<td>".$row5["year"]."</td>\n";
                    echo "<td>"."<a href='edit_trading.php?&customer_id=".$row5["customer_id"]. " &year=".$row5['year']."''>Edit</a></td>\n";
                    echo "<td>"."<a href='print_trading.php?&customer_id=".$row5["customer_id"]. " &year=".$row5['year']."''>Print</a></td>\n";

                }
            }

                     }