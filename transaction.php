<?php include 'connection.php'?>
<!DOCTYPE html>
<html>
<head>
    <title>Make Transaction</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="css/home.css" >
	<style type="text/css">
    body{
		background-color: #d0f3e7; 
	}
    h1{
    font-size: 45px;
    margin-left: 260x;
    margin-top: 20px;
    }
    .contact-form{
    max-width:350px;
    margin:auto;
    border-radius:5px;
    background:#96bb72;
    padding:20px;
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
<br><br><br>
<h1><strong><u>Make a Transaction</u></strong></h1>
<br><br>
<center>
<div class="contact-form">
<form action=" " method="POST">
<table>
        <tr>
            <td>Sender :</td>
            <td><input type="text" name="sname" required></td>
        </tr>
        <tr>
            <td>Receiver :</td>
            <td><input type="text" name="rname" required></td>
        </tr>
        <tr>
            <td>Credits :</td>
            <td><input type="number" name="tcredit" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="t_add" required></td>
        </tr>
    </table>
    </form>
</div>
</center>
<?php
if(isset($_POST['t_add'])){
   $sname=$_POST['sname'];
   $rname=$_POST['rname'];
   $tcredit=$_POST['tcredit'];
   $sql="SELECT * FROM users WHERE u_name='$sname' AND u_name='$rname'";
   $res=mysqli_query($conn,$sql);
   $update1="UPDATE users SET u_credit=u_credit-$tcredit WHERE u_name='$sname'";
   $update2="UPDATE users SET u_credit=u_credit+$tcredit WHERE u_name='$rname'";
   if(!mysqli_query($conn,$update1)){
    echo "Failed to update" . mysqli_error($conn); 
   }
   else{
    echo "<script>alert('successfully updated');</script>";
   }
    
   if(!mysqli_query($conn,$update2)){
    echo "Failed to update" . mysqli_error($conn); 
   }
else{
    echo "<script>alert('successfully updated');</script>";
}
   $sqlinsert="INSERT INTO transactions(sname,rname,tcredit)VALUES('$sname','$rname','$tcredit')";
   if(mysqli_query($conn,$sqlinsert)){
    echo "<script>alert('successfully credited');</script>";
    }   
    else{
    echo "Error:".$sql."<br>".mysqli_error($conn);
}
}
?>

<pre>

<a href="transaction_details.php"><button>See All Transactions</button></a>             <a href="homepage.php"><button>Back to Home</button></a>
</pre>
    
</center>
<div class="fixed-footer">
        <div class="container">Copyright &copy; Credit Management System by Sai Pushpanjali   </div>
        </div>
        </body>
        
</body>