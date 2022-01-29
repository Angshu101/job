<?php
$con=mysqli_connect('database-1.cfrqvabfhdst.us-east-2.rds.amazonaws.com','webserver','Angshu123');
if(!$con)
{
    echo "NOT Connected";
}
if(!mysqli_select_db($con,'my_awsproj')){
    echo "DATABASE NOT CONNECTED";
}
$Full_name=$_POST['Full_name'];
$email=$_POST['email'];
$ph_num=$_POST['ph_num'];
$sc_name=$_POST['sc_name'];
$uni_name=$_POST['uni_name'];
$job_role=$_POST['job_role'];

$sql= "INSERT INTO applicants (Full_name,email,ph_num,sc_name,uni_name,job_role) VALUES ('$Full_name','$email','$ph_num','$sc_name','$uni_name','$job_role')";

if(!mysqli_query($con,$sql)){
    echo"NOT INSERTED";
}
else{
    echo "Inserted";
}

header("refresh:2; url=https://angshukiitbucket.s3.us-east-2.amazonaws.com/index.html");
?>