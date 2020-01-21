<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-image: url("Brick-wallaper-For-Background-38.jpg");
}

.login {
  margin: 20px auto;
  width: 300px;
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

.login-input {
  width: 285px;
  height: 50px;
  margin-bottom: 25px;
  padding-left:10px;
  font-size: 15px;
  background: #fff;
  border: 1px solid #ccc;
  border-radius: 4px;
}
.login-input:focus {
    border-color:#6e8095;
    outline: none;
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

.login-lost
{
  text-align:center;
  margin-bottom:0px;
}

.login-lost a
{
  color:#666;
  text-decoration:none;
  font-size:15px;
}
</style>
<body>
    <form class="login" method="POST" action="server.php">
        <h1 class="login-title">Login Here</h1>
        <input type="text" name="username" id="username" class="login-input" placeholder="Email Address" autofocus required>
        <input type="password" name="passwd" id="passwd" class="login-input" placeholder="Password" required>
        <button type="submit" name="login_user" class="login-button">Login</button>
      <p class="login-lost"><a href="register.php">New User? Register Here</a></p>
      </form>
    
</body>


