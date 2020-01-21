<!DOCTYPE html>
<html>

<head>
    <title>form</title>
    <style>
body {
  background-image: url("Brick-wallaper-For-Background-38.jpg");
  font-size : 18px;

}

.login {
  margin: 20px auto;
  width: 400px;
  padding: 30px 25px;
  background: white;
  border: 1px solid #c4c4c4;
}

h1.login-title {
  margin: -28px -25px 25px;
  padding: 15px 25px;
  line-height: 30px;
  font-size: 25px;
  font-weight: 300;
  color: white;
  text-align:center;
  background:#737f8c ;
 
}

.login-button {
  width: 100%;
  height: 50px;
  padding: 0;
  font-size: 20px;
  color: #fff;
  text-align: center;
  background-color: #4CAF50;
  border: 0;
  border-radius: 20px;
  cursor: pointer; 
  outline:0;
}



</style>
</head>

<body>
          
            <form class ="login" name="register" method="POST" action="query.php">
            <h1 class="login-title">Hello Admin</h1>
            <h2>Select Query:</h2>
                <table>
                    <div>
                        
                        <tr>
                            <td>
                                GENDER :
                            </td> 
                            <td>
                                <input type="radio" name="gender" id="gender" value="male" checked >Male
                                <input type="radio" name="gender" id="gender" value="female">Female
                                <input type="radio" name="gender" id="gender" value="any" >Any
                            </td>
                        </tr>
                        <tr>
                            <td>EVENT : :</td>
                            <td>
                                <input type="radio" name="Event" value="Drama" checked>Drama
                                <input type="radio" name="Event" value="Music">Music
                                <input type="radio" name="Event" value="Football">Football

                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp</td>
                        </tr>
                        </table> 
                                <button type="submit" class="login-button" name="search"> Search </button>
                           

                    </div>
                
          

                <br />
            </form>
        
</body>

</html>