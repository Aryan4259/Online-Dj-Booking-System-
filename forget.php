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

        </style>
    </head>
    <body>
        <form class="form" action="forget.php" method="POST">
            <p id="heading">Forget Password</p>
            <div class="field">
              <input placeholder="Mobile No" class="input-field" type="text" name="m_no1">
            </div>
            <div class="field">
              <input placeholder="New Password" class="input-field" type="text" name="psw1">
            </div>
            <div class="field">
              <input placeholder="Confirm Password" class="input-field" type="password" name="psw2">
            </div>
            <div class="btn">
            <input type="submit" name="update" value="Update" class="button1">
            </div>
        </form>
    </body>
</html>
<?php
if(isset($_POST['update']))
{
    $m_no1=$_POST['m_no1'];
    $psw1=$_POST['psw1'];
    $psw2=$_POST['psw2'];
    $con=mysqli_connect('localhost', 'root','',"dj");
    $select="select * from user";
    $qry=mysqli_query($con,$select);

    if($qry)
    {
        while ($row = mysqli_fetch_array($qry))
        {
            $m_no=$row['mo'];
            $psc=$row['pwd'];

            if($m_no==$m_no1)
            {
                if($psw1==$psw2)
                {
                    $update="UPDATE user SET pwd='$psw1' WHERE mo='$m_no1'";
                    $qry1=mysqli_query($con,$update);
                    if($qry1)
                    {
                        header('Location: http://localhost/dj/login.php');
                        exit;
                    }
                    else
                    {
                        echo "error";
                        break;
                    }
                }
            }
        }
    }
}
?>