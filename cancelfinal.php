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
            .main-top{
            display: flex;
            width: 100%
        }
        .main{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #191c24;
            color: #ffffff;
            position: relative;
            padding: 20px;
            width: 100%;
        }
        .tbody{
            display: flex;
            flex-direction: row;
            gap: 3rem;
            flex-wrap: wrap;
            border-bottom: #000 3px solid;
        }
        .tbody th{
            align-items: center;
            text-align: center;
            font-size: 1.3rem;
            width: 200px;
            padding-top: 2rem;
            padding-bottom: 2rem;
        }
        .tbody td{
            align-items: center;
            text-align: center;
            font-size: 1.5rem;
            width: 200px;
            padding-top: 2rem;
            padding-bottom: 2rem;
        }
        .button{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }
        .btn1{
            background-color: #af1763;
            height: 50px;
            width: 100px;
            border-radius: 5px;
        }
        .btn1 a{
            text-decoration: none;
            color: #ffffff;
            font-size: 25px;
            text-align: center;
            align-items: center;
        }
        .btn2{
            background-color: #af1763;
            height: 50px;
            width: 120px;
            border-radius: 5px;
        }
        .btn2 a{
            text-decoration: none;
            color: #ffffff;
            font-size: 25px;
            text-align: center;
            align-items: center;
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
                <h1>Cancelled Booking</h1>
            </div>
    <?php
    $con = mysqli_connect('localhost', 'root', '', "dj");
    $id = isset($_GET['takeid']) ? mysqli_real_escape_string($con, $_GET['takeid']) : '';
    $sql = "select * from book_request where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
    ?>
           <table class="main">
                <tr class="tbody">
                    <th>Customer Name :</th>
                    <td><?php echo $row['1']; ?></td>
                    <th>Customer Mobile No :</th>
                    <td><?php echo $row['3']; ?></td>
                </tr>
                <tr class="tbody">
                    <th>Service Price :</th>
                    <td><?php echo $row['5']; ?></td>
                    <th>Customer Email :</th>
                    <td><?php echo $row['2']; ?></td>
                </tr>
                <tr class="tbody">
                    <th>Event Type :</th>
                    <td><?php echo $row['4']; ?></td>
                    <th>Venue Address :</th>
                    <td><?php echo $row['9']; ?></td>
                </tr>
                <tr class="tbody">
                    <th>Starting Time :</th>
                    <td><?php echo $row['7']; ?></td>
                    <th>Ending Time :</th>
                    <td><?php echo $row['8']; ?></td>
                </tr>
                <tr class="tbody">
                    <th>Event date :</th>
                    <td><?php echo $row['6']; ?></td>
                    <th>Additional Information :</th>
                    <td><?php echo $row['10']; ?></td>
                </tr>
        
            </table>
       <?php     
       }
    }
        ?>
        </section>
</div>
</body>
</html>