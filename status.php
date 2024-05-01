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
            background-image: linear-gradient(rgba(0,0,0,0.85),rgba(0,0,0,0.70)), url(status1.jpg);
            background-size: cover;
            background-position: center;
            color: #ffffff;
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
        .th{
            display: flex;
            gap: 10px;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-bottom: 2rem;
            background-color: #191c24;
            height: 60px;
        }
        .th div{
            width: 120px;
            height: auto;
        }
        .contain{
            display: flex;
            gap: 10px;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-bottom: 2rem;
            background-color: #FF008C;
            color: #fff;
            border-radius: 10px;
            transition: ease .5s;
        }
        .contain:hover{
            background-color: #ffcce1;
            color: #191c24;
        }
        .contain div{
            width: 120px;
            height: auto;
            font-size: 1.1rem;
        }
    </style> 
</head>
<body>
    <form action="sataus.php" method="POST">
    <div class="heading">
                <div class="arro"><a href="home.php">&larr;</a></div>
                <div class="hade"><h1>Viuew Your Status</h1></div>
        </div>
    <div class="container">
        <div class="tbl_container">
            <table class="tbl">
                <div class="thead">
                    <div class="th">
                        <div>Customer Name</div>
                        <div>Customer Mobile No</div>
                        <div>Customer Email</div>
                        <div>Event Type</div>
                        <div>Service Price</div>
                        <div>Event date</div>
                        <div>Starting Time</div>
                        <div>Ending Time</div>
                        <div>Venue Address</div>
                        <div>Additional Information</div>
                        <div>Your status</div>
                    </div>
                
        <?php
            session_start();
            $user=$_SESSION['mo'];
            $con=mysqli_connect('localhost','root','',"dj");
            $select="select * from book_request where mo='$user'";
            $result = mysqli_query($con, $select);
            if ($result) {
                while ($row = mysqli_fetch_array($result)){
                    ?> 
                <div class="contain">
                        <div><?php echo $row['1']; ?></div>
                        <div><?php echo $row['3']; ?></div>
                        <div><?php echo $row['2']; ?></div>
                        <div><?php echo $row['4']; ?></div>    
                        <div><?php echo $row['5']; ?></div>
                        <div><?php echo $row['6']; ?></div>
                        <div><?php echo $row['7']; ?></div>
                        <div><?php echo $row['8']; ?></div>
                        <div><?php echo $row['9']; ?></div>
                        <div><?php echo $row['10']; ?></div>
                        <div><?php echo $row['11']; ?></div>
                </div>
                            
                            <?php
                }
            }
            
            ?>
            </div> 
            </table>
        </div>
    </div>
    </form>
</body>
</html>