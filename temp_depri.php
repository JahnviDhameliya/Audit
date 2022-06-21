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

    <script>
        var fixedAssets=0;

        function addItem(){
            fixedAssets++;
            var html="<tr>";

            html +="<td><input name='fixedAssetes[]'</td>";
            html +="<td><input name='amount[]'</td>";
            html +="<td><input name='percentage[]'</td>";
            html +="<td><input name='depriAmount[]'</td>";
            html +="<td><input name='value[]'</td>";
            html +="</tr>";

            document.getElementByID("tbody").insertRow().innerHTML=html;


        }
    </script>
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
 <!-- /. NAV SIDE  -->
 <div id="page-wrapper">
		
		
            
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line"></h1>
                <form method='POST' name='trading' action='depri.php'>
                        <table style='width:100%'>
                        <h1>Depriciation A/C</h1> 
                <?php
                //Trading detail
                     if(isset($_POST['submit'])) {

                        $build=0;
                        $furn=0;
                        $vehi=0;
                        $elec=0;
                        $dead=0;
                        $p1=0;
                        $p2=0;
                        $p3=0;
                        $p4=0;
                        $p5=0;



                        if($build!=0){
                            $build_depri=(int)(($p1*100)/$build);
                            $build_value=(int)($build-$build_depri);
                        }
                        else
                        {
                            $build_depri=0;
                            $build_value=0;
                        }
                        if($furn!=0){
                            $furn_depri=(int)(($p2*100)/$furn);
                            $furn_value=(int)($furn-$furn_depri);
                        }
                        else
                        {
                            $furn_depri=0;
                            $furn_value=0;
                        }
                        if($vehi!=0){
                            $vehi_depri=(int)(($p3*100)/$vehi);
                            $vehi_value=(int)($vehi-$vehi_depri);
                        }
                        else
                        {
                            $vehi_depri=0;
                            $vehi_value=0;
                        }
                        
                        if($elec!=0){
                            $elec_depri=(int)(($p4*100)/$elec);
                            $elec_value=(int)($elec-$elec_depri);
                        }
                        else
                        {
                            $elec_depri=0;
                            $elec_value=0;
                        }
                        if($dead!=0){
                            $dead_depri=(int)(($p5*100)/$dead);
                            $dead_value=(int)($dead-$dead_depri);
                        }
                        else
                        {
                            $dead_depri=0;
                            $dead_value=0;
                        }

                        
                        $t1=0;
                        $t2=0; 
                        $t3=0;
                        $name=$_POST['name'];
                        $year=$_POST['year'];

                        

                               
                        $sql2="SELECT distinct fine,due FROM payment WHERE month='$name'";
                        $result2=$conn->query($sql2);
                        if ($result2->num_rows > 0) {
                            while($row2 = $result2->fetch_assoc()) {
                                $pan=$row2['fine'];
                                $phone=$row2['due'];
                                
                            }}
                            $y=$year+1;
                            $y2= $year .'-'. $y;

                            echo "<input type='hidden' value='$name' name='name'>
                              <input type='hidden' value='$y2' name='year'>
                              <input type='hidden' value='$pan' name='pan'>
                              <input type='hidden' value='$phone' name='phone'>

                              ";

                            echo "
                            <lable>Name:</lable><input type='pan' name='pan' value='$name'>
                            <lable>year:</lable><input type='pan' name='pan' value='$y2'>
                            <br>
                            <lable>PAN:</lable><input type='pan' name='pan' value='$pan'>
                            <lable>Phone:</lable><input type='pan' name='phone' value='$phone'>
                            
                            <br><br>
                            <tr>
                                <th>Fixed Assets</th>
                                <th>Amount</th>
                                <th>Percentage %</th>
                                <th>Depri Amount</th>
                                <th>Value</th>
                            </tr>
                            <tbody id=\"tbody\">
                            <tr>
                            <td>Building</td>
                            <td><input type='number' name='build' value='$build' ></td>
                            <td><input type='number' name='p1' value='$p1' ></td>
                            <td value=''>$build_depri</td>
                            <td value=''>$build_value</td>
                        </tr>
                        <tr>
                            <td>Furniture</td>
                            <td><input type='number' name='furn' value='$furn' ></td>
                            <td><input type='number' name='p2' value='$p2' ></td>
                            <td value=''>$furn_depri</td>
                            <td value=''>$furn_value</td>
                        </tr>
                        <tr>
                            <td>Vehicals</td>
                            <td><input type='number' name='vehi' value='$vehi' ></td>
                            <td><input type='number' name='p3' value='$p3' ></td>
                            <td value=''>$vehi_depri</td>
                            <td value=''>$vehi_value</td>
                        </tr>
                        <tr>
                            <td>Electric Fitting</td>
                            <td><input type='number' name='elec' value='$elec' ></td>
                            <td><input type='number' name='p4' value='$p4' ></td>
                            <td value=''>$elec_depri</td>
                            <td value=''>$elec_value</td>
                        </tr>
                        <tr>
                            <td>Dead Stock</td>
                            <td><input type='number' name='dead' value='$dead' ></td>
                            <td><input type='number' name='p5' value='$p5' ></td>
                            <td value=''>$dead_depri</td>
                            <td value=''>$dead_value</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td value=''>$t1</td>
                            <td>Total</td>
                            <td value=''>$t2</td>
                            <td value=''>$t3</td>
                        </tr>  
                        </tbody>      
                        <tr>
                            <td><button type=\"button\" onclick=\"addItem()\;\">
                                    Add Fixed Asset
                                </button>
                            </td>
                        </tr>             
                        <tr>
                            <td colspan='5'><input type='submit' name='submit2' value='submit' ></td>
                        </tr></table>";
                     }

                    //Trading account calculation
                     else if(isset($_POST['submit2'])){
                        $build=(int)$_POST['build'];
                        $furn=(int)$_POST['furn'];
                        $vehi=(int)$_POST['vehi'];
                        $elec=(int)$_POST['elec'];
                        $dead=(int)$_POST['dead'];
                        $p1=(int)$_POST['p1'];
                        $p2=(int)$_POST['p2'];
                        $p3=(int)$_POST['p3'];
                        $p4=(int)$_POST['p4'];
                        $p5=(int)$_POST['p5'];

                        if($build!=0){
                            $build_depri=(int)(($p1*100)/$build);
                            $build_value=(int)($build-$build_depri);
                        }
                        else
                        {
                            $build_depri=0;
                            $build_value=0;
                        }
                        if($furn!=0){
                            $furn_depri=(int)(($p2*100)/$furn);
                            $furn_value=(int)($furn-$furn_depri);
                        }
                        else
                        {
                            $furn_depri=0;
                            $furn_value=0;
                        }
                        if($vehi!=0){
                            $vehi_depri=(int)(($p3*100)/$vehi);
                            $vehi_value=(int)($vehi-$vehi_depri);
                        }
                        else
                        {
                            $vehi_depri=0;
                            $vehi_value=0;
                        }
                        
                        if($elec!=0){
                            $elec_depri=(int)(($p4*100)/$elec);
                            $elec_value=(int)($elec-$elec_depri);
                        }
                        else
                        {
                            $elec_depri=0;
                            $elec_value=0;
                        }
                        if($dead!=0){
                            $dead_depri=(int)(($p5*100)/$dead);
                            $dead_value=(int)($dead-$dead_depri);
                        }
                        else
                        {
                            $dead_depri=0;
                            $dead_value=0;
                        }

                        

                         $t1=$build+$furn+$vehi+$elec+$dead;
                         $t2=$build_depri+$furn_depri+$vehi_depri+$elec_depri+$dead_depri;
                         $t3=$build_value+$furn_value+$vehi_value+$elec_value+$dead_value;

                         $name=$_POST['name'];
                         $year=$_POST['year'];
                         $pan=$_POST['pan'];
                         $phone=$_POST['phone'];
 
                         echo "<input type='hidden' value='$name' name='name'>
                         <input type='hidden' value='$year' name='year'>
                         <input type='hidden' value='$pan' name='pan'>
                         <input type='hidden' value='$phone' name='phone'>";

                         echo "<lable>Name:</lable><input type='pan' name='pan' value='$name'>
                         <lable>year:</lable><input type='pan' name='pan' value='$year'>
                         <br>
                         <lable>PAN:</lable><input type='pan' name='pan' value='$pan'>
                         <lable>Phone:</lable><input type='pan' name='phone' value='$phone'>
                         
                         <br><br>
                         
                         <tr>
                                <th>Fixed Assets</th>
                                <th>Amount</th>
                                <th>Percentage %</th>
                                <th>Depri Amount</th>
                                <th>Value</th>
                            </tr><tr>
                            <td>Building</td>
                            <td><input type='number' name='build' value='$build' ></td>
                            <td><input type='number' name='p1' value='$p1' ></td>
                            <td value=''>$build_depri</td>
                            <td value=''>$build_value</td>
                        </tr>
                        <tr>
                            <td>Furniture</td>
                            <td><input type='number' name='furn' value='$furn' ></td>
                            <td><input type='number' name='p2' value='$p2' ></td>
                            <td value=''>$furn_depri</td>
                            <td value=''>$furn_value</td>
                        </tr>
                        <tr>
                            <td>Vehicals</td>
                            <td><input type='number' name='vehi' value='$vehi' ></td>
                            <td><input type='number' name='p3' value='$p3' ></td>
                            <td value=''>$vehi_depri</td>
                            <td value=''>$vehi_value</td>
                        </tr>
                        <tr>
                            <td>Electric Fitting</td>
                            <td><input type='number' name='elec' value='$elec' ></td>
                            <td><input type='number' name='p4' value='$p4' ></td>
                            <td value=''>$elec_depri</td>
                            <td value=''>$elec_value</td>
                        </tr>
                        <tr>
                            <td>Dead Stock</td>
                            <td><input type='number' name='dead' value='$dead' ></td>
                            <td><input type='number' name='p5' value='$p5' ></td>
                            <td value=''>$dead_depri</td>
                            <td value=''>$dead_value</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td value=''>$t1</td>
                            <td>Total</td>
                            <td value=''>$t2</td>
                            <td value=''>$t3</td>
                        </tr>                     
                        <tr>
                            <td colspan='5'><input type='submit' name='submit2' value='submit' ></td>
                        </tr>
                       ";
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
                    
                    $s_year=1900;
                    $e_year=date('Y');
                    $user_selected_y=2000;
                    for($i_year=$e_year;$i_year>=$s_year;$i_year--){

                        $selected=($user_selected_y==$i_year?'selected':'');
                        $ii=$i_year+1;
                        echo '<option value="'.$i_year.'"'.$selected.'>'.$i_year.'-'.$ii.'</option>';
                    }
                    echo " </select>
                    <br>
                    <input type='submit' name='submit' value='submit' >
                    <br><br>";
                     }   