<?php
$con=mysqli_connect("localhost","root","","satya",3307);
if($con==true)
{
    echo"<br>Here's your Database Query<br>Select an option";
}
echo"<form method=get>";
echo"<select name=selopt>";
echo"<option value='' default value>Choose an Option</option>";
echo"<option value=AllRecords>AllRecords</option>";
echo"<option value='Information_Tech'>Information_Tech</option>";
echo"<option value='Finance'>Finance</option>";
echo"<option value='Accounting'>Accounting</option>";
echo"<option value='Marketing'>Marketing</option>";
echo"<option value='sales'>sales</option>";
echo"<option value='sal>=50000'>sal>=50000</option>";
echo"<option value='sal>=90000'>sal>=90000</option>";
echo"<option value='sal>=70000'>sal>=70000</option>";
echo"<option value='sal>=80000'>sal>=80000</option>";
echo"<option value='sal>=200000'>sal>=200000</option>";
echo"<option value='sal<=30000'>sal<=30000</option>";
echo"<option value=></option>";
echo"</select>";
echo"<input type=submit>";
echo"</form>";
if(isset($_GET['selopt']))
{
    $selval= $_GET['selopt'];
    if($selval =='AllRecords')
    {
       $selqry="SELECT * FROM emply1";
    }
    elseif($selval=='sales')
    {
        $selqry="SELECT * FROM emply1 where dept ='sales'";
    }
    elseif($selval=='Information_Tech')
    {
        $selqry="SELECT*FROM emply1 WHERE dept='Information_Tech' ";
    }
    elseif($selval=='Finance')
    {
        $selqry="SELECT*FROM emply1 where dept='Finance' ";
    }
    elseif($selval=='Marketing')
    {
        $selqry="SELECT*FROM emply1 where dept='Marketing' ";
    }
    elseif($selval=='Accounting')
    {
        $selqry="SELECT*FROM emply1 where dept='Accounting' ";
    }
    elseif($selval=='sal>=50000')
    {
        $selqry="SELECT*FROM emply1 where basic_sal >=50000 ";
    }
    elseif($selval=='sal>=70000')
    {
        $selqry="SELECT*FROM emply1 where basic_sal >=70000";
    }
    elseif($selval=='sal>=80000')
    {
        $selqry="SELECT*FROM emply1 where basic_sal >=80000";
    }
    elseif($selval=='sal>=90000')
    {
        $selqry="SELECT*FROM emply1 where basic_sal >=90000";
    }
    elseif($selval=='sal>=200000')
    {
        $selqry="SELECT*FROM emply1 where basic_sal >=200000";
    }
    elseif($selval=='sal<=30000')
    {
        $selqry="SELECT*FROM emply1 where basic_sal <=30000";
    }else{
        echo"Please select a Query";
    }
    $res_set=mysqli_query($con,$selqry);
    $rows=mysqli_num_rows($res_set);
    echo"<br>no of rows is ".$rows;
    echo "<table border=2>";

        echo"<tr><th>Emply_Name   ";
        echo"<th>Emply_Rejtn_num   ";
        echo"<th>Emply_Basic Salary  ";
        echo"<th>HRA Amount  ";
        echo"<th>DA Amount  ";
        echo"<th>TA Amount  ";
        echo"<th>Department ";
    while($resarr=mysqli_fetch_array($res_set,MYSQLI_ASSOC))
    {
        echo "<tr><td>".$resarr['ename']."</td>";
        echo "<td>".$resarr['erjn']."</td>";
        echo "<td>".$resarr['basic_sal']."</td>";
        echo "<td>".$resarr['hra']."</td>";
        echo "<td>".$resarr['ta']."</td>";
        echo "<td>".$resarr['da']."</td>";
        echo "<td>".$resarr['dept']."</td></tr>";
    }
    
    echo "</table>";
}

?>
