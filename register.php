<!DOCTYPE html>
<html>

<head>
    <title>form</title>

     <script type="text/javascript">

function validate() {
    if (document.register.name.value == "") {
        alert("Please provide your Name!");
        document.register.name.focus();
        return false;
    }

    var today= new Date();
    var dt1=document.register.dob.value;
    function calcAge(birthdate, givendate){
        givendate=new Date(today);
        var birthdate= new Date (dt1);
        var years=(givendate.getFullYear() - birthdate.getFullYear());

        if(givendate.getMonth() < birthdate.getMonth() || givendate.getMonth() == birthdate.getMonth() && givendate.getDate() < birthdate.getDate())
        { years--; }
        return years;
    }
    if(dt1==""){
        alert("Please enter date of birth");
        document.register.dob.focus();
        return false;   
    }
    var age= calcAge();
    if(age<18 ){
        alert("You must be atlest 18 years old");
        document.register.dob.focus();
        return false;
    }

    if (document.register.inst.value == "") {
        alert("Please provide your Institute name!");
        document.register.inst.focus();
        return false;
    }
    if (document.register.email.value == "") {
        alert("Please provide your email!");
        document.register.email.focus();
        return false;
    }
    if (document.register.pswd.value == "") {
        alert("Please create a password!");
        document.register.pswd.focus();
        return false;
    }
    if (document.register.mob.value == "" ||
        isNaN(document.register.mob.value) ||
        document.register.mob.value.length != 10) {
        alert("Please provide a valid mobile number");
        document.register.mob.focus();
        return false;
    }
    if(document.register.course.value == "Other" && document.register.ocourse.value == ""){
        alert("Please fill out your Course Name");
        document.register.ocourse.focus();
        return false;
    }
    if(document.register.course.value != "Other" && document.register.ocourse.value != ""){
        alert("Please leave the Others field empty");
        document.register.ocourse.focus();
        return false;
    }
    if(document.register.stream.value == "Other" && document.register.ostream.value == ""){
        alert("Please fill out your Stream");
        document.register.ostream.focus();
        return false;
    }
    if(document.register.stream.value != "OTHERS" && document.register.ostream.value != ""){
        alert("Please leave the Others field empty");
        document.register.ostream.focus();
        return false;
    }
    return true;

}
</script>

<link rel="stylesheet" type="text/css" href="mystyle.css">

</head>

<body>
<div>
        <center>
            <h1>REGISTRATION FORM</h1>
        </center>
    </div>
    <fieldset>
            <form name="register" method="POST" onsubmit="return(validate())" action="server.php">
                <table>
                    <div>
                        <tr>
                            <td> Name
                                 :</td>
                            <td>
                                <input type="text" name="name" id="name" placeholder="Jon Doe">
                            </td>
                        </tr>
                        <tr>
                            <td> Date of Birth :</td>
                            <td>
                                <input type="date" name="dob" id="dob">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Gender :
                            </td>
                            <td>
                                <input type="radio" name="gender" id="gender" value="male" checked >Male
                                <input type="radio" name="gender" id="gender" value="female">Female
                            </td>
                        </tr>

                        <tr>
                            <td> Name of Institution
                                 :</td>
                            <td>
                                <input type="text" name="inst" id="inst" placeholder="institute..." />
                            </td>
                        </tr>
                        <tr>
                            <td>Email
                                 :</td>
                            <td>
                                <input type="email" name="email" id="email" placeholder="email..." />
                            </td>
                        </tr>
                        <tr>
                            <td>Password :</td>
                            <td><input type="password" name="pswd" id="pswd" placeholder="password..." /></td>

                        <tr>
                            <td> Mobile No.
                                 :</td>
                            <td>
                                <input type="number" name="mob" id="mob" placeholder="mobile no." >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Course :
                            </td>
                            <td>
                                <select name="course" id="course">
                                    <option value="Engineering" selected>Engineering</option>
                                    <option value="Science">Science</option>
                                    <option value="Arts">Arts</option>
                                    <option value="Commerce">Commerce</option>
                                    <option value="Management">Management</option>
                                    <option value="Other">Other</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>If Others, specify :</td>
                            <td><input type="text" name="ocourse" id="ocourse" placeholder="course name"></td>
                        </tr>

                        <tr>
                            <td>
                                Stream :
                            </td>
                            <td>
                                <select name="stream" id="stream">
                                    <option value="BE/BTECH" selected>BE/BTECH</option>
                                    <option value="BSC">BSC</option>
                                    <option value="BA">BA</option>
                                    <option value="BBA">BBA</option>
                                    <option value="BCOM">BCOM</option>
                                    <option value="BCA">BCA</option>
                                    <option value="DIPLOMA">DIPLOMA</option>
                                    <option value="OTHERS">OTHERS</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>If Others, specify :</td>
                            <td><input type="text" name="ostream" id="ostream" placeholder="stream"></td>
                        </tr>
                        <tr>
                            <td>Events :</td>
                            <td>
                                <input type="radio" name="Event" value="Drama" checked>Drama
                                <input type="radio" name="Event" value="Music">Music
                                <input type="radio" name="Event" value="Football">Football

                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp</td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td>
                                <button type="submit" name="reg_user"> Register </button>
                            </td>
                        </tr>

                    </div>
                </table>
          

                <br />
            </form>
        </fieldset>
    </div>
</body>

</html>