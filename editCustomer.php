<!DOCTYPE html>

<html>
<head>
<style>
input[type=text], select {
    width: 100%;
    padding: 10px 13px;
    margin: 3px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background:linear-gradient(120deg,#191970, #900C3F ,#581845);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
button[type=cancel] {
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

.btn{
	background-color: #4CAF50;
	float: right;
	color:white;
	text-decoration:none;	
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
    <title>Edit Payment</title>

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
<body>
<?php include 'header4.php'; 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Update Customer Information  
						</h1>



                    </div>
                </div>
                
                <!-- /. ROW  -->
	
<?php 
	
include'conith.php';
	
	
	$id = "";
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		
		$recipt_no = $_GET["recipt_no"];
	}
    //$recipt_no=$_REQUEST['recipt_no'];
    //$recipt_no = $_GET["recipt_no"];
		
	
	$sql = "SELECT recipt_no,amount,month,fine,email,work,due,remark,requirements,materialdetails,materialamt from payment where recipt_no='$recipt_no'";
	$result = $conn->query($sql);
	
	echo "<div>\n";
	
	  echo '<form action="updateCustomer.php" method="post">';
	
	?>
	




	<?php
	
	
	while($row = $result->fetch_assoc()) {
		
	    
		
	   /* echo "<label for=\"fname\">Date</label>";
		echo "<input type=\"date\" recipt_no=\"fname\" name=\"action\" value=\"$row[action]\">";*/
        echo "<br/><label for=\"fname\">Receipt NO.</label>";
		echo "<input type=\"text\" recipt_no=\"fname\" name=\"recipt_no\" value=\"$row[recipt_no]\">";
		echo "<br/><label for=\"fname\">NAME</label>";
		echo "<input type=\"text\" recipt_no=\"fname\" name=\"month\" value=\"$row[month]\">";
		
		
?>
        <input style="display:none" type="text" recipt_no="fname" name="name" value="<?php echo"$row[recipt_no]"; ?>">
		<input style="display:none" type="text" recipt_no="fname" name="name" value="<?php echo"$row[month]"; ?>">
		<input style="display:none" type="text" recipt_no="fname" name="address" value="<?php echo"$row[amount]"; ?>">
		<input  style="display:none" type="text" recipt_no="fname" name="pan"  value="<?php echo"$row[fine]"; ?>">
		<input  style="display:none" type="text" recipt_no="fname" name="aadhar" value="<?php echo"$row[email]"; ?>">
		<input  style="display:none" type="text" recipt_no="fname" name="ack" value="<?php echo"$row[work]"; ?>">
		<input  style="display:none" type="text" recipt_no="fname" name="mob" value="<?php echo"$row[due]"; ?>">
		<input  style="display:none" type="text" recipt_no="fname" name="bank_name" value="<?php echo"$row[remark]"; ?>">
		<input  style="display:none" type="text" recipt_no="fname" name="bank_number" value="<?php echo"$row[requirements]"; ?>">
		<input  style="display:none" type="file" recipt_no="fname" name="ifsc" value="<?php echo"$row[materialdetails]"; ?>">
		<input  style="display:none" type="file" recipt_no="fname" name="e" value="<?php echo"$row[materialamt]"; ?>">
		
		
		<?php
		echo "<label for=\"fname\">ADDRESS</label>";
		echo "<input type=\"text\" recipt_no=\"fname\" name=\"amount\" value=\"$row[amount]\">";
        echo "<label for=\"fname\">PAN</label>";
		echo "<input type=\"text\" recipt_no=\"fname\" name=\"fine\" value=\"$row[fine]\">";
		echo "<label for=\"fname\">AADHAR</label>";
		echo "<input type=\"text\" recipt_no=\"fname\" name=\"email\" value=\"$row[email]\">";
		
		echo "<label for=\"fname\">ACKNOWLEDGEMENT</label>";
		echo "<input type=\"text\" recipt_no=\"fname\" name=\"work\" value=\"$row[work]\">";
		echo "<label for=\"fname\">MOBILE NUMBER</label>";
		echo "<input type=\"text\" recipt_no=\"fname\" name=\"due\" value=\"$row[due]\">";
		echo "<label for=\"fname\">BANK NAME</label>";
		echo "<input type=\"text\" recipt_no=\"fname\" name=\"remark\" value=\"$row[remark]\">";
		echo "<label for=\"fname\">BANK NUMBER</label>";
		echo "<input type=\"text\" recipt_no=\"fname\" name=\"requirements\" value=\"$row[requirements]\">";		
		
		
		echo "<label for=\"fname\">IFSC CODE</label>";
		echo "<input type=\"text\" recipt_no=\"fname\" name=\"materialdetails\" value=\"$row[materialdetails]\">";
		
		
		echo "<label for=\"fname\">ENCLOSER</label>";
		echo "<input type=\"text\" recipt_no=\"fname\" name=\"materialamt\" value=\"$row[materialamt]\">";
		
		

		
    
  
		
		
    }
	
	echo "<input type=\"submit\" value=\"UPDATE\">";
	//echo "<input type=\"submit\" value=\"Final\">";
	//echo"<button type=\"cancel\" >Cancel</button>";
	echo "</form>\n";
	
	echo "<a href='deleteCustomer.php?recipt_no=".$recipt_no."'>Delete Record</a>";
	
	
	
echo "</div>\n";
echo "\n";

	
?>




            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   

	
</body>
</html>
