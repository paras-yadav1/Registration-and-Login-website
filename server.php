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
    padding: 1% 5%;;
    max-width: 40%;
    background-color: rgb(210,210,210,0.8);
}

</style>
</head>
<body>
<div><br>
<?php
// Connect to server and select database.
$con = mysqli_connect("localhost", "root", ""); 
if(!mysqli_select_db($con,'registration'))
echo "database not selected";
if(!$con)
{
    echo"not connected";
}
if (isset($_POST['reg_user'])) {
// Get values from registration form 
$name=$_POST['name'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$inst=$_POST['inst'];
$email=$_POST['email'];
$pass=$_POST['pswd'];
$mob=$_POST['mob'];
$course=$_POST['course'];
$ocourse=$_POST['ocourse'];
$stream=$_POST['stream'];
$ostream=$_POST['ostream'];
$chk=$_POST['Event'];
/*$ch="";
echo $_POST['Event'][0];
foreach($chk as $chk1){
    $ch .= $chk1.",";
}*/
if($stream=="OTHERS") $stream=$ostream;
if($course=="Other") $course=$ocourse;
$query = "SELECT * FROM users WHERE EMAIL='$email'";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) ==0 ) {

// Insert data into mysql 
$sql="INSERT INTO users(NAME,DOB,GENDER,INSTITUTE,EMAIL,PASSWORD,MOBILE,COURSE,STREAM,EVENTS)VALUES('$name', '$dob' , '$gender', '$inst','$email',SHA1('$pass'),'$mob','$course','$stream','$chk')";
if(!mysqli_query($con,$sql))
{echo "not inserted";}
else
{echo "Registration Successful!";}
}
else
echo"Email is already registered! ";


}

if (isset($_POST['login_user'])) {
        $username =$_POST['username'];
        $password = $_POST['passwd'];
            $password = SHA1($password);
            $query = "SELECT * FROM users WHERE EMAIL='$username' AND PASSWORD='$password'";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) == 1) {
                if($username=="paras.yadav.17001@iitgoa.ac.in")  header("Location: admin.php");
                else echo "WELCOME! <br>";
                $row=mysqli_fetch_assoc($result);
                echo "<br> Name: " .$row["NAME"]. "<br>Date of Birth: " .$row["DOB"]. "<br>Gender: " .$row["GENDER"]. "<br>Name of Institute: " .$row["INSTITUTE"]."<br>";
                if($row['EVENTS'] == "Drama")
                echo "<br>Registered for Event:".$row['EVENTS']."<br> Venue : GEC Old Library Hall <br> Date : 12th October 2018";
                if($row['EVENTS'] == "Music")
                echo "<br>Registered for Event:".$row['EVENTS']."<br> Venue : GEC Mining Building <br> Date : 13th October 2018";
                if($row['EVENTS'] == "Football")
                echo "<br>Registered for Event:".$row['EVENTS']."<br> Venue : Infinity Ground <br> Date : 14th October 2018";
            
                echo"<br><br> <a href='logout.php'>LOGOUT <br> </a> <br>";
            }
            else {
                $query = "SELECT * FROM users WHERE EMAIL='$username'";
                $result = mysqli_query($con, $query);
                if (mysqli_num_rows($result) == 1) echo "Wrong Password!";
                else echo "This Email is not yet registered! <br> <a href='register.php'>Register Now <br> </a>";
            }
        }
?>
</div>
</body>
</html>