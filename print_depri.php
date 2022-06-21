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
    width: 400px;
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

                     

                    echo "<div class='container'>
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
                    <h1>Depriciation A/C</h1> 

                    <br>
                    
                    
                    <table style='width:100%'>
                            <tr>
                                <th>FIXED ASSETS</th>
                                <th>AMOUNT</th>
                                <th>   %         </th>
                                <th>DEPRI AMOUNT</th>
                                <th>VALUE</th>
                            </tr>
                    <tbody id='tbody'>";
                        
                   
                   $total1=0;
                   $total2=0;
                   $total3=0;
                    
                   $sql5="SELECT * FROM depri WHERE client_id='$customer_id'";
                   $a=1;
                   $result5=$conn->query($sql5);
               if ($result5->num_rows > 0) {
                   while($row5 = $result5->fetch_assoc()) {
           
                       $p='f'.strval($a);
           
                       
                   for($a;$row5[$p]!=null;$a++){
                       $p='f'.strval($a);
                       $q='a'.strval($a);
                       $r='p'.strval($a);
                       $fixedAssets=$row5[$p];
                       $amount=$row5[$q];
                       $percentage=$row5[$r];
                       $d_value=($percentage*$amount)/100;
                       $value=$amount-$d_value;

                       $total1 += $amount;
                       $total2 += $d_value;
                       $total3 += $value;
           
                       if($fixedAssets!=''){
                       echo"
                       <tr>
                       
                       <td type='text' name='fixedAssets[]' value='$fixedAssets'>$fixedAssets</td>
                       <td type='number' name='amount[]' value='$amount'>$amount</td>
                       <td type='number' name='percentage[]' value='$percentage'>$percentage</td>
                       <td type='number' name='d_value[]' value='$d_value'>$d_value</td>
                       <td type='number' name='value[]' value='$value'>$value</td>
           
                       
                       </tr>
                       ";
                       }
                       
                       }
                   }}
                  
                
                        
                    
                    echo "
                  <tr>
                  <td> TOTAL</td>
                  <td>$total1</td>
                  <td>TOTAL</td>
                  <td>$total2</td>
                  <td>$total3</td>
                  </tr>
                  <tr>
                 
                  
       
                    </tbody></table><br>";
                
