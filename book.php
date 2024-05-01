<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            min-height: 100vh;
            width: 100%;
            background-image: linear-gradient(rgba(0,0,0,0.85),rgba(0,0,0,0.50)), url(book2.jpg);
            background-size: cover;
            background-position: center;
            color: white;
        }
        .heading{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .heading a{
            text-decoration: none;
            color: #FF008C;
        }
        .heading a:hover{
            color: red;
        }
        .arro{
            width: 100px;
            font-size: 70px;
            text-align: center; 
        }
        .hade h1{
            font-size: 3em;
            letter-spacing: 5px;
            font-weight: bold;
            color: #FF008C;
            align-items: center;
            text-align: center;
            -webkit-box-reflect: below 1px linear-gradient(transparent,#0004);
            animation: animate 5s linear infinite;
            line-height: 0.7em;
        }
    .form{
        display: flex;
        justify-content: center;
        padding-bottom: 50px;
        flex-wrap: wrap;
    }
    .dtl2_div{
        width: auto;
        padding: 10px 10px 10px 10px;
        display: flex;
        flex-wrap: wrap;
        margin: 15px 15px;
        align-items: center;
    }
    .dtl2{
        font-size: 30px;   
        width: 250px;
    }
    span{
        font-size: 30px;
        color: #ffffff;
    }
    .textt input{
        width: auto;
        height: 30px;
        border: #FF008C 2px solid;
        border-radius: 5px;
        background-color: #ffffff;
        color: black;
        border-image-source: linear-gradient(170deg, #f40109, blue); /* Gradient border color */
        border-image-slice: 1; /* Slice the border image */
        border-width: 2px; /* Border width */
        border-image-width: 1;
        transition: all ease 0.5s;
        outline: none;
        color: #ffffff;   
        background-color: #292828;
    }
    .textt textarea{
        border: #FF008C 2px solid;
        border-radius: 5px;
        background-color: #ffffff;
        color: #000;
        border-image-source: linear-gradient(170deg, #f40109, blue); /* Gradient border color */
        border-image-slice: 1; /* Slice the border image */
        border-width: 2px; /* Border width */
        border-image-width: 1;
        transition: all ease 0.5s;
        outline: none;
        color: #ffffff;   
        background-color: #292828; 
    }
    .center{
        align-items: center;
        text-align: center;
    }
    .submit input{
        font-size: 25px;
        padding: 5px 5px 5px 5px;
        border: #000 1px solid;
        border-radius: 5px;
        text-align: center;
    }
    input[type="date"]{
       
        font-family: "roboto mono",monospace;
        color: #000;
        font-size: 20px;
        border: 2px #FF008C solid;
        height: 35px;
        border-radius: 5px;
        text-align: center;
        border-image-source: linear-gradient(170deg, #f40109, blue); /* Gradient border color */
        border-image-slice: 1; /* Slice the border image */
        border-width: 2px; /* Border width */
        border-image-width: 1;
        transition: all ease 0.5s;
        outline: none;
        color: #ffffff;   
        background-color: #292828;
    }
    ::-webkit-calendar-picker-indicator{
        background-color: #ffffff;
        padding: 5px;
        cursor: pointer;
        border-radius: 3px;
    }
    .submit input{
        font-size: 25px;
        height: 40px;
        width: 100px;
        text-align: center;
        border: #FF008C 3px solid;
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
    <?php 
    session_start();
    ?>
    <form action="book.php" method="POST">
            <!--book-->
    <section class="book">
    <div class="heading">
                <div class="arro"><a href="home.php">&larr;</a></div>
                <div class="hade"><h1>Viuew Your Status</h1></div>
        </div>
           <div class="form">
                <div class="right">
                    <div class="dtl2_div">
                        <div class="dtl2" >Name :</div>
                        <div class="textt"><input placeholder="Type your name" type="text" name="nm"  size="30" required></div>
                    </div>

                    <div class="dtl2_div">
                    <div class="dtl2">Event Date :</div>
                        <div class="textt"><input type="date" name="date" required></input></div>
                    </div>

                    <div class="dtl2_div">
                    <div class="dtl2">Event Starting Time:</div>
                        <div class="textt"><input type="time"  name="es" required></div>
                    </div>

                    <div class="dtl2_div">
                    <div class="dtl2">Event Finishing Time:</div>
                        <div class="textt"><input type="time" name="ef" required></div>
                        
                    </div>

                    <div class="dtl2_div">
                        <div class="dtl2">Venue Address:</div>
                        <div class="textt"><textarea name="va" rows="4" cols="50" required></textarea></div>
                    </div>
                </div>



                <div class="left">
                    <div class="dtl2_div">
                        <div class="dtl2">Email :</div>
                        <div class="textt"><span><?php echo $_SESSION['un']; ?></span></div>
                    </div>
                    
                    <div class="dtl2_div">
                        <div class="dtl2">Mobile No :</div>
                            <div class="textt"><span><?php echo $_SESSION['mo']; ?></span></div>
                       
                    </div>

                    <div class="dtl2_div">
                    <div class="dtl2">Price :</div>
                        <div>
                            <?php
                            $last2=null;
                            $con=mysqli_connect('localhost', 'root','',"dj");
                            $select="select * from event";
                            $qry=mysqli_query($con,$select);
                            $n=mysqli_num_rows($qry);
                            $i=1;
                                while ($row = mysqli_fetch_array($qry))
                                {
                                    if($i==$n)
                                        $last2=$row['price']?>
                                        <p><span><?php echo $last2; 
                                    $i++;
                                }
                            ?>$</span></p>
                        </div>
                    </div>

                    <div class="dtl2_div">
                    <div class="dtl2">Event type :</div>
                    <div>
                        <?php
                        $last1=null;
                        $con=mysqli_connect('localhost', 'root','',"dj");
                        $select="select * from event";
                        $qry=mysqli_query($con,$select);
                        $n=mysqli_num_rows($qry);
                                $i=1;
                                while ($row = mysqli_fetch_array($qry))
                                {
                                    if($i==$n)
                                        $last1=$row['event1']?>
                                        <p><span><?php echo $last1; ?></span></p>
                                        <?php
                                    $i++;
                                }
                        ?></div>
                        
                    </div>

                    <div class="dtl2_div">
                        <div class="dtl2">Additional information :</div>
                        <div class="textt"><textarea name="ai" rows="4" cols="50" required></textarea></div>
                    </div>
                </div>      
           </div>
           <div class="center">
                    <div class="submit"><input type="submit" value="Submit" name="request" required></textarea></div>    
            </div>
        </div>
    </section>
    </form>
    <script>
      

    </script>
</body>
</html>
<?php

    $con1=mysqli_connect('localhost','root','',"dj");
    if(isset($_POST['request']))
    {
        $nm=$_POST['nm'];
        $em=$_SESSION['un'];
        $mo=$_SESSION['mo'];
        $date=$_POST['date'];
        $es=$_POST['es'];
        $ef=$_POST['ef'];
        $va=$_POST['va'];
        $ai=$_POST['ai'];
        $status="panding";
        $event=$last1;
        $price=$last2;
      
        $insert="insert into book_request (nm,em,mo,event,price,date,es,ef,vadd,addinfo,status) values ('$nm','$em','$mo','$event','$price','$date','$es','$ef','$va','$ai','$status')";
        $qry=mysqli_query($con1,$insert);
       
    }
?>