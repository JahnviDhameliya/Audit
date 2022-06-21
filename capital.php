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
$sql8="SELECT * from capital";
$result8=$conn->query($sql8);
?>

<div id="page-wrapper">
		
		
            
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line"></h1>
                <form method='POST' name='capital' action='capital.php'>
                        <table style='width:100%'>
               
<form method="POST" action="capital.php">
<?php
                if(isset($_POST['submit'])) {

                      
                    $name=$_POST['name'];
                    $year=$_POST['year'];
                    
                   
                    

                           
                    $sql2="SELECT distinct fine,due,email FROM payment WHERE month='$name'";
                    $result2=$conn->query($sql2);
                    if ($result2->num_rows > 0) {
                        while($row2 = $result2->fetch_assoc()) {
                            $pan=$row2['fine'];
                            $aadhar=$row2['email'];
                            $phone=$row2['due'];
                            
                        }}
                        
                        $y=$year+1;
                        $y2= $year .'-'. $y;
                        $customer_id = $name . '-' . $y2;

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
                        <tr>
                            <td></td>
                            <td></td>
                            <td>By Capital Balance B/F</td>
                            <td><input type='text' name='capital_balance'></td>
                            
                        </tr>
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
                    var items=0;
                    function addItem(){
                        items++;
                        var html="<tr id='items'>";
                        html +="<td><input name='particular[]' value=''></td>";
                        html +="<td><input name='amount[]' value=0></td>";
                        html +="<td><input name='right[]' value='' ></td>";
                        html +="<td><input name='value[]' value=0></td>";
                        html +="</tr>";
                
                        document.getElementById("tbody").insertRow().innerHTML=html;
                        
                    }
                
                 
                </script>
                <?php
                }

                else if(isset($_POST['submit2'])){

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
                        
    
                   $sql4="INSERT INTO capital (customer_id,year) values ('$customer_id','$year')";
                   $result4=$conn->query($sql4);

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
                  </tr>
                  ";
                  echo "<td>"."<a href='print_capital.php?&customer_id=".$customer_id. " &year=".$year."''>Print</a></td>\n";


                  echo"
                    </tbody></table>";
                }


                else{


                    echo "
                    <h1>Capital A/C</h1> <br>

                    <lable>Name:</lable><select name='name' required>";
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
               <th>PRINT</TH>
               </TR>";

               if ($result8->num_rows > 0) {
                // output data of each row
                while($row8 = $result8->fetch_assoc()) {
            
                    $client_id=$row8["customer_id"];
                    $e='-'.$row8["year"];
                    $name=str_replace($e,'',$client_id);

                echo "<tr>\n";
                    echo "<td>".$name."</td>\n";
                    echo "<td>".$row8["year"]."</td>\n";
   
                    echo "<td>"."<a href='edit_capital.php?&client_id=".$row8["customer_id"]. " &year=".$row8['year']."''>Edit</a></td>\n";
                    echo "<td>"."<a href='print_capital.php?&customer_id=".$row8["customer_id"]. " &year=".$row8['year']."''>Print</a></td>\n";

                }
            }
                }   
         
                    ?>
        