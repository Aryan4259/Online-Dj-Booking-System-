<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            outline: none;
            border: none;
            text-decoration: none;
            box-sizing: border-box;
            font-family: "Popinsins", sans-serif;
        }
        body{
            background: rgb(226, 226, 226);   
        }
        nav{
            position: sticky;
            top: 0;
            bottom: 0;
            height: 100vh;
            left: 0;
            width: 90px;
            background: #fff;
            overflow: hidden;
            transition: 1s;
        }
        nav:hover{
            width: 280px;
            transition: 1s;
        }
        .logo{
            text-align: center;
            display: flex;
            flex-direction: row;
            margin: 10px 0 0 10px;
            padding-bottom: 3rem;
        }
        .logo img{
            width: 45px;
            height: 45px;
        }
        
        .logo span{
            font-weight: bold;
            padding-left: 20px;
            font-size: 18px;
            margin-top: 10px;
            text-transform: uppercase;
        }
        nav a{
            position: relative;
            width: 280px;
            font-size: 14px;
            color: rgb(85, 83, 83);
            display: table;
            padding: 10px;
        }
        nav img{
            position: relative;
            width: 55px;
            height: 55px;
            top: 5px;
            text-align: center;
        }
        .nav-item{
            position: relative;
            top: -20px;
            margin-left: 20px;
        }
        a:hover{
            background: #eee;
        }
        a:hover i{
            color: #34af6d;
            transition: 0.5s;
        }
        .logout{
            position: absolute;
            bottom: 0;
        }
        .container{
            display: flex;
        }
        /* main section */

        .main{
            position: relative;
            padding: 20px;
            width: 100%;
        }
        .main-top{
            display: flex;
            width: 100%
        }
        .thead{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
        }
        .th{
            display: flex;
            gap: 50px;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: #af1763;
            height: 60px;
            border-radius: 10px;
        }
        .th div{
            width: 150px;
            height: auto;
            font-size: 1.3rem;
            font-weight: 600;
            
        }
        .contain{
            display: flex;
            gap: 50px;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: #191c24;
            color: #ffffff;
            border-radius: 10px;
            transition: ease .5s;
            height: 60px;
        }
        .contain div{
            width: 150px;
            height: auto;
            font-size: 1.3rem;
        }
        .action-btn{ 
            border: #000 1px solid ;
            border-radius: 10px;
            background-color: #af1763;
            color: #ffffff;
        }
        a{
            text-decoration: none;
        }
        h1{
            text-align: center;
        }
        .thead{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
        }
        .th{
            display: flex;
            gap: 50px;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: #af1763;
            height: 60px;
            border-radius: 10px;
        }
        .th div{
            width: 150px;
            height: auto;
            font-size: 1.3rem;
            font-weight: 600;
            
        }
        .contain{
            display: flex;
            gap: 50px;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: #191c24;
            color: #ffffff;
            border-radius: 10px;
            transition: ease .5s;
            height: 60px;
        }
        .contain div{
            width: 150px;
            height: auto;
            font-size: 1.3rem;
        }
        .action-btn{ 
            border: #000 1px solid ;
            border-radius: 10px;
            background-color: #af1763;
            color: #ffffff;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
        <nav>
            <ul>
                <li><a href="#" class="logo">
                    <img src="alogo.png">
                    <span class="nav-main">Admin</span></a>
                </li>

                <li><a href="aadmin.php">
                <img src="shopping.png">
                    <span class="nav-item">Arrived Bookings</span>
                </a>
                </li>

                <li><a href="approved.php">
                <img src="approved.png">
                    <span class="nav-item">Approved Bookings</span>
                </a>
                </li>

                <li><a href="cancel.php">
                    <img src="cancelled.png">
                    <span class="nav-item">Cancelled Bookings</span>
                </a>
                </li>

                <li><a href="qry.php">
                    <img src="cross.png">
                    <span class="nav-item">Arrived querys</span>
                </a>
                </li>

                <li><a href="#" class="logout">
                    <img src="cross.png">
                    <span class="nav-item">Logout</span>
                </a>
                </li>
            </ul>
        </nav>
        <section class="main">
            <div class="main-top">
                <h1>Approved Booking</h1>
            </div>
            <div class="thead">
                <div class="th">
                    <div>Name</div>
                    <div>Email</div>
                    <div>Mobile no</div>
                    <div>Booking Date</div>
                    <div>Status</div>
                    <div>Action</div>
                </div>
        <?php
        $con=mysqli_connect('localhost','root','',"dj");
        $select="select * from book_request where status='approved' ";
        $qry=mysqli_query($con,$select);
        while($row=mysqli_fetch_array($qry))
        {
            $id=$row['id'];
            ?>
           <div class="contain">
                <div><?php echo $row['nm']; ?></div>
                <div><?php echo $row['em']; ?></div>
                <div><?php echo $row['mo']; ?></div>
                <div><?php echo $row['date']; ?></div>
                <div><?php echo $row['status']; ?></div>
                <form action="add-services.php" method="GET"><a  href="approvedfinel.php?takeid=<?php echo $id;?>"><div class="action-btn">View</div></a></form>
                </div>
            <?php
        }
        ?>
        </div>
    </section>
        </div>
       
</body>
</html>