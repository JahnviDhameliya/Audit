<!DOCTYPE html>
<html>
<head>
<style>
.button {
    background-color: #0b4afd;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	margin-left:2%;
	display:block;
	float: center;


}
.btn{
	background-color: #0b4afd;
	float: right;
	color:white;
	text-decoration:none;	
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
	margin-left:0%;
	font-size:110%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.dis {
	display:none;
	
}
.searchBox{
    
    cursor: pointer;
	font-size: 85%;
	
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
<body>
<?php include 'header.php'; 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">All AUDITOR	
                        <button class="btn" align="center" style="background:linear-gradient(120deg,#191970, #900C3F ,#581845);color: white;"> 
                        <a href="addAuditor.php" class="btn" style="background:linear-gradient(120deg,#191970, #900C3F ,#581845);color: white;">Add Auditor</a>
                        </button>					</h1>
                    </div>
                </div>

    <br><br>
                <!-- /. ROW  -->

                <?php
            $agent_id = $_SESSION["username"];
            $sql = "SELECT * from nominee where client_id='$agent_id' order by name";

	        $result = $conn->query($sql);
	        $policy_id = "";
	   
	        while($row = $result->fetch_assoc()) {
		        //$images = $row["image"];
        ?>				
						
            <?php
		
		        //$policy_id = $row["policy_id"];
		        //$c_id      = $row["client_id"];
		        $agent_id  = $row["client_id"];
	        }  
    $result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>NAME</th>";
    echo "    <th>MOBILE</th>";
    echo "  </tr>";

    while($row = mysqli_fetch_array($result)){
		
		?>
        <tr>
          <td><?php echo $row['name']?></td>
          <td><?php echo $row['phone']?></td>  

        </tr>

        <?php

    }

        $conn->close();
        ?>

		
        


            
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->
  

    
	
</body>

</html>