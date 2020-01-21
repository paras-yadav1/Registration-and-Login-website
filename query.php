<!DOCTYPE html>
<html>
<head>
<style>
body{
    text-align:center;
    background-image: url("Brick-wallaper-For-Background-38.jpg");
}
div{
    font-size: 25px;
    margin: 4% auto;
    padding:2% 2%;
    max-width: 40%;
    background-color: rgb(210,210,210,0.8);
}

</style>
</head>
<body>
<div>
<?php
// Connect to server and select database.
$con = mysqli_connect("localhost", "root", ""); 
if(!mysqli_select_db($con,'registration'))
echo "database not selected";
if(!$con)
{
    echo"not connected";
}
$gender=$_POST['gender'];
$event=$_POST['Event'];
if($gender == "any") $query = "SELECT * FROM users WHERE EVENTS='$event'";
else $query = "SELECT * FROM users WHERE GENDER='$gender' AND EVENTS='$event'";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) == 0) 
echo "no results found!";
else{
    while ($row=mysqli_fetch_array($result)) {
        echo " Name: " .$row["NAME"]. "<br>Date of Birth: " .$row["DOB"]. "<br>Gender: " .$row["GENDER"]. "<br>Name of Institute: " .$row["INSTITUTE"]. "<br> Registered for Event: " .$row["EVENTS"]."<br><br>";
        
    }
}
?>
</div>
</body>
</html>