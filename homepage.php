<?php?>
    <html>
    <head>
    <title>Credit Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="css/home.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body{
            background-image:url(pics/picture2.png);
            background-size:cover;
            background-attachment:fixed;}        
        h1{
            text-align:center;
            font-size:50px;
            margin:0px;
            padding:0px;
            
        }
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
    </div>
        <center>
            <br>
            <br>
            <h1><strong>Credit Management System</strong></h1>
            <h3>Transfer of credits</h3>
            <pre>
            <br>
            
<a href="start.php"><button class='button1'>Start</button></a>

   
    </pre>
           
            </div>
        </center>
        <div class="fixed-footer">
        <div class="container">Copyright &copy; Credit Management System by Sai Pushpanjali   </div>
        </div>
        </body>
        
    </html>

