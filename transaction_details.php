<?php include 'connection.php'?>
<!DOCTYPE html>
<html>
<head>
   <title>Transaction Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="css/users.css" >
	<link type="text/css" rel="stylesheet" href="css/home.css" >
	<style>
	body{
		background-color: #d0f3e7; 
		
		}
		button{
            background-color:#030303;
            color:white;
            padding:10px 10px;
            font-size:16px;
            text-align:center;
            border:none;
            text-decoration:none;
			display:inline-block;
			border-radius:12px;
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
	<?php
    $transactions = "select * from  transactions ";
    $result=mysqli_query($conn,$transactions);
    $row_count=mysqli_num_rows($result);
    ?>
	<br>
	<center>
		<h1><strong><u>Transaction Details</u></strong></h1>
	</center>
	<?php
		echo "<table id=\"my_table3\" border='5'>
		<tr>
		<th>Sender</th>
		<th>Receiver</th>
		<th>Credits</th>
		</tr>";
		
	while($row = mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		echo "<td>" . $row['sname'] . "</td>";
		echo "<td>" . $row['rname'] . "</td>";
        echo "<td>" . $row['tcredit'] . "</td>";
        echo "</tr>";
	}
	echo "</table>";
	?>
	<br>
	<br>
	<pre>

	    <a href="homepage.php"><button class='button1'>Back to Home</button></a>
</pre>
           
		<br><br>
		
	
</center>
<div class="fixed-footer">
        <div class="container">Copyright &copy; Credit Management System by Sai Pushpanjali   </div>
        </div>
</body>
</html>

