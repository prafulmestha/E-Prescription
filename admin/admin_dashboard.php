<?php
session_start();
// require('search.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>Admin Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="../bootstrap-4.4.1/assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="../bootstrap-4.4.1/assets/css/main.css">
	<link rel="stylesheet" href="../bootstrap-4.4.1/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../bootstrap-4.4.1/assets/css/index.css">

	<link rel="icon" type="image/x-icon" href="../upload/cystone tablet.png">

	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		#side_bar {
			background-color: whitesmoke;
			padding: 50px;
			width: 300px;
			height: 450px;
		}

		.sidebar {
			width: 260px;
			height: 100%;
			float: left;
			background-color: #2B333E;
			position: fixed;
			left: 0;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height: 50px;">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="admin_dashboard.php">WELCOME TO E-PRESCRIPTION</a>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name']; ?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email']; ?></strong></span></font>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="view_admin_profile.php">View Profile</a>
						<a class="dropdown-item" href="edit_admin_profile.php"> Edit Profile</a>
						<a class="dropdown-item" href="change_admin_password.php">Change Password</a>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>
			</ul>
		</div>
	</nav><br>
	<span>
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="admin_dashboard.php" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="view_admin_profile.php" class=""><i class="lnr lnr-user"></i> <span>View Profile</span></a></li>
						<li><a href="edit_admin_profile.php" class=""><i class="lnr lnr-user"></i> <span>Edit Profile</span></a></li>
						<li><a href="change_admin_password.php" class=""><i class="lnr lnr-lock"></i> <span>Change Password</span></a></li>
						<li><a href="" class=""><i class=""></i> <span>Jashnpreet</span></a></li>
						<li><a href="../logout.php" class=""><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
					</ul>
				</nav>
				
			</div>
		</div>
		
	</span>
	
	</div>
	<span>
	<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `users` WHERE CONCAT(`id`, `name`, `mobile`, `address`) LIKE '%".$valueToSearch."%'";
    $search_result = filtertable($query);
    
}
 else {
    $query = "SELECT * FROM `users`";
    $search_result = filtertable($query);
}

// function to connect and execute the query
function filtertable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "e-pri");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="admin_dashboard.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Mobile</th>
                    <th>Address</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['mobile'];?></td>
                    <td><?php echo $row['address'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        </span>
</body>

</html>