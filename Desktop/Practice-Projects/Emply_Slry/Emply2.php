<?php
$basic_salary=$_GET['bsal'];
/*$hra=$_GET['HRA']; 
$ta=$_GET['TA']; 
$da=$_GET['DA'];*/
if($basic_salary <='50000')
{
	$hra_amount = $basic_salary *0.15 ;
	$ta_amount = $basic_salary * 0.05;
	$da_amount = $basic_salary *0.34;
}
elseif($basic_salary<=100000)
{
	$hra_amount = $basic_salary *0.25 ;
	$ta_amount = $basic_salary * 0.3;
	$da_amount = $basic_salary *0.38;
}
elseif($basic_salary<=150000)
{
	$hra_amount = $basic_salary *0.38 ;
	$ta_amount = $basic_salary * 0.5;
	$da_amount = $basic_salary *0.42;
}
elseif($basic_salary<=200000)
{
	$hra_amount = $basic_salary *0.51 ;
	$ta_amount = $basic_salary * 0.7;
	$da_amount = $basic_salary *0.55;
}
elseif($basic_salary<=250000)
{
	$hra_amount = $basic_salary *0.55 ;
	$ta_amount = $basic_salary * 0.8;
	$da_amount = $basic_salary *0.60;
}
elseif($basic_salary>=300000)
{
	$hra_amount = $basic_salary *0.60 ;
	$ta_amount = $basic_salary * 0.1;
	$da_amount = $basic_salary *0.65;
}

$gross_salary = $basic_salary + $hra_amount + $ta_amount + $da_amount;
$net_salary = $gross_salary * 0.10;
$en=$_GET['ename'];
$ern=$_GET['erjn'];
$dept=$_GET['dept'];
echo"<br>Emply_name=".$en;
echo"<br>Emply_RejstrnNum=".$ern;
echo"<br>Emply_Dept is:".$dept;
echo "<br>Employee Data:\n";
echo "<br>Basic Salary: $" . $basic_salary . "\n";
echo "<br>HRA : $" . $hra_amount . "\n";
echo "<br>TA : $" . $ta_amount . "\n";
echo "<br>DA : $" . $da_amount . "\n";
echo "<br>Gross Salary: $" . $gross_salary . "\n";
echo "<br>Net Salary : $" . $net_salary . "\n";
$con=mysqli_connect("localhost","root","","satya","port");
if($con==true)
{
	echo"<br>connected";
}
else
{
	echo"not connected";
}
$ins="insert into emply1(ename,erjn,basic_sal,hra,ta,da,gro_sal,net_sal,dept)
values('".$en."','".$ern."','".$basic_salary."','".$hra_amount."','".$ta_amount."','".$da_amount."','".$gross_salary."','".$net_salary."','".$dept."')";
if($ins==true)
{
	echo"<br>inserted";
}
mysqli_query($con,$ins);
echo"<form method=get action=Emply3.php>";
echo'<br>If you want to display DataBase Query then select "yes"';
echo"<br><input type=submit value=yes> ";
echo"</form>";
?>