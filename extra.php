<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .heading{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .heading a{
            text-decoration: none;
            color: blue;
        }
        .heading a:hover{
            color: #FF008C;
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
        .thead{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .th{
            display: flex;
            gap: 10px;
        }
        .th div{
            width: 120px;
            height: auto;
            border: 1px solid red;
        }
        .contain{
            display: flex;
            gap: 10px;
            justify-content: start;
        }
        .contain div{
            width: 120px;
            height: auto;
            border: 1px solid red;
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
                        <div>Action</div>
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
                        <div style="overflow-x: auto;"><?php echo $row['10']; ?></div>
                        <div><?php echo $row['11']; ?></div>
                        <div><button name="delete">delete</button></div>
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