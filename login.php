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
        section{
        padding: 120px 19% 100px;
    } 
        .form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        padding-left: 2em;
        padding-right: 2em;
        padding-bottom: 0.4em;
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

.button3 {
  padding: 0.5em;
  border-radius: 5px;
  border: none;
  outline: none;
  transition: .4s ease-in-out;
  background-color: #3f3e3ef2;
  color: white;
}

.button3:hover {
  background-color: red;
  color: white;
}
.radio{
  margin-top: 10px;
  color: #fff;
  font-size: 20px;
}
a{
  padding-bottom: 3rem;
  text-decoration: none;
  font-size: 20px;
  color: #fff;
}
a:hover{
  font-size: 25px;
  transition: ease-in-out 0.3s;
}
        </style>
    </head>
    <body>
      <section class="back">
        <form class="form" method="POST" action="login.php">
            <p id="heading">Login</p>
            <div class="field">
              <input autocomplete="off" placeholder="Mobile No" class="input-field" type="text" name="mo1">
            </div>
            <div class="field">
              <input placeholder="Password" class="input-field" type="password" name="pwd1">
            </div>
            <!-- <div class="radio">
              <input type="checkbox" name="admin" value="Admin" class="admin">Admin
              <input type="checkbox" name="admin" value="cust" class="admin" hidden checked>
            </div> -->
            <div class="btn">
            <button class="button1" name="login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
            <button class="button2" name="reg">Sign Up</button></a>
            </div>
            <button class="button3" name="f">Forgot Password</button>
            <a href="adminlogin.php"><u>Admin?</u></a>
        </form>
      </section>
    </body>
</html>
<?php
if(isset($_POST['login']))
{
    $mo1=$_POST['mo1'];
    $pwd1=$_POST['pwd1'];
    
    // $ad=$_POST['admin'];
   
    // if($ad='Admin')
    // {
    //   if($mo1 =='123' && $pwd1 =='123')
    //   {
    //     header('Location:aadmin.php');
    //   }
    // }
    // else
    // {
    //   if($ad='cust')
    //   {
       $con=mysqli_connect('localhost','root','',"dj");
       $select="select * from user";
       session_start();
       $_SESSION['login'] =false;
       
       $qry2=mysqli_query($con,$select);
       while($row=mysqli_fetch_array($qry2))
       {
           if($row['mo']==$mo1 && $row['pwd']==$pwd1)
           {
             $_SESSION['login'] =true;
             $_SESSION['un']=$row['un'];
             $_SESSION['mo']=$row['mo'];
             header("location:home.php");
           }
       }

    //} 
}
   
   
    

if(isset($_POST['reg']))
{
  header('Location: http://localhost/dj/signup.php');
}
if(isset($_POST['f']))
{
  header('Location: http://localhost/dj/forget.php');
}
?>