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

                            

                           
                       
                        $sql2="SELECT distinct fine,due,email FROM payment WHERE month='$name'";
                        $result2=$conn->query($sql2);
                        if ($result2->num_rows > 0) {
                            while($row2 = $result2->fetch_assoc()) {
                                $pan=$row2['fine'];
                                $phone=$row2['due'];
                                $aadhar=$row2['email'];
                                
                            }}


                            $sql7="SELECT pnl FROM trading where customer_id='$customer_id' and year='$y2'";
                            $result7=$conn->query($sql7);
                            if ($result7->num_rows > 0) {
                                while($row7 = $result7->fetch_assoc()) {
                                    $pnl=$row7['pnl'];
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
                        
                        <h1>PROFIT AND LOSS A/C FOR YEAR</h1> 
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
                <td>By Gross Profit B/F</td>
                <td value=''>$pnl</td>
            </tr>
    <tbody id='tbody'>
                            ";

                            $total1=0;
                            $total2=0;
                            $sql7="SELECT * FROM pnl WHERE customer_id='$customer_id'";
                            $a=1;
                            $result7=$conn->query($sql7);
                        if ($result7->num_rows > 0) {
                            while($row7 = $result7->fetch_assoc()) {
                    
                                $p='p'.strval($a);
                    
                                
                            for($a;$row7[$p]!=null;$a++){
                                $p='p'.strval($a);
                                $q='a'.strval($a);
                                $r='r'.strval($a);
                                $s='v'.strval($a);
                                $particular=$row7[$p];
                                $amount=$row7[$q];
                                $right=$row7[$r];
                                $value=$row7[$s];

                                $total1 += $amount;
                                $total2 += $value;
                    
                                if($particular!=''){
                                echo"
                                <tr>
                                
                                <td><b>$particular</b></td>
                                <td>$amount</td>
                                <td><b>$right</b></td>
                                <td>$value</td>
                                
                                
                                </tr>
                                ";
                                }
                                
                                }
                            }}

                            $sql5="SELECT total2 FROM depri where client_id='$customer_id' and year='$y2'";
                            $result5=$conn->query($sql5);
                            if ($result5->num_rows > 0) {
                                while($row5 = $result5->fetch_assoc()) {
                                    $total_2=$row5['total2'];
                                }}
                            $total2 =$total2+$pnl;
                            $t2=$total_2+$total1;
                            $t3=$total2-$t2;
                            
                            
                            echo "
                        
                        <tr>
                            <td>To Depriciation A/C</td>
                            <td value=''>$total_2</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td value=''>$t2</td>
                            <td></td>
                            <td></td>
                        </tr>";
                        
                        
                        $total1 =$t3+$t2;
                        
                        
                        echo "
                        <tr>
                            <td>Net Profit C/F</td>
                            <td value=''>$t3</td>
                            <td></td>
                            <td></td>
                        </tr>
                        
                          <tr>
                          <td> TOTAL</td>
                          <td>$total1</td>
                          <td>TOTAL</td>
                          <td>$total2</td>
                          </tr>
                            </tbody>";
                          
        $conn->close();
        ?>



        


            
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->
  

    
	
</body>

</html>