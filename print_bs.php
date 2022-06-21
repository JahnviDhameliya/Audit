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
    width: 30%;
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
    width:400px;
}



input[type=submit]{
    background:linear-gradient(120deg,#191970, #900C3F ,#581845);
    color: white;
    
}

.con{
          
            border-color: black;
            border: 1px solid;
            text-align: left;
            width: 100%;
            position: relative;
        }

        .c1{
            margin-right: 50%;
            border: 1px solid;
            height: 100%;
            width: 50%;
            text-align: center;
        }
        .c2{
            margin-left: 50%;
            border: 1px solid;
            height: 100%;
            width: 50%;
            text-align: center;
        }
.detail1 {
 text-align: center; 
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
                                
                            
                            
                           
        
                            <center><h2><u>BALANCE SHEET</h2></u></center>
                            ";

                            
        $sql5="SELECT * FROM bs WHERE customer_id='$customer_id'";
        
        $result5=$conn->query($sql5);
    if ($result5->num_rows > 0) {
        while($row5 = $result5->fetch_assoc()) {

                                $l1=$row5['l1'];
                                $l2=$row5['l2'];
                                $l3=$row5['l3'];
                                $l4=$row5['l4'];
                                $l5=$row5['l5'];
                                $l6=$row5['l6'];

                                $lv1=$row5['lv1'];
                                $lv2=$row5['lv2'];
                                $lv3=$row5['lv3'];
                                $lv4=$row5['lv4'];
                                $lv5=$row5['lv5'];
                                $lv6=$row5['lv6'];
                                $c1=$row5['c1'];
                                $c2=$row5['c2'];
                                $c3=$row5['c3'];
                                $c4=$row5['c4'];
                                $c5=$row5['c5'];
                                $c6=$row5['c6'];
                                $c7=$row5['c7'];
                                $c8=$row5['c8'];
                                $c9=$row5['c9'];
                                $c10=$row5['c10'];
                                $cv1=$row5['cv1'];
                                $cv2=$row5['cv2'];
                                $cv3=$row5['cv3'];
                                $cv4=$row5['cv4'];
                                $cv5=$row5['cv5'];
                                $cv6=$row5['cv6'];
                                $cv7=$row5['cv7'];
                                $cv8=$row5['cv8'];
                                $cv9=$row5['cv9'];
                                $cv10=$row5['cv10'];
                                $d1=$row5['d1'];
                                $d2=$row5['d2'];
                                $d3=$row5['d3'];
                                $d4=$row5['d4'];
                                $d5=$row5['d5'];
                                $d6=$row5['d6'];
                                $dv1=$row5['dv1'];
                                $dv2=$row5['dv2'];
                                $dv3=$row5['dv3'];
                                $dv4=$row5['dv4'];
                                $dv5=$row5['dv5'];
                                $dv6=$row5['dv6'];
                                $pt1=$row5['pt1'];
                                $pt2=$row5['pt2'];
                                $pt3=$row5['pt3'];
                                $pt4=$row5['pt4'];
                                $pt5=$row5['pt5'];
                                $pt6=$row5['pt6'];
                                $pv1=$row5['pv1'];
                                $pv2=$row5['pv2'];
                                $pv3=$row5['pv3'];
                                $pv4=$row5['pv4'];
                                $pv5=$row5['pv5'];
                                $pv6=$row5['pv6'];

                                $t_i1=$row5['t_i1']; $iv1=(int)$row5['i1'];
                                $t_i2=$row5['t_i2']; $iv2=(int)$row5['i2'];
                                $t_i3=$row5['t_i3']; $iv3=(int)$row5['i3'];
                                $t_i4=$row5['t_i4']; $iv4=(int)$row5['i4'];
                                $t_i5=$row5['t_i5']; $iv5=(int)$row5['i5'];
                                $t_i6=$row5['t_i6']; $iv6=(int)$row5['i6'];
                                $t_i7=$row5['t_i7']; $iv7=(int)$row5['i7'];

                                $la=$row5['la'];
                                $sc=$row5['sc'];
                                $sd=$row5['sd'];
                                $oth1=$row5['oth1'];
                                $oth2=$row5['oth2'];
                                $oth3=$row5['oth3'];
                                $oth4=$row5['oth4'];
                                $oth5=$row5['oth5'];

                                $bn1=$row5['bn1'];
                                $bn2=$row5['bn2'];
                                $bn3=$row5['bn3'];
                                $bn4=$row5['bn4'];
                                $bn5=$row5['bn5'];
     

        }}
                                
                               

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
                                
                           
                           $total_i=$iv1+$iv2+$iv3+$iv4+$iv5+$iv6+$iv7;

                           //closing stock from trading
                           $q2="SELECT c_stock from trading where customer_id='$customer_id'";
                           $r2=$conn->query($q2);
                           
                           if ($r2->num_rows > 0) {
                               while($ro2 = $r2->fetch_assoc()) {
                                   $c_stock=$ro2['c_stock'];
                               }}

                           
                          
                           $t_ca=$c_stock+$la+$sd+$sc+$oth1+$oth2+$oth3+$oth4+$oth5;

                         
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

                            </tr>";


                              
                                $sql6="SELECT f1,f2,p1,p2,a1,a2 FROM depri WHERE client_id='$customer_id'";
    
        
                                $result6=$conn->query($sql6);
                            if ($result6->num_rows > 0) {
                                while($row6 = $result6->fetch_assoc()) {
                        
                                    if($row6['f1']!=null){
                                        //$v=$a1-($a1*$p1)/100;
                                        $f=$row6['f1'];
                                        $v=$row6['a1']-($row6['a1']*$row6['p1'])/100;
                                        echo" <tr>
                                        <td colspan='3'></td>
                                        <td value=''>$f</td>
                                        <td value=''>$v</td>
                                        <td> </td>
        
                                    </tr>   ";
                                    }
                                    else{
                                        echo" <tr>
                                        <td colspan='3'></td>
                                        <td value=''></td>
                                        <td value=''></td>
                                        <td> </td>
        
                                    </tr>   ";

                                    }
                                    if($row6['f2']!=null){
                                        $f=$row6['f2'];
                                        //$v=$a1-($a1*$p1)/100;
                                        $v=$row6['a2']-($row6['a2']*$row6['p2'])/100;
                                        echo" <tr>
                                        <th>Loans And Liabilities</th>
                                        <td></td>
                                        <th value=''>$t_lv</th>
                                        <td value=''>$f</td>
                                        <td value=''>$v</td>
                                        <td> </td>
        
                                    </tr>   ";
                                    }
                                    else{
                                        echo" <tr>
                                        <th>Loans And Liabilities</th>
                                        <td></td>
                                        <th value=''>$t_lv</th>
                                        <td value=''></td>
                                        <td value=''></td>
                                        <td> </td>
        
                                    </tr>   ";

                                    }
                                
                            }}


                            for($i=1;$i<7;$i++){
                                $l='l'.$i;
                                $lv='lv'.$i;
                                $j=$i+2;
                                $f='f'.$j;
                                $a='a'.$j;
                                $p='p'.$j;

                                $sql7="SELECT * FROM depri WHERE client_id='$customer_id'";
                                $result7=$conn->query($sql7);

                                $sql8="SELECT * FROM bs WHERE customer_id='$customer_id'";
                                $result8=$conn->query($sql8);
                                $row8=$result8->fetch_assoc();

                            if ($result7->num_rows > 0) {
                                while($row7 = $result7->fetch_assoc()) {
                         
                                    if($row8[$l]!=null){
                                        //$v=$a1-($a1*$p1)/100;
                                        $ft=$row7[$f];
                                        $v=$row7[$a]-($row7[$a]*$row7[$p])/100;
                                        echo"  
                                        <tr>
                                        <td type='text'  value=''>$row8[$l]</td>
                                        <td type='number'  value=''>$row8[$lv]</td>
                                        <td></td>";
                                            if($row7[$f]!=null){
                                                echo"<td value=''>$ft</td>
                                                <td value=''>$v</td>
                                                <td> </td>
                
                                            </tr> 
                                                ";
                                            }
                                            else{
                                                echo"<td value=''></td>
                                                <td value=''></td>
                                                <td> </td>
                
                                            </tr> 
                                                ";
                                            }
                                       
                                    }
                                    else{
                                        $ft=$row7[$f];
                                        $v=$row7[$a]-($row7[$a]*$row7[$p])/100;
                                        echo"  
                                        <tr>
                                        <td type='text'  value=''></td>
                                        <td type='number' value=''></td>
                                        <td></td>";
                                            if($row7[$f]!=null){
                                                echo"<td value=''>$ft</td>
                                                <td value=''>$v</td>
                                                <td> </td>
                
                                            </tr> 
                                                ";
                                            }
                                            else{
                                                echo"<td value=''></td>
                                                <td value=''></td>
                                                <td> </td>
                
                                            </tr> 
                                                ";


                                    }
                                }
                                
                            }}}

                            echo"
                            <tr>
                            <td></td>
                            <th value=''>$t_lv</th>
                            <td></td>";
                            if($f9!=null){
                            echo"
                            <td value=''>$f9</td>
                            <td value=''>$v9</td>
                            <td> </td>

                        </tr>";}
                        else{
                            echo"
                            <td value=''></td>
                            <td value=''></td>
                            <td> </td>

                        </tr>";
                        }

                        
                        echo"
                        <tr>
                        <td colspan='3'>.</td>
                        ";
                        if($f10!=null){
                        echo"
                        <td value=''>$f10</td>
                        <td value=''>$v10</td>
                        <td> </td>

                    </tr>";}
                    else{
                        echo"
                        <td value=''></td>
                        <td value=''></td>
                        <td> </td>

                    </tr>";
                    }

                    echo"
                    <tr>
                    <th>Current Liabilities</th>
                    <td></td>
                    <th value=''>$t_cv</th>
                    ";
                    if($f10!=null){
                    echo"
                    <td value=''>$f11</td>
                    <td value=''>$v11</td>
                    <td> </td>

                </tr>";}
                else{
                    echo"
                    <td value=''></td>
                    <td value=''></td>
                    <td> </td>

                </tr>";
                }


                for($i=1;$i<10;$i++){
                    $c='c'.$i;
                    $cv='cv'.$i;
                    $j=$i+10;
                    $f='f'.$j;
                    $a='a'.$j;
                    $p='p'.$j;

                    $sql7="SELECT * FROM depri WHERE client_id='$customer_id'";
                    $result7=$conn->query($sql7);

                    $sql8="SELECT * FROM bs WHERE customer_id='$customer_id'";
                    $result8=$conn->query($sql8);
                    $row8=$result8->fetch_assoc();

                if ($result7->num_rows > 0) {
                    while($row7 = $result7->fetch_assoc()) {
             
                        if($row8[$c]!=null){
                            //$v=$a1-($a1*$p1)/100;
                            $ft=$row7[$f];
                            $v=$row7[$a]-($row7[$a]*$row7[$p])/100;
                            echo"  
                            <tr>
                            <td type='text'  value=''>$row8[$c]</td>
                            <td type='number'  value=''>$row8[$cv]</td>
                            <td></td>";
                                if($row7[$f]!=null){
                                    echo"<td value=''>$ft</td>
                                    <td value=''>$v</td>
                                    <td> </td>
    
                                </tr> 
                                    ";
                                }
                                else{
                                    echo"<td value=''></td>
                                    <td value=''></td>
                                    <td> </td>
    
                                </tr> 
                                    ";
                                }
                           
                        }
                        else{
                            $ft=$row7[$f];
                            $v=$row7[$a]-($row7[$a]*$row7[$p])/100;
                            echo"  
                            <tr>
                            <td type='text'  value=''></td>
                            <td type='number' value=''></td>
                            <td></td>";
                                if($row7[$f]!=null){
                                    echo"<td value=''>$ft</td>
                                    <td value=''>$v</td>
                                    <td> </td>
    
                                </tr> 
                                    ";
                                }
                                else{
                                    echo"<td value=''></td>
                                    <td value=''></td>
                                    <td> </td>
    
                                </tr> 
                                    ";


                        }
                    }
                    
                }}}
                


               if($c10!=null){
                echo"
                <tr>
                                <td type='text' name='c10' value='$c10'>$c10</td>
                                <td type='number' name='cv10' value='$cv10'>$cv10</td>
                                <td></td>
                                <td value=''></td>
                                <td value=''><b>$t_v</b></td>
                                <td> </td>
                            </tr>
                ";
               }
               else{
                echo"
                <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td value=''></td>
                                <td value=''><b>$t_v</b></td>
                                <td> </td>
                            </tr>
                ";

               }
                
               echo"
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
               <td  type='text' name='t_i1' value='$t_i1'>$t_i1</td>
               <td  type='number' name='i1' value='$iv1'>$iv1</td>
               <td> </td>
           </tr>
               ";
        

               for($i=1;$i<7;$i++){
                $d='d'.$i;
                $dv='dv'.$i;
                $j=$i+1;
                $i_t='t_i'.$j;
                $iv='i'.$j;

                $sql8="SELECT * FROM bs WHERE customer_id='$customer_id'";
                    $result8=$conn->query($sql8);
                    $row8=$result8->fetch_assoc();

         
                    if($row8[$d]!=null){
                        //$v=$a1-($a1*$p1)/100;
                        
                        echo"  
                        <tr>
                        <td type='text' >$row8[$d]</td>
                        <td type='number' '>$row8[$dv]</td>
                        <td></td>";
                            if($row8[$i_t]!=null){
                                echo"<td value=''>$row8[$i_t]</td>
                                <td value=''>$row8[$iv]</td>
                                <td> </td>

                            </tr> 
                                ";
                            }
                            else{
                                echo"<td value=''></td>
                                <td value=''></td>
                                <td> </td>

                            </tr> 
                                ";
                            }
                       
                    }
                    else{
                       
                        echo"  
                        <tr>
                        <td type='text'  value=''></td>
                        <td type='number' value=''></td>
                        <td></td>";
                            if($row8[$i_t]!=null){
                                echo"<td value=''>$row8[$i_t]</td>
                                <td value=''>$row8[$iv]</td>
                                <td> </td>

                            </tr> 
                                ";
                            }
                            else{
                                echo"<td value=''></td>
                                <td value=''></td>
                                <td> </td>

                            </tr> 
                                ";


                    }
                }
                
            }

            echo "
            <tr>
                                <td></td>
                                <th value=''>$t_dv</th>
                                <td></td>
                                <td value=''></td>
                                <td><b>$total_i</b> </td>
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
                            </tr>";

                            if($pt1!=null){
                                echo "
                                <tr>
                                <td type='text' name='pt1' value='$pt1'>$pt1</td>
                                <td type='number' name='pv1' value='$pv1'>$pv1</td>
                                <td></td>";
                            }

                            else{
                                echo "
                                <tr>
                                <td></td>
                                <td ></td>
                                <td></td>";
                            }
                            echo"
                            
                                <td>Closing Stock</td>
                                <td>$c_stock</td>
                                <td> </td>
                            </tr>
                            ";

                            if($pt2!=null){
                                echo "
                                <tr>
                                <td type='text' name='pt2' value='$pt2'>$pt2</td>
                                <td type='number' name='pv2' value='$pv2'>$pv2</td>
                                <td></td>";
                            }

                            else{
                                echo "
                                <tr>
                                <td></td>
                                <td ></td>
                                <td></td>";
                            }
                            echo"
                            
                                <td>Loans & Advances</td>
                                <td type='number' name='la' value='$la'>$la</td>
                                <td> </td>
                            </tr>";
                            if($pt3!=null){
                                echo "
                                <tr>
                                <td type='text' name='pt2' value='$pt3'>$pt3</td>
                                <td type='number' name='pv2' value='$pv3'>$pv3</td>
                                <td></td>";
                            }

                            else{
                                echo "
                                <tr>
                                <td></td>
                                <td ></td>
                                <td></td>";
                            }
                            

                            echo"
                            
                                <td>Sundry Debtors</td>
                                <td type='number' name='sd' value='$sd'>$sd</td>
                                <td> </td>
                            </tr>";

                            if($pt4!=null){
                                echo "
                                <tr>
                                <td type='text' name='pt2' value='$pt4'>$pt4</td>
                                <td type='number' name='pv2' value='$pv4'>$pv4</td>
                                <td></td>";
                            }

                            else{
                                echo "
                                <tr>
                                <td></td>
                                <td ></td>
                                <td></td>";
                            }

                            echo"
                            
                                <td>Sundry Creditors</td>
                                <td type='number' name='sc' value='$sc'>$sc</td>
                                <td> </td>
                            </tr>";

                            if($pt5!=null){
                                echo "
                                <tr>
                                <td type='text' name='pt2' value='$pt5'>$pt5</td>
                                <td type='number' name='pv2' value='$pv5'>$pv5</td>
                                <td></td>";
                            }

                            else{
                                echo "
                                <tr>
                                <td></td>
                                <td ></td>
                                <td></td>";
                            }

                            echo"
                                <td value=''>others</td>
                                <td type='number' name='oth1' value='$oth1'>$oth1</td>
                                <td> </td>
                            </tr>";

                            if($pt6!=null){
                                echo "
                                <tr>
                                <td type='text' name='pt2' value='$pt6'>$pt6</td>
                                <td type='number' name='pv2' value='$pv6'>$pv6</td>
                                <td></td>";
                            }

                            else{
                                echo "
                                <tr>
                                <td></td>
                                <td ></td>
                                <td></td>";
                            }

                            echo"
                            
                                <td value=''>others</td>
                                <td type='number' name='oth2' value='$oth2'>$oth2</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <th value=''>$t_pv</th>
                                <td></td>
                                
                                <td value=''>others</td>
                                <td  name='oth3' value='$oth3'>$oth3</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td colspan='3'></td>
                                <td value=''>others</td>
                                <td  type='number' name='oth4' value='$oth4'>$oth4</td>
                                <td> </td>
                            </tr>

                            <tr>
                            <td colspan='3'></td>
                            <td value=''>others</td>
                            <td  type='number' name='oth5' value='$oth5'>$oth5</td>
                            <td> </td>
                        </tr>

                        <tr>
                            <td colspan='4'></td>
                            <th>$t_ca</th>
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
                                <td type='number' name='bn1' value='$bn1'>$bn1</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td colspan='3'></td>
                                <td value=''>Bank-2</td>
                                <td  type='number' name='bn2' value='$bn2'>$bn2</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td colspan='3'></td>
                                <td value=''>Bank-3</td>
                                <td  type='number' name='bn3' value='$bn3'>$bn3</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td colspan='3'></td>
                                <td value=''>Bank-4</td>
                                <td type='number' name='bn4' value='$bn4'>$bn4</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td colspan='3'></td>
                                <td value=''>Bank-5</td>
                                <td type='number' name='bn5' value='$bn5'>$bn5</td>
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
                         
            ";
        $conn->close();
        ?>



        


            
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->
  

    
	
</body>

</html>