<!-- PHP code to establish connection with the localserver -->
<?php
include("developers.php");
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>GFG User Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>Registered Users</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>NAME</th>
				<th>EMAIL</th>
				<th>LOCATION</th>
				<th>MEMBER</th>
			</tr>
			<form action="registeduser.php" ></form>
		
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['name'];?></td>
				<td><?php echo $rows['email'];?></td>
				<td><?php echo $rows['location'];?></td>
				<td><?php echo $rows['member'];?></td>
			</tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['location']; ?></td> 
                                       <td><?php echo $row['member']; ?></td>

                </tr>
            <?php }?>
		</table>
	</section>
</body>

</html>
