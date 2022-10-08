<html>
<head><title>WELCOME</title>
<style>
h1{
color:green;
text-align:center;}
</style>
</head>
<body>
<h1>WELCOME</h1>
<?php
$con=mysqli_connect('localhost','root','','mydb');
#if(!$con)
#die('Error in Connection '.mysqli_error());
#else
#echo"connection established";
$sel = mysqli_select_db($con, 'mydb');
#if(!$sel)
#echo"<br> Database not selected";
#else
#echo"db selected";
if(isset($_POST['submit']) && !empty($_POST['submit'])){
#echo"<br>hello</br>";
$fn=$_POST['fname'];
$em=$_POST['email'];
$pa=$_POST['pass'];
$dob=$_POST['date'];
$gen=$_POST['gender'];
#echo "<br>$fn</br>";
$q="select current_timestamp";
$qry2="INSERT INTO mytable(fullname,email,password,dob,gender) 
VALUES('$fn','$em','$pa','$dob','$gen')"; 
    $ins = mysqli_query($con, $qry2);
    $ins1 =mysqli_query($con,$q);
    #if(!$ins)
    #    echo"<br>Login data Not inserted successfully";
    #else
    #     echo"<br>inserted</br>";
    }
    mysqli_close($con);
    ?>
</body>
</html>