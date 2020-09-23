<?php?>
<html>
<head><title>start page</title>
<link type="text/css" rel="stylesheet" href="css/home.css" >
<style type=text/css>
button{
            background-color:#030303;
            color:white;
            padding:50px 50px;
            font-size:16px;
            text-align:center;
            border:none;
            text-decoration:none;
            display:inline-block;
            border-radius:50%;
        }
        nav{
            position:fixed;
            top:0;
            left:0;
            width:100%;
            height:43px;
            padding:10px 90px;
            box-sizing:border-box;
            background:#83A1A1;
        }
        nav ul{
            list-style:none;
            float:right;
            margin:0;
            padding:-30;
            display:flex;
        }
        nav ul li a{
            line-height:10px;
            color:black;
            padding:12px 25px;
            text-decoration:none;
            text-transform:uppercase;
            font-size:15px;
            font-weight:bold;
        }
        nav ul li a:hover{
            background:#3E8F8F;
            border-radius:6px;
        }
        body{
            background-image:url(pics/pic4.png);
            background-size:cover;
            background-attachment:fixed;}        
        
        </style>
</head>
<body>
<div class="wrap">
        <nav>
        <div class="logo">
	 <a href="homepage.php"><img src="pics/logo.png" alt="logo"></a></div>
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="users.php">User Details</a></li>
                <li><a href="transaction_details.php">Transaction Details</a></li>
                <li><a href="addusers.php">Add Users</a></li>
                <li><a href="transaction.php">Make Transaction</a></li>
             </ul>
        </nav>
    </div>>
    <br>
    <br>
    <pre><center>
    <a href="users.php"><button class='button1'>User Details</button></a>





    <a href="transaction_details.php"><button class='button1'>Transaction <br>Details</button></a>





    <a href="homepage.php"><button class='button1'>Go Back</button></a>
        </center>    </pre>
    <div class="fixed-footer">
        <div class="container">Copyright &copy; Credit Management System by Sai Pushpanjali   </div>
        </div>
</body>




</html>