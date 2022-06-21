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

$sql="SELECT distinct month FROM payment where materialamt!=''";
$result=$conn->query($sql);
$sql5="SELECT * FROM bs ";
$result5=$conn->query($sql5);

?>
 <!-- /. NAV SIDE  -->
 <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12">
                
                <form method='POST' name='bs' action='bs.php'>
                        <table style='width:100%'><center>
                            <h1><u>BALANCE SHEET</h1></u></center>
                            <h1 class="page-head-line"></h1>
                            <?php
                            if(isset($_POST['submit'])) {

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

                                   
                                            $query="INSERT INTO bs (customer_id,year) VALUES ('$customer_id','$y2')";
                                            $q=$conn->query($query);
                                                       
                                            
                                        
                                    
                                    
        
                                    //$customer_id = 't-' . $name . '-' . $y2;
        
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
                                    
                                    ";

                                $l1='';
                                $l2='';
                                $l3='';
                                $l4='';
                                $l5='';
                                $l6='';
                                $lv1=0;
                                $lv2=0;
                                $lv3=0;
                                $lv4=0;
                                $lv5=0;
                                $lv6=0;
                                $c1='';
                                $c2='';
                                $c3='';
                                $c4='';
                                $c5='';
                                $c6='';
                                $c7='';
                                $c8='';
                                $c10='';
                                $c9='';
                                $cv1=0;
                                $cv2=0;
                                $cv3=0;
                                $cv4=0;
                                $cv5=0;
                                $cv6=0;
                                $cv7=0;
                                $cv8=0;
                                $cv9=0;
                                $cv10=0;
                                $d1='';
                                $d2='';
                                $d3='';
                                $d4='';
                                $d5='';
                                $d6='';
                                $dv1=0;
                                $dv2=0;
                                $dv3=0;
                                $dv4=0;
                                $dv5=0;
                                $dv6=0;
                                $pt1='';
                                $pt2='';
                                $pt3='';
                                $pt4='';
                                $pt5='';
                                $pt6='';
                                $pv1=0;
                                $pv2=0;
                                $pv3=0;
                                $pv4=0;
                                $pv5=0;
                                $pv6=0;

                                $t_lv=$lv1+$lv2+$lv3+$lv4+$lv5+$lv6;
                                $t_cv=$cv1+$cv2+$cv3+$cv4+$cv5+$cv6+$cv7+$cv8+$cv9+$cv10;
                                $t_dv=$dv1+$dv2+$dv3+$dv4+$dv5+$dv6;
                                $t_pv=$pv1+$pv2+$pv3+$pv4+$pv5+$pv6;

                                $sql="SELECT * FROM depri where client_id='$customer_id'";
                                $result=$result=$conn->query($sql);
                                //echo $customer_id;
                                if ($result->num_rows > 0) {
                                    while($row= $result->fetch_assoc()) {
                                        $f1=$row['f1']; $a1=$row['a1']; $p1=$row['p1'];
                                        $f2=$row['f2']; $a2=$row['a2']; $p2=$row['p2'];
                                        $f3=$row['f3']; $a3=$row['a3']; $p3=$row['p3'];
                                        $f4=$row['f4']; $a4=$row['a4']; $p4=$row['p4'];
                                        $f5=$row['f5']; $a5=$row['a5']; $p5=$row['p5'];
                                        $f6=$row['f6']; $a6=$row['a6']; $p6=$row['p6'];
                                        $f7=$row['f7']; $a7=$row['a7']; $p7=$row['p7'];
                                        $f8=$row['f8']; $a8=$row['a8']; $p8=$row['p8'];
                                        $f9=$row['f9']; $a9=$row['a9']; $p9=$row['p9'];
                                        $f10=$row['f10']; $a10=$row['a10']; $p10=$row['p10'];
                                        $f11=$row['f11']; $a11=$row['a11']; $p11=$row['p11'];
                                        $f12=$row['f12']; $a12=$row['a12']; $p12=$row['p12'];
                                        $f13=$row['f13']; $a13=$row['a13']; $p13=$row['p13'];
                                        $f14=$row['f14']; $a14=$row['a14']; $p14=$row['p14'];
                                        $f15=$row['f15']; $a15=$row['a15']; $p15=$row['p15'];
                                        $f16=$row['f16']; $a16=$row['a16']; $p16=$row['p16'];
                                        $f17=$row['f17']; $a17=$row['a17']; $p17=$row['p17'];
                                        $f18=$row['f18']; $a18=$row['a18']; $p18=$row['p18'];
                                        $f19=$row['f19']; $a19=$row['a19']; $p19=$row['p19'];
                                        $f20=$row['f20']; $a20=$row['a20']; $p20=$row['p20'];


                            
                                    }}

                                    $v1=$a1-($a1*$p1)/100;
                                    $v2=$a2-($a2*$p2)/100;
                                    $v3=$a3-($a3*$p3)/100;
                                    $v4=$a4-($a4*$p4)/100;
                                    $v5=$a5-($a5*$p5)/100;
                                    $v6=$a6-($a6*$p6)/100;
                                    $v7=$a7-($a7*$p7)/100;
                                    $v8=$a8-($a8*$p8)/100;
                                    $v9=$a9-($a9*$p9)/100;
                                    $v10=$a10-($a10*$p10)/100;
                                    $v11=$a11-($a11*$p11)/100;
                                    $v12=$a12-($a12*$p12)/100;
                                    $v13=$a13-($a13*$p13)/100;
                                    $v14=$a14-($a14*$p14)/100;
                                    $v15=$a15-($a15*$p15)/100;
                                    $v16=$a16-($a16*$p16)/100;
                                    $v17=$a17-($a17*$p17)/100;
                                    $v18=$a18-($a18*$p18)/100;
                                    $v19=$a19-($a19*$p19)/100;
                                    $v20=$a20-($a20*$p20)/100;

                           $t_v=$v1+$v2+$v3+$v4+$v5+$v6+$v7+$v8+$v9+$v10+$v11+$v12+$v13+$v14+$v15+$v16+$v17+$v18+$v19+$v20;
                                
                           $t_i1=''; $i1=0;
                           $t_i2=''; $i2=0;
                           $t_i3=''; $i3=0;
                           $t_i4=''; $i4=0;
                           $t_i5=''; $i5=0;
                           $t_i6=''; $i6=0;
                           $t_i7=''; $i7=0;
                           $total_i=$i1+$i2+$i3+$i4+$i5+$i6+$i7;

                           //closing stock from trading
                           $q2="SELECT c_stock from trading where customer_id='$customer_id'";
                           $r2=$conn->query($q2);
                           
                           if ($r2->num_rows > 0) {
                               while($ro2 = $r2->fetch_assoc()) {
                                   $c_stock=$ro2['c_stock'];
                               }}

                           
                           $la=0;
                           $sc=0;
                           $sd=0;
                           $oth1=0;
                           $oth2=0;
                           $oth3=0;
                           $oth4=0;
                           $oth5=0;
                           $t_ca=$c_stock+$la+$sd+$sc+$oth1+$oth2+$oth3+$oth4+$oth5;

                           $bn1=0;
                           $bn2=0;
                           $bn3=0;
                           $bn4=0;
                           $bn5=0;

                           $t_bn=$bn1+$bn2+$bn3+$bn4+$bn5;
                               // capital balance from capital
                           $q3="SELECT ct from capital where customer_id='$customer_id'";
                           $r3=$conn->query($q3);
                           
                           if ($r3->num_rows > 0) {
                               while($ro3 = $r3->fetch_assoc()) {
                                   
                           $c_b=$ro3['ct'];
                               }}

                        
                           $c_h=$c_b+$t_lv+$t_cv+$t_dv+$t_pv-$t_v-$total_i-$t_ca-$t_bn;

                           $total1=$c_b+$t_lv+$t_cv+$t_dv+$t_pv;
                           $total2=$t_v+$total_i+$t_ca+$t_bn+$c_h;

                           



                            echo "<tr>
                                <th Colspan=\"2\">LIABILITIES</th>
                                <th>AMOUNT</th>
                                <th COLSPAN='2'>ASSETS</th>
                                <th>AMOUNT</th>
                            </tr>
                            <tr>
                                <th><b>Capital Balance B/F</b></th>
                                <td></td>
                                <td>$c_b</td>
                                <th><b><u>Fixed Assets:-</u></b></th>
                                <td></td>
                                <th>$t_v</t>

                            </tr>
                            <tr>
                                <td colspan='3'></td>
                                <td value=''>$f1</td>
                                <td value=''>$v1</td>
                                <td> </td>

                            </tr>                                
                            <tr>
                                <th>Loans And Liabilities</th>
                                <td></td>
                                <th value=''>$t_lv</th>
                                <td value=''>$f2</td>
                                <td value=''>$v2</td>
                                <td> </td>

                            </tr>
                            <tr>
                                <td><input type='text' name='l1' value='$l1'></td>
                                <td><input type='number' name='lv1' value='$lv1'></td>
                                <td></td>
                                <td value=''>$f3</td>
                                <td value=''>$v3</td>
                                <td> </td>

                            </tr>
                            <tr>
                                <td><input type='text' name='l2' value='$l2'></td>
                                <td><input type='number' name='lv2' value='$lv2'></td>
                                <td></td>
                                <td value=''>$f4</td>
                                <td value=''>$v4</td>
                                <td> </td>

                            </tr>
                            <tr>
                                <td><input type='text' name='l3' value='$l3'></td>
                                <td><input type='number' name='lv3' value='$lv3'></td>
                                <td></td>
                                <td value=''>$f5</td>
                                <td value=''>$v5</td>
                                <td> </td>

                            </tr>
                            <tr>
                                <td><input type='text' name='l4' value='$l4'></td>
                                <td><input type='number' name='lv4' value='$lv4'></td>
                                <td></td>
                                <td value=''>$f6</td>
                                <td value=''>$v6</td>
                                <td> </td>

                            </tr>
                            <tr>
                                <td><input type='text' name='l5' value='$l5'></td>
                                <td><input type='number' name='lv5' value='$lv5'></td>
                                <td></td>
                                <td value=''>$f7</td>
                                <td value=''>$v7</td>
                                <td> </td>

                            </tr>
                            <tr>
                                <td><input type='text' name='l6' value='$l6'></td>
                                <td><input type='number' name='lv6' value='$lv6'></td>
                                <td></td>
                                <td value=''>$f8</td>
                                <td value=''>$v8</td>
                                <td> </td>

                            </tr>
                            <tr>
                                <td></td>
                                <th value=''>$t_lv</th>
                                <td></td>
                                <td value=''>$f9</td>
                                <td value=''>$v9</td>
                                <td> </td>

                            </tr>
                            <tr>
                                <td colspan='3'></td>
                                <td value=''>$f10</td>
                                <td value=''>$v10</td>
                                <td> </td>

                            </tr>

                            <tr>
                                <th>Current Liabilities</th>
                                <td></td>
                                <th value=''>$t_cv</th>
                                <td value=''>$f11</td>
                                <td value=''>$v11</td>
                                <td> </td>

                            </tr>
                            <tr>
                                <td><input type='text' name='c1' value='$c1'></td>
                                <td><input type='number' name='cv1' value='$cv1'></td>
                                <td></td>
                                <td value=''>$f12</td>
                                <td value=''>$v12</td>
                                <td> </td>

                            </tr>
                            <tr>
                                <td><input type='text' name='c2' value='$c2'></td>
                                <td><input type='number' name='cv2' value='$cv2'></td>
                                <td></td>
                                <td value=''>$f13</td>
                                <td value=''>$v13</td>
                                <td> </td>

                            </tr>
                            <tr>
                                <td><input type='text' name='c3' value='$c3'></td>
                                <td><input type='number' name='cv3' value='$cv3'></td>
                                <td></td>
                                <td value=''>$f14</td>
                                <td value=''>$v14</td>
                                <td> </td>

                            </tr>
                            <tr>
                                <td><input type='text' name='c4' value='$c4'></td>
                                <td><input type='number' name='cv4' value='$cv4'></td>
                                <td></td>
                                <td value=''>$f15</td>
                                <td value=''>$v15</td>
                                <td> </td>

                            </tr>
                            <tr>
                                <td><input type='text' name='c5' value='$c5'></td>
                                <td><input type='number' name='cv5' value='$cv5'></td>
                                <td></td>
                                <td value=''>$f16</td>
                                <td value=''>$v16</td>
                                <td> </td>

                            </tr>
                            <tr>
                                <td><input type='text' name='c6' value='$c6'></td>
                                <td><input type='number' name='cv6' value='$cv6'></td>
                                <td></td>
                                <td value=''>$f17</td>
                                <td value=''>$v17</td>
                                <td> </td>

                            </tr>
                            <tr>
                                <td><input type='text' name='c7' value='$c7'></td>
                                <td><input type='number' name='cv7' value='$cv7'></td>
                                <td></td>
                                <td value=''>$f18</td>
                                <td value=''>$v18</td>
                                <td> </td>

                            </tr>
                            <tr>
                                <td><input type='text' name='c8' value='$c8'></td>
                                <td><input type='number' name='cv8' value='$cv8'></td>
                                <td></td>
                                <td value=''>$f19</td>
                                <td value=''>$v19</td>
                                <td> </td>

                            </tr>
                            <tr>
                                <td><input type='text' name='c9' value='$c9'></td>
                                <td><input type='number' name='cv9' value='$cv9'></td>
                                <td></td>
                                <td value=''>$f20</td>
                                <td value=''>$v20</td>
                                <td> </td>

                            </tr>
                            <tr>
                                <td><input type='text' name='c10' value='$c10'></td>
                                <td><input type='number' name='cv10' value='$cv10'></td>
                                <td></td>
                                <td value=''></td>
                                <td value=''><b>$t_v</b></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <th value=''>$t_cv</th>
                                <td></td>
                                <td value=''></td>
                                <td value=''><b></b></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td colspan='3'></td>
                                <td value=''><b><u>Investments:-</u></b></td>
                                <td value=''></td>
                                <td><b> $total_i</b></td>
                            </tr>
                            <tr>
                                <th>Duties and Taxes</th>
                                <td></td>
                                <th value=''>$t_dv</th>
                                <td ><input type='text' name='t_i1' value='$t_i1'></td>
                                <td value=''><input type='number' name='i1' value='$i1'></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td><input type='text' name='d1' value='$d1'></td>
                                <td><input type='number' name='dv1' value='$dv1'></td>
                                <td></td>
                                <td value=''><input type='text' name='t_i2' value='$t_i2'></td>
                                <td value=''><input type='number' name='i2' value='$i2'></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td><input type='text' name='d2' value='$d2'></td>
                                <td><input type='number' name='dv2' value='$dv2'></td>
                                <td></td>
                                <td value=''><input type='text' name='t_i3' value='$t_i3'></td>
                                <td value=''><input type='number' name='i3' value='$i3'></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td><input type='text' name='d3' value='$d3'></td>
                                <td><input type='number' name='dv3' value='$dv3'></td>
                                <td></td>
                                <td value=''><input type='text' name='t_i4' value='$t_i4'></td>
                                <td value=''><input type='number' name='i4' value='$i4'></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td><input type='text' name='d4' value='$d4'></td>
                                <td><input type='number' name='dv4' value='$dv4'></td>
                                <td></td>
                                <td value=''><input type='text' name='t_i5' value='$t_i5'></td>
                                <td value=''><input type='number' name='i5' value='$i5'></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td><input type='text' name='d5' value='$d5'></td>
                                <td><input type='number' name='dv5' value='$dv5'></td>
                                <td></td>
                                <td value=''><input type='text' name='t_i6' value='$t_i6'></td>
                                <td value=''><input type='number' name='i6' value='$i6'></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td><input type='text' name='d6' value='$d6'></td>
                                <td><input type='number' name='dv6' value='$dv6'></td>
                                <td></td>
                                <td value=''><input type='text' name='t_i7' value='$t_i7'></td>
                                <td value=''><input type='number' name='i7' value='$i7'></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <th value=''>$t_dv</th>
                                <td></td>
                                <td value=''></td>
                                <td>$total_i </td>
                                <td value=''></td>
                            </tr>
                            <tr>
                                <td colspan='3'></td>
                                <td value=''></td>
                                <td> </td>
                                <td value=''></td>
                            </tr>
                            <tr>
                                <th><b><u>Provision</u></b></th>
                                <td></td>
                                <th value=''>$t_pv</th>
                                <th><b><u>Current Assets</u></b></th>
                                <td></td>
                                <th value=''>$t_ca</th>
                            </tr>
                            <tr>
                                <td><input type='text' name='pt1' value='$pt1'></td>
                                <td><input type='number' name='pv1' value='$pv1'></td>
                                <td></td>
                                <td>Closing Stock</td>
                                <td>$c_stock</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td><input type='text' name='pt2' value='$pt2'></td>
                                <td><input type='number' name='pv2' value='$pv2'></td>
                                <td></td>
                                <td value=''>Loans & Advances</td>
                                <td value=''><input type='number' name='la' value='$la'></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td><input type='text' name='pt3' value='$pt3'></td>
                                <td><input type='number' name='pv3' value='$pv3'></td>
                                <td></td>
                                <td value=''>Sundry Debtors</td>
                                <td value=''><input type='number' name='sd' value='$sd'></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td><input type='text' name='pt4' value='$pt4'></td>
                                <td><input type='number' name='pv4' value='$pv4'></td>
                                <td></td>
                                <td value=''>Sundry Creditors</td>
                                <td value=''><input type='number' name='sc' value='$sc'></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td><input type='text' name='pt5' value='$pt5'></td>
                                <td><input type='number' name='pv5' value='$pv5'></td>
                                <td></td>
                                <td value=''>others</td>
                                <td value=''><input type='number' name='oth1' value='$oth1'></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td><input type='text' name='pt6' value='$pt6'></td>
                                <td><input type='number' name='pv6' value='$pv6'></td>
                                <td></td>
                                <td value=''>others</td>
                                <td value=''><input type='number' name='oth2' value='$oth2'></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <th value=''>$t_pv</th>
                                <td></td>
                                
                                <td value=''>others</td>
                                <td value=''><input type='number' name='oth3' value='$oth3'></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td colspan='3'></td>
                                <td value=''>others</td>
                                <td value=''><input type='number' name='oth4' value='$oth4'></td>
                                <td> </td>
                            </tr>

                            <tr>
                            <td colspan='3'></td>
                            <td value=''>others</td>
                            <td value=''><input type='number' name='oth5' value='$oth5'></td>
                            <td> </td>
                        </tr>

                        <tr>
                            <td colspan='4'></td>
                            <td>$t_ca</td>
                            <td></td>
                           
                        </tr>

                        <tr>
                            <td colspan='3'></td>
                            <th><u>Cash & Bank:-</u></td>
                            <td></td>
                            <th>$t_bn </th>
                        </tr>

                            <tr>
                                <td colspan='3'></td>
                                <td value=''>Bank-1</td>
                                <td><input type='number' name='bn1' value='$bn1'></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td colspan='3'></td>
                                <td value=''>Bank-2</td>
                                <td value=''><input type='number' name='bn2' value='$bn2'></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td colspan='3'></td>
                                <td value=''>Bank-3</td>
                                <td value=''><input type='number' name='bn3' value='$bn3'></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td colspan='3'></td>
                                <td value=''>Bank-4</td>
                                <td value=''><input type='number' name='bn4' value='$bn4'></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td colspan='3'></td>
                                <td value=''>Bank-5</td>
                                <td value=''><input type='number' name='bn5' value='$bn5'></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td colspan='3'></td>
                                <td value=''>Cash Hand</td>
                                <td>$c_h</td>
                                <th>$c_h </th>
                            </tr>
                            <tr>
                            <td colspan='2'>TOTAL</td>
                            <td>$total1</td>
                            <td colspan='2'>TOTAL</td>
                            <td>$total2</td>
                            </tr>
                         
                            <tr>
                                <td colspan='6'><input type='submit' name='submit2' value='submit' ></td>
                            </tr>
                            
                            ";
                            }


                
              
                    

                    //Trading account calculation
                     else if(isset($_POST['submit2'])){
                        //$customer_id=$_POST['customer_id'];
                                              
                        //$sql3="INSERT INTO calculation (customer_id,cid, building, furniture, veicle, dead,income,expense,stock,elec,pnl,profit,loss,household) VALUES('$customer_id','$o_stock', '$purchase', '$purchasereturn', '$less1', '$less2','$sale','$job','$salereturn','$c_stock','$less3','$less4','$income','$expense')";
                        //$result3=$conn->query($sql3);

                        echo "<br>";

                        $l1=$_POST['l1'];
                        $l2=$_POST['l2'];
                        $l3=$_POST['l3'];
                        $l4=$_POST['l4'];
                        $l5=$_POST['l5'];
                        $l6=$_POST['l6'];

                        $lv1=$_POST['lv1'];
                        $lv2=$_POST['lv2'];
                        $lv3=$_POST['lv3'];
                        $lv4=$_POST['lv4'];
                        $lv5=$_POST['lv5'];
                        $lv6=$_POST['lv6'];

                        $c1=$_POST['c1'];
                        $c2=$_POST['c2'];
                        $c3=$_POST['c3'];
                        $c4=$_POST['c4'];
                        $c5=$_POST['c5'];
                        $c6=$_POST['c6'];
                        $c7=$_POST['c7'];
                        $c8=$_POST['c8'];
                        $c9=$_POST['c9'];
                        $c10=$_POST['c10'];

                        $cv1=$_POST['cv1'];
                        $cv2=$_POST['cv2'];
                        $cv3=$_POST['cv3'];
                        $cv4=$_POST['cv4'];
                        $cv5=$_POST['cv5'];
                        $cv6=$_POST['cv6'];
                        $cv7=$_POST['cv7'];
                        $cv8=$_POST['cv8'];
                        $cv9=$_POST['cv9'];
                        $cv10=$_POST['cv10'];

                        $d1=$_POST['d1'];
                        $d2=$_POST['d2'];
                        $d3=$_POST['d3'];
                        $d4=$_POST['d4'];
                        $d5=$_POST['d5'];
                        $d6=$_POST['d6'];
                        $dv1=$_POST['dv1'];
                        $dv2=$_POST['dv2'];
                        $dv3=$_POST['dv3'];
                        $dv4=$_POST['dv4'];
                        $dv5=$_POST['dv5'];
                        $dv6=$_POST['dv6'];

                        $pt1=$_POST['pt1'];
                        $pt2=$_POST['pt2'];
                        $pt3=$_POST['pt3'];
                        $pt4=$_POST['pt4'];
                        $pt5=$_POST['pt5'];
                        $pt6=$_POST['pt6'];
                        $pv1=$_POST['pv1'];
                        $pv2=$_POST['pv2'];
                        $pv3=$_POST['pv3'];
                        $pv4=$_POST['pv4'];
                        $pv5=$_POST['pv5'];
                        $pv6=$_POST['pv6'];
                      
                      
                        $t_lv=$lv1+$lv2+$lv3+$lv4+$lv5+$lv6;
                        $t_cv=$cv1+$cv2+$cv3+$cv4+$cv5+$cv6+$cv7+$cv8+$cv9+$cv10;
                        $t_dv=$dv1+$dv2+$dv3+$dv4+$dv5+$dv6;
                        $t_pv=$pv1+$pv2+$pv3+$pv4+$pv5+$pv6;

                        $name=$_POST['name'];
                        $year=$_POST['year'];
                        $pan=$_POST['pan'];
                        $aadhar=$_POST['aadhar'];
                        $phone=$_POST['phone'];
                        $customer_id=$_POST['customer_id'];
                        $year=$_POST['year'];

                        $q3="SELECT ct from capital where customer_id='$customer_id'";
                           $r3=$conn->query($q3);
                           
                           if ($r3->num_rows > 0) {
                               while($ro3 = $r3->fetch_assoc()) {
                                   
                           $c_b=$ro3['ct'];
                               }}


                        
                         echo "<input type='hidden' value='$name' name='name'>
                         <input type='hidden' value='$customer_id' name='customer_id'>
                    <input type='hidden' value='$year' name='year'>
                    <input type='hidden' value='$pan' name='pan'>
                    <input type='hidden' value='$aadhar' name='aadhar'>
                    <input type='hidden' value='$phone' name='phone'>
                    <input type='hidden' value='$c_b' name='c_b'>";

                        //detail from depri for fixed assets
                        $sql="SELECT * FROM depri where client_id='$customer_id'";
                        $result=$result=$conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row= $result->fetch_assoc()) {
                                $f1=$row['f1']; $a1=$row['a1']; $p1=$row['p1'];
                                $f2=$row['f2']; $a2=$row['a2']; $p2=$row['p2'];
                                $f3=$row['f3']; $a3=$row['a3']; $p3=$row['p3'];
                                $f4=$row['f4']; $a4=$row['a4']; $p4=$row['p4'];
                                $f5=$row['f5']; $a5=$row['a5']; $p5=$row['p5'];
                                $f6=$row['f6']; $a6=$row['a6']; $p6=$row['p6'];
                                $f7=$row['f7']; $a7=$row['a7']; $p7=$row['p7'];
                                $f8=$row['f8']; $a8=$row['a8']; $p8=$row['p8'];
                                $f9=$row['f9']; $a9=$row['a9']; $p9=$row['p9'];
                                $f10=$row['f10']; $a10=$row['a10']; $p10=$row['p10'];
                                $f11=$row['f11']; $a11=$row['a11']; $p11=$row['p11'];
                                $f12=$row['f12']; $a12=$row['a12']; $p12=$row['p12'];
                                $f13=$row['f13']; $a13=$row['a13']; $p13=$row['p13'];
                                $f14=$row['f14']; $a14=$row['a14']; $p14=$row['p14'];
                                $f15=$row['f15']; $a15=$row['a15']; $p15=$row['p15'];
                                $f16=$row['f16']; $a16=$row['a16']; $p16=$row['p16'];
                                $f17=$row['f17']; $a17=$row['a17']; $p17=$row['p17'];
                                $f18=$row['f18']; $a18=$row['a18']; $p18=$row['p18'];
                                $f19=$row['f19']; $a19=$row['a19']; $p19=$row['p19'];
                                $f20=$row['f20']; $a20=$row['a20']; $p20=$row['p20'];


                    
                            }}

                                    $v1=$a1-($a1*$p1)/100;
                                    $v2=$a2-($a2*$p2)/100;
                                    $v3=$a3-($a3*$p3)/100;
                                    $v4=$a4-($a4*$p4)/100;
                                    $v5=$a5-($a5*$p5)/100;
                                    $v6=$a6-($a6*$p6)/100;
                                    $v7=$a7-($a7*$p7)/100;
                                    $v8=$a8-($a8*$p8)/100;
                                    $v9=$a9-($a9*$p9)/100;
                                    $v10=$a10-($a10*$p10)/100;
                                    $v11=$a11-($a11*$p11)/100;
                                    $v12=$a12-($a12*$p12)/100;
                                    $v13=$a13-($a13*$p13)/100;
                                    $v14=$a14-($a14*$p14)/100;
                                    $v15=$a15-($a15*$p15)/100;
                                    $v16=$a16-($a16*$p16)/100;
                                    $v17=$a17-($a17*$p17)/100;
                                    $v18=$a18-($a18*$p18)/100;
                                    $v19=$a19-($a19*$p19)/100;
                                    $v20=$a20-($a20*$p20)/100;

                   $t_v=$v1+$v2+$v3+$v4+$v5+$v6+$v7+$v8+$v9+$v10+$v11+$v12+$v13+$v14+$v15+$v16+$v17+$v18+$v19+$v20;
                        
                   //investments

                   $t_i1=$_POST['t_i1']; $i1=$_POST['i1'];
                   $t_i2=$_POST['t_i2']; $i2=$_POST['i2'];
                   $t_i3=$_POST['t_i3']; $i3=$_POST['i3'];
                   $t_i4=$_POST['t_i4']; $i4=$_POST['i4'];
                   $t_i5=$_POST['t_i5']; $i5=$_POST['i5'];
                   $t_i6=$_POST['t_i6']; $i6=$_POST['i6'];
                   $t_i7=$_POST['t_i7']; $i7=$_POST['i7'];
                   $total_i=$i1+$i2+$i3+$i4+$i5+$i6+$i7;

                   //current assets
                $q2="SELECT c_stock from trading where customer_id='$customer_id'";
                $r2=$conn->query($q2);

                if ($r2->num_rows > 0) {
                    while($ro2 = $r2->fetch_assoc()) {
                        $c_stock=$ro2['c_stock'];
                    }}

                    $q3="SELECT ct from capital where customer_id='$customer_id'";
                    $r3=$conn->query($q3);
                    
                    if ($r3->num_rows > 0) {
                        while($ro3 = $r3->fetch_assoc()) {
                            
                    $c_b=$ro3['ct'];
                        }}

                   
                   $la=$_POST['la'];
                   $sc=$_POST['sc'];
                   $sd=$_POST['sd'];
                   $oth1=$_POST['oth1'];
                   $oth2=$_POST['oth2'];
                   $oth3=$_POST['oth3'];
                   $oth4=$_POST['oth4'];
                   $oth5=$_POST['oth5'];
                   $t_ca=$c_stock+$la+$sd+$sc+$oth1+$oth2+$oth3+$oth4+$oth5;
                    // cash and bank
                   $bn1=$_POST['bn1'];
                   $bn2=$_POST['bn2'];
                   $bn3=$_POST['bn3'];
                   $bn4=$_POST['bn4'];
                   $bn5=$_POST['bn5'];

                   $t_bn=$bn1+$bn2+$bn3+$bn4+$bn5;

                
                   $c_h=$c_b+$t_lv+$t_cv+$t_dv+$t_pv-$t_v-$total_i-$t_ca-$t_bn;

                   $total1=$c_b+$t_lv+$t_cv+$t_dv+$t_pv;
                   $total2=$t_v+$total_i+$t_ca+$t_bn+$c_h;
                 $q1="UPDATE bs SET l1='$l1',l2='$l2',l3='$l3',l4='$l4',l5='$l5',l6='$l6',lv1='$lv1',lv2='$lv2',lv3='$lv3',lv4='$lv4',lv5='$lv5',lv6='$lv6',c1='$c1',c2='$c2',c3='$c3',c4='$c4',c5='$c5',c6='$c6',c7='$c7',c8='$c8',c9='$c9',c10='$c10',cv1='$cv1',cv2='$cv2',cv3='$cv3',cv4='$cv4',cv5='$cv5',cv6='$cv6',cv7='$cv7',cv8='$cv8',cv9='$cv9',cv10='$cv10',d1='$d1',d2='$d2',d3='$d3',d4='$d4',d5='$d5',d6='$d6',dv1='$dv1',dv2='$dv2',dv3='$dv3',dv4='$dv4',dv5='$dv5',dv6='$dv6',pt1='$pt1',pt2='$pt2',pt3='$pt3',pt4='$pt4',pt5='$pt5',pt6='$pt6',pv1='$pv1',pv2='$pv2',pv3='$pv3',pv4='$pv4',pv5='$pv5',pv6='$pv6',t_i1='$t_i1',t_i2='$t_i2',t_i3='$t_i3',t_i4='$t_i4',t_i5='$t_i5',t_i6='$t_i6',t_i7='$t_i7',i1='$i1',i2='$i2',i3='$i3',i4='$i4',i5='$i5',i6='$i6',i7='$i7',la='$la',sd='$sd',sc='$sc',oth1='$oth1',oth2='$oth2',oth3='$oth3',oth4='$oth4',oth5='$oth5',bn1='$bn1',bn2='$bn2',bn3='$bn3',bn4='$bn4',bn5='$bn5'  WHERE customer_id='$customer_id' ";
                
                 $r1=$conn->query($q1);


                   

                 echo "<lable>Name:</lable><input type='pan' name='pan' value='$name'>
                 <lable>Phone:</lable><input type='pan' name='phone' value='$phone'>
                 <br>
                 <lable>PAN No.:</lable><input type='pan' name='pan' value='$pan'>
                 <lable>Aadhar</lable><input type='pan' name='aadhar' value='$aadhar'>
                 
                 <br><br>
                        <tr>
                        <th Colspan=\"2\">LIABILITIES</th>
                        <th>AMOUNT</th>
                        <th COLSPAN='2'>ASSETS</th>
                        <th>AMOUNT</th>
                    </tr>
                    <tr>
                        <th><b>Capital Balance B/F</b></th>
                        <td></td>
                        <td>$c_b</td>
                        <th><b><u>Fixed Assets:-</u></b></th>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td colspan='3'></td>
                        <td value=''>$f1</td>
                        <td value=''>$v1</td>
                        <td> </td>

                    </tr>                                
                    <tr>
                        <th>Loans And Liabilities</th>
                        <td></td>
                        <th value=''>$t_lv</th>
                        <td value=''>$f2</td>
                        <td value=''>$v2</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td><input type='text' name='l1' value='$l1'></td>
                        <td><input type='number' name='lv1' value='$lv1'></td>
                        <td></td>
                        <td value=''>$f3</td>
                        <td value=''>$v3</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td><input type='text' name='l2' value='$l2'></td>
                        <td><input type='number' name='lv2' value='$lv2'></td>
                        <td></td>
                        <td value=''>$f4</td>
                        <td value=''>$v4</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td><input type='text' name='l3' value='$l3'></td>
                        <td><input type='number' name='lv3' value='$lv3'></td>
                        <td></td>
                        <td value=''>$f5</td>
                        <td value=''>$v5</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td><input type='text' name='l4' value='$l4'></td>
                        <td><input type='number' name='lv4' value='$lv4'></td>
                        <td></td>
                        <td value=''>$f6</td>
                        <td value=''>$v6</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td><input type='text' name='l5' value='$l5'></td>
                        <td><input type='number' name='lv5' value='$lv5'></td>
                        <td></td>
                        <td value=''>$f7</td>
                        <td value=''>$v7</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td><input type='text' name='l6' value='$l6'></td>
                        <td><input type='number' name='lv6' value='$lv6'></td>
                        <td></td>
                        <td value=''>$f8</td>
                        <td value=''>$v8</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td></td>
                        <th value=''>$t_lv</th>
                        <td></td>
                        <td value=''>$f9</td>
                        <td value=''>$v9</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td colspan='3'></td>
                        <td value=''>$f10</td>
                        <td value=''>$v10</td>
                        <td> </td>

                    </tr>

                    <tr>
                        <th>Current Liabilities</th>
                        <td></td>
                        <th value=''>$t_cv</th>
                        <td value=''>$f11</td>
                        <td value=''>$v11</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td><input type='text' name='c1' value='$c1'></td>
                        <td><input type='number' name='cv1' value='$cv1'></td>
                        <td></td>
                        <td value=''>$f12</td>
                        <td value=''>$v12</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td><input type='text' name='c2' value='$c2'></td>
                        <td><input type='number' name='cv2' value='$cv2'></td>
                        <td></td>
                        <td value=''>$f13</td>
                        <td value=''>$v13</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td><input type='text' name='c3' value='$c3'></td>
                        <td><input type='number' name='cv3' value='$cv3'></td>
                        <td></td>
                        <td value=''>$f14</td>
                        <td value=''>$v14</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td><input type='text' name='c4' value='$c4'></td>
                        <td><input type='number' name='cv4' value='$cv4'></td>
                        <td></td>
                        <td value=''>$f15</td>
                        <td value=''>$v15</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td><input type='text' name='c5' value='$c5'></td>
                        <td><input type='number' name='cv5' value='$cv5'></td>
                        <td></td>
                        <td value=''>$f16</td>
                        <td value=''>$v16</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td><input type='text' name='c6' value='$c6'></td>
                        <td><input type='number' name='cv6' value='$cv6'></td>
                        <td></td>
                        <td value=''>$f17</td>
                        <td value=''>$v17</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td><input type='text' name='c7' value='$c7'></td>
                        <td><input type='number' name='cv7' value='$cv7'></td>
                        <td></td>
                        <td value=''>$f18</td>
                        <td value=''>$v18</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td><input type='text' name='c8' value='$c8'></td>
                        <td><input type='number' name='cv8' value='$cv8'></td>
                        <td></td>
                        <td value=''>$f19</td>
                        <td value=''>$v19</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td><input type='text' name='c9' value='$c9'></td>
                        <td><input type='number' name='cv9' value='$cv9'></td>
                        <td></td>
                        <td value=''>$f20</td>
                        <td value=''>$v20</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td><input type='text' name='c10' value='$c10'></td>
                        <td><input type='number' name='cv10' value='$cv10'></td>
                        <td></td>
                        <td value=''></td>
                        <td value=''><b>$t_v</b></td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <th value=''>$t_cv</th>
                        <td></td>
                        <td value=''></td>
                        <td value=''><b></b></td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td colspan='3'></td>
                        <td value=''><b><u>Investments:-</u></b></td>
                        <td value=''></td>
                        <td><b> $total_i</b></td>
                    </tr>
                    <tr>
                        <th>Duties and Taxes</th>
                        <td></td>
                        <th value=''>$t_dv</th>
                        <td ><input type='text' name='t_i1' value='$t_i1'></td>
                        <td value=''><input type='number' name='i1' value='$i1'></td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td><input type='text' name='d1' value='$d1'></td>
                        <td><input type='number' name='dv1' value='$dv1'></td>
                        <td></td>
                        <td value=''><input type='text' name='t_i2' value='$t_i2'></td>
                        <td value=''><input type='number' name='i2' value='$i2'></td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td><input type='text' name='d2' value='$d2'></td>
                        <td><input type='number' name='dv2' value='$dv2'></td>
                        <td></td>
                        <td value=''><input type='text' name='t_i3' value='$t_i3'></td>
                        <td value=''><input type='number' name='i3' value='$i3'></td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td><input type='text' name='d3' value='$d3'></td>
                        <td><input type='number' name='dv3' value='$dv3'></td>
                        <td></td>
                        <td value=''><input type='text' name='t_i4' value='$t_i4'></td>
                        <td value=''><input type='number' name='i4' value='$i4'></td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td><input type='text' name='d4' value='$d4'></td>
                        <td><input type='number' name='dv4' value='$dv4'></td>
                        <td></td>
                        <td value=''><input type='text' name='t_i5' value='$t_i5'></td>
                        <td value=''><input type='number' name='i5' value='$i5'></td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td><input type='text' name='d5' value='$d5'></td>
                        <td><input type='number' name='dv5' value='$dv5'></td>
                        <td></td>
                        <td value=''><input type='text' name='t_i6' value='$t_i6'></td>
                        <td value=''><input type='number' name='i6' value='$i6'></td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td><input type='text' name='d6' value='$d6'></td>
                        <td><input type='number' name='dv6' value='$dv6'></td>
                        <td></td>
                        <td value=''><input type='text' name='t_i7' value='$t_i7'></td>
                        <td value=''><input type='number' name='i7' value='$i7'></td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <th value=''>$t_dv</th>
                        <td></td>
                        <td value=''></td>
                        <td>$total_i </td>
                        <td value=''></td>
                    </tr>
                    <tr>
                        <td colspan='3'></td>
                        <td value=''></td>
                        <td> </td>
                        <td value=''></td>
                    </tr>
                    <tr>
                        <th><b><u>Provision</u></b></th>
                        <td></td>
                        <th value=''>$t_pv</th>
                        <th><b><u>Current Assets</u></b></th>
                        <td></td>
                        <th value=''>$t_ca</th>
                    </tr>
                    <tr>
                        <td><input type='text' name='pt1' value='$pt1'></td>
                        <td><input type='number' name='pv1' value='$pv1'></td>
                        <td></td>
                        <td>Closing Stock</td>
                        <td>$c_stock</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td><input type='text' name='pt2' value='$pt2'></td>
                        <td><input type='number' name='pv2' value='$pv2'></td>
                        <td></td>
                        <td value=''>Loans & Advances</td>
                        <td value=''><input type='number' name='la' value='$la'></td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td><input type='text' name='pt3' value='$pt3'></td>
                        <td><input type='number' name='pv3' value='$pv3'></td>
                        <td></td>
                        <td value=''>Sundry Debtors</td>
                        <td value=''><input type='number' name='sd' value='$sd'></td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td><input type='text' name='pt4' value='$pt4'></td>
                        <td><input type='number' name='pv4' value='$pv4'></td>
                        <td></td>
                        <td value=''>Sundry Creditors</td>
                        <td value=''><input type='number' name='sc' value='$sc'></td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td><input type='text' name='pt5' value='$pt5'></td>
                        <td><input type='number' name='pv5' value='$pv5'></td>
                        <td></td>
                        <td value=''>others</td>
                        <td value=''><input type='number' name='oth1' value='$oth1'></td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td><input type='text' name='pt6' value='$pt6'></td>
                        <td><input type='number' name='pv6' value='$pv6'></td>
                        <td></td>
                        <td value=''>others</td>
                        <td value=''><input type='number' name='oth2' value='$oth2'></td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <th value=''>$t_pv</th>
                        <td></td>
                        
                        <td value=''>others</td>
                        <td value=''><input type='number' name='oth3' value='$oth3'></td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td colspan='3'></td>
                        <td value=''>others</td>
                        <td value=''><input type='number' name='oth4' value='$oth4'></td>
                        <td> </td>
                    </tr>

                    <tr>
                    <td colspan='3'></td>
                    <td value=''>others</td>
                    <td value=''><input type='number' name='oth5' value='$oth5'></td>
                    <td> </td>
                </tr>

                <tr>
                    <td colspan='4'></td>
                    <td>$t_ca</td>
                    <td></td>
                   
                </tr>

                <tr>
                    <td colspan='3'></td>
                    <th><u>Cash & Bank:-</u></td>
                    <td></td>
                    <th> $t_bn</th>
                </tr>

                    <tr>
                        <td colspan='3'></td>
                        <td value=''>Bank-1</td>
                        <td><input type='number' name='bn1' value='$bn1'></td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td colspan='3'></td>
                        <td value=''>Bank-2</td>
                        <td value=''><input type='number' name='bn2' value='$bn2'></td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td colspan='3'></td>
                        <td value=''>Bank-3</td>
                        <td value=''><input type='number' name='bn3' value='$bn3'></td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td colspan='3'></td>
                        <td value=''>Bank-4</td>
                        <td value=''><input type='number' name='bn4' value='$bn4'></td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td colspan='3'></td>
                        <td value=''>Bank-5</td>
                        <td value=''><input type='number' name='bn5' value='$bn5'></td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td colspan='3'></td>
                        <td value=''>Cash Hand</td>
                        <td>$c_h</td>
                        <td> </td>
                    </tr>
                    <tr>
                    <td colspan='2'>TOTAL</td>
                    <td>$total1</td>
                    <td colspan='2'>TOTAL</td>
                    <td>$total2</td>
                    </tr>
                    
                       
               ";
               echo "<tr><td>"."<a href='print_bs.php?&customer_id=".$customer_id. " &year=".$year." &name=".$name."''>Print</a></td></tr>\n";

                     } 
                     
                     //Slect user name and year
                     else{
                         echo "<lable>Name:</lable><select name='name' required>";
                         while($rows=$result->fetch_assoc()){
                            $id=$rows['month'];
                            echo"<option name='name' value='$id'>$id</option>";
                    }
                    echo"</select>
                    <lable>year:</lable><select name='year'>";
                    
                    $s_year=2017;
                    $e_year=2030;
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
                         echo "<td>"."<a href='edit_bs.php?&client_id=".$row5["customer_id"]. " &year=".$row5['year']." &name=".$name."''>Edit</a></td>\n";
                         echo "<td>"."<a href='print_bs.php?&customer_id=".$row5["customer_id"]. " &year=".$row5['year']." &name=".$name."''>Print</a></td>\n";

                     }
                 }
                     }   
                    