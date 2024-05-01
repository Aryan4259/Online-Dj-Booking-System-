<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <style>
     *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Inter', sans-serif;
        list-style: none;
        text-decoration: none;
        scroll-behavior: smooth;
        border: none;
        outline: none;
    }
    header{
        position: fixed;
        top: 0;
        right: 0;
        z-index: 1000;
        width: 100%;
        align-items: center;
        transition: all ease .50s;
    }
    header.sticky{
        background: white;
        opacity: 0.8;
    }
    .logo a span{
        color:#FF008C;
        font-family: 'Monoton', cursive;
        font-size:2.3em;	
        text-decoration:none;
    }
    .logo{
        text-align: center;
    }
    .navlist{
        display: flex;
        justify-content: center;
    }
   
    .navlist a{
        font-size:1.5rem;
	    display:block;
        padding:5px 5px;
        margin:0 1rem;
        color:#000;
        text-decoration:none;
        font-family: 'frondeen', cursive;
    }
    .navlist a:hover{
        color:#FF008C;
    }
    section{
        padding: 120px 6% 100px;
    }
    .video{
        width: 100%;
        height: 140vh;
        background-color: #000;
        overflow: hidden;
        align-items: center;
    }
    #video1{
        position: absolute;
        
        right: 0;
    }
    /*.home{
        position: relative;
        min-height: 100vh;
        width: 100%;
        background: url(backv.mp4);
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }*/
    .services{
        min-height: 100vh;
        width: 100%;
        background-image: linear-gradient(rgba(0,0,0,0.85),rgba(0,0,0,0.70)), url(dj1.jpg);
        background-size: cover;
        background-position: center;
    }
    .heading p{
        color: #FF008C;
        font-size: 50px;
        font-weight: bold;
        margin-bottom: 50px;
    }
    .contact_all{
        justify-content: center;
        height: 500px;
        display :flex;
    }
    .ser_dtl{
        color: white;
        border-bottom: gray 2px solid;
        padding: 25px 0 20px 0;
        text-align: center;
        align-items: center;
        display: flex;
        justify-content: center;
        gap: 3rem;
        flex-wrap: wrap;
    }
    .nm{
        display: inline-block;
        width: 200px;
        font-size: 35px;
    }
    .dtl{
        display: inline-block;
        border-left: red 1px solid;
        padding: 0 0 0 35px;
    }
    .pr{
        display: inline-block;
        border-left: red 1px solid;
        font-size: 30px;
        padding: 0 0 0 35px;
        
    }
    .btn{
        display: inline-block;
        border-left: red 1px solid;
        padding: 0 0 0 35px;
        
    }
    .btn input{
        height: 40px;
        width: 70px;
        font-size: 25px;
        border: #FF008C 1px solid;
        border-radius: 5px;
        background: transparent;
        color: white;
    }
    .ser_dtl:hover{
        transition: all ease 0.5s;
        color: blue;
        border-image-source: linear-gradient(170deg, #f40109, blue); /* Gradient border color */
        border-image-slice: 1; /* Slice the border image */
        border-width: 2px; /* Border width */
        border-image-width: 1;
    }
    .btn input:hover{
        border-image-source: linear-gradient(170deg, #f40109, blue); /* Gradient border color */
        border-image-slice: 1; /* Slice the border image */
        border-width: 2px; /* Border width */
        border-image-width: 1;
    }
    .about{
        min-height: 100vh;
        width: 100%;
        background-image: linear-gradient(rgba(0,0,0,0.85),rgba(0,0,0,0.70)), url(about.png);
        background-size: cover;
        background-position: center;
        color: white;
    }
    .about_all{
        align-items: top;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, auto));
        align-items: center;
        gap: 9rem;
    }
    .about_pic img{
        width: 100%;
        height: auto;
        border: #000 1px solid;
    }
    .about_pic img:hover{
        border-image-source: linear-gradient(170deg, #f40109, blue); /* Gradient border color */
        border-image-slice: 1; /* Slice the border image */
        border-width: 5px; /* Border width */
        border-image-width: 1;
        transition: all ease 0.5s;
    }
    .about_dtl h3{
        font-size: 45px;
    }
    .about_dtl p{
        font-size: 25px;
    }
    .contact{
        min-height: 100vh;
        width: 100%;
        background-image: linear-gradient(rgba(0,0,0,0.85),rgba(0,0,0,0.70)), url(contact.jpg);
        background-size: cover;
        background-position: center;
        color: white;
    }
    .contact_all{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
    .contact_add{
        height: 200px;
        margin-right: 10%;
        padding-top: 10px;
    }
    .contact_add p{
        line-height: 40px;
        letter-spacing: 1px;
        font-size: 25px;
    }
    .design{
        color: blue;
    }
    .design span{
        color: #FF008C;
    }
    .form P{
        font-size: 25px;
        margin-top: 5px;
        margin-bottom: 20px;
    }
    .dtl2_div{
        width: auto;
        display: flex;
        margin: 15px 15px;
        align-items: center;
    }
    .dtl2{
        font-size: 25px;   
        width: 150px;
    }
    .input {
        height: 30px;
        font-size: 20px;
        border: none;
        padding: 10px;
        border-radius: 10px;
        outline: none;
        color: white;
        animation: rotateShadow 2s infinite linear;
        background-color: #292828;
    }

    

@keyframes rotateShadow {
  0% {
    box-shadow: -2px -2px 0px 0px #FF008C, 2px 2px 0px 0px #3700ff;
  }
  25% {
    box-shadow: -2px 2px 0px 0px #FF008C, 2px -2px 0px 0px #3700ff;
  }
  50% {
    box-shadow: 2px 2px 0px 0px #FF008C, -2px -2px 0px 0px #3700ff;
  }
  75% {
    box-shadow: 2px -2px 0px 0px #FF008C, -2px 2px 0px 0px #3700ff;
  }
  100% {
    box-shadow: -2px -2px 0px 0px #FF008C, 2px 2px 0px 0px #3700ff;
  }
}
    .textt textarea{
        height: 80px;
        padding-left: 5px;
        border-radius: 5px;
    }
    .submit input{
        font-size: 25px;
        height: 40px;
        width: 100px;
        text-align: center;
        border: #FF008C 1px solid;
        border-radius: 5px;
        color: black;
    }
    .submit input:hover{
        border-image-source: linear-gradient(170deg, #f40109, blue); /* Gradient border color */
        border-image-slice: 1; /* Slice the border image */
        border-width: 2px; /* Border width */
        border-image-width: 1;
        transition: all ease 0.5s;
        background-color: #000;
        color: white;
    }
    </style>
</head>
<body>
<div class="video" id="home"><video id="video1"src="djv2.mp4" autoplay muted loop></video></div>
<form action="home.php" method="POST">
    <!--header section-->
    <header class="sticky">
        <div class="logo">
                <a><span>MR.DJ</span></a>
        </div>
        <div class="item">
                <ul class="navlist">
                <li class="active"><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="status.php">Status</a></li>
                <li><a href="logout.php">Logout</a></li>
                </ul>
        </div>
    </header>

    <!-- <section class="home" id="home"> -->
        
    <!-- </section> -->

    <!--Services -->
    <section class="services" id="services">
        <div class="heading">
            <p>Services</p>
        </div>
            <div class="ser_dtl">
                <div class="nm">
                    Wedding DJ
                </div>
                <div class="dtl">
                    we install the DJ equipment before your <br>ceremony or after your wedding breakfast
                </div>
                <div class="pr">
                    $ 800 USD
                </div>
                <div class="btn">
                    <input type="submit" value="Book" name="book1">
                </div>
            </div>
            <div class="ser_dtl">
                <div class="nm">
                    <p>Concert DJ</p>
                </div>
                <div class="dtl">
                    <p>we install the DJ equipment before your <br>ceremony or after your wedding breakfast</p>
                </div>
                <div class="pr">
                    <p>$ 800 USD</p>
                </div>
                <div class="btn">
                    <input type="submit" value="Book" name="book2">
                </div>
            </div>
            <div class="ser_dtl">
                <div class="nm">
                    <p>Night Club</p>
                </div>
                <div class="dtl">
                    <p>we install the DJ equipment before your <br>ceremony or after your wedding breakfast</p>
                </div>
                <div class="pr">
                    <p>$ 800 USD</p>
                </div>
                <div class="btn">
                    <input type="submit" value="Book" name="book3">
                </div>
            </div>
            <div class="ser_dtl">
                <div class="nm">
                    <p>Religious DJ</p>
                </div>
                <div class="dtl">
                    <p>we install the DJ equipment before your <br>ceremony or after your wedding breakfast</p>
                </div>
                <div class="pr">
                    <p>$ 800 USD</p>
                </div>
                <div class="btn">
                    <input type="submit" value="Book" name="book4">
                </div>
            </div>
            <div class="ser_dtl">
                <div class="nm">
                    <p>College DJ</p>
                </div>
                <div class="dtl">
                    <p>we install the DJ equipment before your <br>ceremony or after your wedding breakfast</p>
                </div>
                <div class="pr">
                    <p>$ 800 USD</p>
                </div>
                <div class="btn">
                    <input type="submit" value="Book" name="book5">
                </div>
            </div>
    </section>

    <!--About Us-->
    <section class="about" id="about">
        <div class="heading">
            <p>About Us</p>
        </div>
        <div class="about_all">
            <div class="about_pic">
                <img src="logbg.jpg">
            </div>
            <div class="about_dtl">
            <h3>Online DJ Management System</h3><br>
            <p>ODMS is one of the Internet's largest and trusted Online DJ Booking Service.<br>
            ODMS has done several placements locally & globally for top artists.<br></p>
            </div>
        </div>
    </section>

    <!--contact-->
    <section class="contact" id="contact">
        <div class="heading">
            <p>Contact Us</p>
        </div>
        <div class="contact_all">
           <div class="contact_add">
                <p>D-204, Hole Town South West,Delhi-110096,India<br>
                aryanukani@gmail.com<br>
                8488083038</p>
           </div>

           

           <div class="form">
           <div><p class="or">Drop a message we wiil reply you soon.</p></div>
                <div class="dtl2_div">
                    <div class="dtl2">Name :</div>
                    <div class="textt"><input type="text" class="input" name="nm" size="20"></div>
                </div>

                <div class="dtl2_div">
                    <div class="dtl2">Email :</div>
                    <div class="textt"> <input type="text" class="input" name="email" size="20"></div>
                </div>

                <div class="dtl2_div">
                    <div class="dtl2">Mobile No :</div>
                    <div class="textt"><input type="text" class="input" name="mo" size="20"></div>
                </div>

                <div class="dtl2_div">
                    <div class="dtl2">Massage :</div>
                    <div class="textt"><textarea name="msg" class="input" rows="4" cols="30"></textarea></div>
                </div>

                <div class="dtl2_div">
                    <div class="dtl2">       </div>
                    <div class="submit"><input type="submit" value="Submit" name="qry"></textarea></div>
                </div>
           </div>
        </div>
    </section>
</form>
</body>
</html>
<?php
    if(isset($_POST['qry']))
    {   $nm=$_POST['nm'];
        $email=$_POST['email'];
        $mo=$_POST['mo'];
        $msg=$_POST['msg'];
        $con=mysqli_connect('localhost','root','',"dj");
        $insert="insert into qurey values ('$nm','$email','$mo','$msg')";
        $qurey=mysqli_query($con,$insert);
        if($qurey)
        {
            echo "<script>alert('Your Massage hase been Sent We will contect you soon');</script>";    
        }
    }
?>

<?php
    if(isset($_POST['book1']))
    {
        session_start();
        $login=$_SESSION['login'];
        $con=mysqli_connect('localhost','root','',"dj");
        $event1="Wedding Dj";
        $price="800";
        $insert="insert into event values ('$event1','$price')";
        $qurey=mysqli_query($con,$insert);
        if($qurey)
        {
           if($login==false)
           {
            header('location:login.php');
           }
           else
           {
            header('location:http://localhost/dj/book.php');

           } 
        }
    }


    if(isset($_POST['book2']))
    {
       session_start();
        $login=$_SESSION['login'];
        $con=mysqli_connect('localhost','root','',"dj");
        $event1="Concert";
        $price="800";
        $insert="insert into event values ('$event1','$price')";
        $qurey=mysqli_query($con,$insert);
        if($qurey)
        {
            if($login==false)
           {
            header('location:login.php');
           }
           else
           {
            header('location:http://localhost/dj/book.php');

           } 
        }
    }

    if(isset($_POST['book3']))
    {
       session_start();
        $login=$_SESSION['login'];
        $con=mysqli_connect('localhost','root','',"dj");
        $event1="Night club";
        $price="800";
        $insert="insert into event values ('$event1','$price')";
        $qurey=mysqli_query($con,$insert);
        if($qurey)
        {
            if($login==false)
           {
            header('location:login.php');
           }
           else
           {
            header('location:http://localhost/dj/book.php');

           } 
        }
    }

    if(isset($_POST['book4']))
    {
       session_start();
        $login=$_SESSION['login'];
        $con=mysqli_connect('localhost','root','',"dj");
        $event1="Religious Dj";
        $price="800";
        $insert="insert into event values ('$event1','$price')";
        $qurey=mysqli_query($con,$insert);
        if($qurey)
        {
            if($login==false)
           {
            header('location:login.php');
           }
           else
           {
            header('location:http://localhost/dj/book.php');

           } 
        }
    }

    if(isset($_POST['book5']))
    {
       session_start();
        $login=$_SESSION['login'];
        $con=mysqli_connect('localhost','root','',"dj");
        $event1="College Dj";
        $price="800";
        $insert="insert into event values ('$event1','$price')";
        $qurey=mysqli_query($con,$insert);
        if($qurey)
        {
            if($login==false)
           {
            header('location:login.php');
           }
           else
           {
            header('location:http://localhost/dj/book.php');

           } 
        }
    }
?>