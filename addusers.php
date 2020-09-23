<?php require 'connection.php'?>
<!DOCTYPE html>
<html>
<head>
    <title>add User</title>
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
    <br><br><br>
    <center><h1><strong><u>Add a New User</u></strong></h1></center>
    <br><br>
    <div class="contact-form">
    <form action=" " method="POST">
    <table>
        <tr>
            <td>Name :</td>
            <td><input type="text" name="u_name" required></td>
        </tr>
        <tr>
            <td>Email :</td>
            <td><input type="email" name="u_email" required></td>
        </tr>
        <tr>
            <td>Credits :</td>
            <td><input type="number" name="u_credit" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="u_add"></td>
        </tr>
    </table>
    </form>
    </div>
<?php
if(isset($_POST['u_add'])){
    $u_name=$_POST['u_name'];
    $u_email=$_POST['u_email'];
    $u_credit=$_POST['u_credit'];
    $sql="INSERT INTO users(u_name,u_email,u_credit)values('$u_name','$u_email','$u_credit')";
    if(mysqli_query($conn,$sql)){
        echo "<script>alert('New user is added successfully');</script>";
    }   
    else{
        echo "Error:".$sql."<br>".mysqli_error($conn);
    }
}
?>
<center>
<pre>

<a href="users.php"><button class='button1' >See all users</button></a>

</pre>
    
</center>
<div class="fixed-footer">
        <div class="container">Copyright &copy; Credit Management System by Sai Pushpanjali   </div>
        </div>
</body>
</html>