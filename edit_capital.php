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
                <form method='POST' name='capital' action='edit_capital.php'>
                        <table style='width:100%'>
               
<?php
if(isset($_POST['submit2'])){

    $name=$_POST['name'];
    $year=$_POST['year'];
    $pan=$_POST['pan'];
    $aadhar=$_POST['aadhar'];
    $phone=$_POST['phone'];
    $customer_id=$_POST['customer_id'];
    $year=$_POST['year'];
    $capital_balance=$_POST['capital_balance'];
    $sql5="SELECT t3 FROM pnl where customer_id='$customer_id' and year='$year'";
    $result5=$conn->query($sql5);
    if ($result5->num_rows > 0) {
        while($row5 = $result5->fetch_assoc()) {
            $t3=$row5['t3'];
        }}

    echo "<input type='hidden' value='$name' name='name'>
    <input type='hidden' value='$year' name='year'>
    <input type='hidden' value='$pan' name='pan'>
    <input type='hidden' value='$aadhar' name='aadhar'>
    <input type='hidden' value='$phone' name='phone'>
    <input type='hidden' value='$capital_balance' name='capital_balance'>";

    echo "<lable>Name:</lable><input type='pan' name='pan' value='$name'>
    <lable>Phone:</lable><input type='pan' name='phone' value='$phone'>
    <br>
    <lable>PAN No.:</lable><input type='pan' name='pan' value='$pan'>
    <lable>Aadhar</lable><input type='pan' name='aadhar' value='$aadhar'>
    
    <br>
    <h1>Capital A/C</h1> 

    <br>
    
    <table>
            <tr>
                <th>PARTICULAR</th>
                <th>AMOUNT</th>
                <th>PARTICULAR</th>
                <th>AMOUNT</th>
            </tr>
            <tr>
            <td></td>
            <td></td>
            <td>By Capital Balance B/F</td>
            <td value=''>$capital_balance</td>
          
            <tr>
            <td></td>
            <td></td>
            <td>To Net Profit C/F</td>
            <td value=''>$t3</td>
            
        </tr>
    <tbody id='tbody'>";
        

 

   $total1=0;
   $total2=0;
   

    //for($a=0;$a<count($_POST['particular1'] || ($_POST['particular2']));$a++){
        for($a=0;$a<count($_POST['particular']);$a++){
        $particular=$_POST['particular'][$a];
        $amount=$_POST['amount'][$a];
        $right=$_POST['right'][$a];
        $value=$_POST['value'][$a];

        $w='p'.strval($a+1);
        $x='a'.strval($a+1);
        $y='r'.strval($a+1);
        $z='v'.strval($a+1);

        
        
        $total1 += $amount;
        $total2 += $value;
        
    

        $sql3="UPDATE  capital SET $w='$particular',$x='$amount',$y='$right',$z='$value',capital_balance='$capital_balance' where customer_id='$customer_id' and year='$year'";
        $result3=$conn->query($sql3);

        echo "
        <tr>
        <td name='particular' value='$particular'>$particular</td>
        <td name='amount' value='$amount'>$amount</td>
        <td name='right' value='$value'>$right</td>
        <td name='value' value='$value'>$value</td>

        </tr>";

    }
    $total2 = $total2+$capital_balance+$t3;
    $ct = $total2-$total1;
    $total1=$total1+$ct;

    $sql6="UPDATE capital set ct='$ct' where customer_id='$customer_id' and year='$year'";
    $result6=$conn->query($sql6);
    
    echo "
    <tr>
    <td> To Capital Balance C/F to B.S</td>
    <td>$ct</td>
    <td></td>
    <td></td>
    </tr>
  <tr>
  <td> TOTAL</td>
  <td>$total1</td>
  <td>TOTAL</td>
  <td>$total2</td>
  </tr>";
  echo "<td>"."<a href='print_capital.php?&customer_id=".$customer_id. " &year=".$year."''>Print</a></td>\n";

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
                            $aadhar=$row2['email'];
                            $phone=$row2['due'];
                            
                        }}
                        
                        //$y=$year+1;
                        //$y2= $year .'-'. $y;
                        //$customer_id = $name . '-' . $y2;

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
                        
                        <h1>CAPITAL A/C</h1> 
                        <br>
                        ";
?>
                        <table>
                        <tr>
                            <th>PARTICULAR</th>
                            <th>AMOUNT</th>
                            <th>PARTICULAR</th>
                            <th>AMOUNT</th>
                        </tr>
                      
                        <?php
        //retrive data from pnl table
        $sql7="SELECT * FROM capital WHERE customer_id='$customer_id'";

        $a=1;
        $result7=$conn->query($sql7);
       
    if ($result7->num_rows > 0) {
        while($row7 = $result7->fetch_assoc()) {
            $capital_balance=$row7['capital_balance'];
            $p='p'.strval($a);
            echo"
            <tr>
            <td></td><td></td><td>By Capital Balance B/F</td>
            <td><input type='number' name='capital_balance' value='$capital_balance'></td></tr>";
            
        for($a;$row7[$p]!=null;$a++){
            $p='p'.strval($a);
            $q='a'.strval($a);
            $r='r'.strval($a);
            $s='v'.strval($a);
            $particular=$row7[$p];
            $amount=$row7[$q];
            $right=$row7[$r];
            $value=$row7[$s];
          
            if($particular!=''){
            echo"
            <tr>
            
            <td><input type='text' name='particular[]' value='$particular'></td>
            <td><input type='number' name='amount[]' value='$amount'></td>
            <td><input type='text' name='right[]' value='$right'></td>
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
        html +="<td><input type='text' name='particular[] value=''></td>";
        html +="<td><input type='number' name='amount[]' value='0'></td>";
        html +="<td><input type='text' name='right[]' value=''></td>";
        html +="<td><input type='number' name='value[]' value='0'></td>";
        html +="</tr>";

        document.getElementById("tbody").insertRow().innerHTML=html;
        
    }

 
</script>
<tr>
    <?php
     }
    ?>