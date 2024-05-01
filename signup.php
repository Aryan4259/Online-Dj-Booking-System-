<html>
    <head>
    <title>Login</title>
    <style>
        body{
         
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #010101;
            animation: slide-in-top 0.3s both;
        }
        .form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  padding-left: 2em;
  padding-right: 2em;
  padding-bottom: 3rem;
  background-color: #171717;
  border-radius: 25px;
  transition: .4s ease-in-out;
  border: 2px solid transparent; /* Add a transparent border */
  transition: border 0.3s ease;
}

.form:hover {
  transform: scale(1.05);
  border: 1px solid black;
}

.form:hover {
  border-image-source: linear-gradient(45deg, #f40109, #6302ff); /* Gradient border color */
  border-image-slice: 1; /* Slice the border image */
  border-width: 2px; /* Border width */
  border-image-width: 1; /* Border image width */
}

#heading {
  text-align: center;
  margin: 2em;
  color: rgb(255, 255, 255);
  font-size: 1.2em;
}

.field {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.5em;
  border-radius: 25px;
  padding: 0.6em;
  border: none;
  outline: none;
  color: white;
  background-color: #171717;
  box-shadow: inset 2px 5px 10px rgb(5, 5, 5);
}

.input-field {
  background: none;
  border: none;
  outline: none;
  width: 100%;
  color: #d3d3d3;
}

.form .btn {
  display: flex;
  justify-content: center;
  flex-direction: row;
  margin-top: 2.5em;
}

.button1 {
  padding: 0.5em;
  padding-left: 1.1em;
  padding-right: 1.1em;
  border-radius: 5px;
  margin-right: 0.5em;
  border: none;
  outline: none;
  transition: .4s ease-in-out;
  background-color: #252525;
  color: white;
}

.button1:hover {
  background-color: rgb(11, 27, 250);
  color: white;
}

.button2 {
  padding: 0.5em;
  padding-left: 2.3em;
  padding-right: 2.3em;
  border-radius: 5px;
  border: none;
  outline: none;
  transition: .4s ease-in-out;
  background-color: #252525;
  color: white;
}

.button2:hover {
  background-color: rgb(57, 193, 8);
  color: white;
}

        </style>
    </head>
    <body>
        <form class="form" action="signup.php" method="POST">
            <p id="heading">Sign Up</p>
            <div class="field">
              <input placeholder="Username" class="input-field" type="text" name="un">
            </div>
            <div class="field">
              <input placeholder="Mobile No" class="input-field" type="text" name="mo">
            </div>
            <div class="field">
              <input placeholder="Password" class="input-field" type="password" name="pwd">
            </div>
            <div class="btn">
            <input type="submit" name="login" value="Login" class="button1">
            <input type="submit" name="reg" value="Sign up" class="button2">
            </div>
        </form>
    </body>
</html>
<?php
    if(isset($_POST['reg']))
    {
        $con=mysqli_connect('localhost','root','','dj');
        $un=$_POST['un'];
        $mo=$_POST['mo'];
        $pwd=$_POST['pwd'];

        $insert="insert into user values('$un','$mo','$pwd')";
        $query=mysqli_query($con,$insert);
    }
    if(isset($_POST['login']))
    {
        header('Location: http://localhost/dj/login.php');
    }
?>