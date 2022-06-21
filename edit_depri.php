<!DOCTYPE html>
<html>
<head>
<style>
input[type=text]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

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
    width: 200px;
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
?>

<div id="page-wrapper">
		
		
            
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line"></h1>
                <form method='POST' name='trading' action='edit_depri.php'>
                        <table style='width:100%'>
               


                <?php
                

                if(isset($_POST['submit2'])){

                    $name=$_POST['name'];
                    $year=$_POST['year'];
                    $pan=$_POST['pan'];
                    $phone=$_POST['phone'];
                    $aadhar=$_POST['aadhar'];
                    $customer_id=$_POST['customer_id'];

                    echo "<input type='hidden' value='$name' name='name'>
                    <input type='hidden' value='$year' name='year'>
                    <input type='hidden' value='$pan' name='pan'>
                    <input type='hidden' value='$aadhar' name='aadhar'>
                    <input type='hidden' value='$phone' name='phone'>";

                    echo "<lable>NAME:</lable><input type='pan' name='pan' value='$name'>
                    <lable>MOB NO.:</lable><input type='pan' name='phone' value='$phone'>
                    <br>
                    <lable>PAN NO.:</lable><input type='pan' name='pan' value='$pan'>
                    <lable>AADHAR:</lable><input type='pan' name='aadhar' value='$aadhar'>
                    
                    <br>
                    <h1>Depriciation A/C</h1> 

                    <br>
                    
                    
                    <table>
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
                   if($_POST['fixedAssets']==null){

                   }
                   else{

                    for($a=0;$a<count($_POST['fixedAssets']);$a++){
                        $fixedAssets=$_POST['fixedAssets'][$a];
                        $amount=$_POST['amount'][$a];
                        $percentage=$_POST['percentage'][$a];
                        $d_value=($percentage*$amount)/100;
                        $value=$amount-$d_value;

                        $p='f'.strval($a+1);
                        $q='a'.strval($a+1);
                        $r='p'.strval($a+1);

                        $total1 += $amount;
                        $total2 += $d_value;
                        $total3 += $value;
                        

                        $sql3="UPDATE  depri SET $p='$fixedAssets',$q='$amount',$r='$percentage',total1='$total1',total2='$total2',total3='$total3' where client_id='$customer_id' and year='$year'";
                        $result3=$conn->query($sql3);
                
                        echo "
                        <tr>
                        <td name='fixedAssets[]' value='$fixedAssets'>$fixedAssets</td>
                        <td name='amount[]' value='$amount'>$amount</td>
                        <td name='percentage[]' value='$percentage'>$percentage</td>
                        <td name='d_value[]' value='$d_value'>$d_value</td>
                        <td name='value[]' value='$value'>$value</td>
                
                        </tr>    

                        
                        ";
                        
                
                    }
                
                    }
                
                    echo "
                  <tr>
                  <td> TOTAL</td>
                  <td>$total1</td>
                  <td>TOTAL</td>
                  <td>$total2</td>
                  <td>$total3</td>
                  </tr>";
                  echo "<tr><td>"."<a href='print_depri.php?&customer_id=".$customer_id. " &year=".$year."''>Print</a></td></tr>\n";

                  echo"
                    </tbody></table>";
                }

                
else{
    $customer_id=$_REQUEST['client_id'];
                      
    $y2=$_REQUEST['year'];
    $e='-'.$y2;
    $name=str_replace($e,'',$customer_id);

    
   
    

           
    $sql2="SELECT distinct fine,due,email FROM payment WHERE month='$name'";
    $result2=$conn->query($sql2);
    if ($result2->num_rows > 0) {
        while($row2 = $result2->fetch_assoc()) {
            $pan=$row2['fine'];
            $phone=$row2['due'];
            $aadhar=$row2['email'];
            
        }}
        
        

        echo "<input type='hidden' value='$name' name='name'>
          <input type='hidden' value='$y2' name='year'>
          <input type='hidden' value='$pan' name='pan'>
          <input type='hidden' value='$phone' name='phone'>
          <input type='hidden' value='$aadhar' name='aadhar'>
          <input type='hidden' value='$customer_id' name='customer_id'>

          ";

        echo "
        <lable>NAME:</lable><input type='pan' name='pan' value='$name'>
        <lable>MOB NO.:</lable><input type='pan' name='phone' value='$phone'>
        <br>
        <lable>PAN NO.:</lable><input type='pan' name='pan' value='$pan'>
        <lable>AADHAR:</lable><input type='pan' name='aadhar' value='$aadhar'>
        
        <br>
        
        <h1>Depriciation A/C</h1> 
        <br>
        ";

        
?>
        <table>
        <tr>
            <th>FIXED ASSETS</th>
            <th>AMOUNT</th>
            <th>    %   </th>
            <th>DEPRI AMOUNT</th>
            <th>VALUE</th>
        </tr>

        <?php
        //retrive data from depri table
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

            if($fixedAssets!=''){
            echo"
            <tr>
            
            <td><input type='text' name='fixedAssets[]' value='$fixedAssets'></td>
            <td><input type='number' name='amount[]' value='$amount'></td>
            <td><input type='number' name='percentage[]' value='$percentage'></td>
            <td><input type='number' name='d_value[]' value='$d_value'></td>
            <td><input type='number' name='value[]' value='$value'></td>

            
            </tr>
            ";
            }
            echo "<input type='hidden' value='$a' name='a'> ";
            
            }
        }}
        ?>

        

        <tbody id="tbody"></tbody>
    </table>
    <p>
        <button type="button" onclick="addItem();">
            Add Item
        </button>
    </p>
    <p>
        <input type="submit" name="submit2" onclick="calculate()">
    </p>

<script>
    var items=document.getElementsByClassName('a').value;
    function addItem(){
        items++;
        var html="<tr id='items'>";
        html +="<td><input type='text' name='fixedAssets[]'</td>";
        html +="<td><input type='number' name='amount[]'</td>";
        html +="<td><input type='number' name='percentage[]' ></td>";
        html +="<td><input type='number' name='d_value[]'></td>";
        html +="<td><input type='number' name='value[]'></td>";
        html +="</tr>";

        document.getElementById("tbody").insertRow().innerHTML=html;
        
    }

 
</script>
<?php

}
               
         
                    ?>
        
   
   