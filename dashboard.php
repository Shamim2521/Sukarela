<?php 
	include("config.php");
	session_start();

	if (isset($_SESSION['User'])) {
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Dashboard</title>
			<link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
		</head>
		<body>
			<div class="container">
				<div class="header">
					<div class="logo">
						<h2>Sukarela Dashboard</h2>						
					</div>
					<div class="nav">
						<ul>
							<li><?php echo $_SESSION['User'];?></li>
						</ul>
						
						
					</div>
				</div>
				<div class="main-con">
					<div class="left">
						<ul>
							<li><a href="#" onclick="opendiv('donor')">Donors</a></li>
							<li><a href="#" onclick="opendiv('rate')">Rate Donors</a></li>
						</ul>
						
					</div>
					<div class="right">
						<div id="donor" class="content">
							<center><h3>List of Donors</h3></center>
							<table>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Address</th>
									<th>Qualification</th>
									<th>Rating</th>
								</tr>
							<?php 
							$sql = "SELECT name, email, address, qualification, rate FROM volunteer";
				            $result = $mysqli->query($sql) or die($mysqli->error);
            
           		            while ($row = $result->fetch_assoc()) {

                			echo "<tr> <td>". $row['name'] . "</td> <td>". $row['email'] . "</td> <td>". $row['address'] ." </td> <td>". $row['qualification'] ." </td> <td>" . $row['rate'] . "</td> </tr>";
              				}

							?>
						</table>
						</div>
						<div id="rate" class="content" style="display: none;">
							<center><h3>Rate Donors</h3></center>
							<table>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Address</th>
									<th>Qualification</th>
									<th>Rating</th>
								</tr>
							<?php

							$sql = "SELECT name, email, address, qualification, rate FROM volunteer";
				            $result = $mysqli->query($sql) or die($mysqli->error);

				          
								while ($row = $result->fetch_assoc()) {
									?>
                			<tr> 
                				<td><?php echo  $row['name']; foreach ($result -> lengths as $i => $val) {
    printf("Field %2d has length: %2d\n", $i + 1, $val);
  }?></td> 
                				<td><?php echo  $row['email'] ;?></td> 
                				<td><?php echo  $row['address'] ?> </td> 
                				<td><?php echo  $row['qualification'] ?> </td> 
                				<td>
                					<div id="edit-rate" class="edit-rate">
                						<input id='rate-input' type='number' min='1' max='5' name='rating'> 
                						<button name='ok-btn'>OK</button>
                					</div>
                					<div id="edit" class="edit">
                						<a href='#' onclick="editOn()">Edit</a>
                					</div>
                				</td> 
                			</tr>
                			<?php
              				}
							?>
						</table>
							
						</div>
					</div>
				</div>
			</div>
		
		<script type="text/javascript">
			function opendiv(menu) {
				var i;
  				var x = document.getElementsByClassName("content");
  				for (i = 0; i < x.length; i++) {
    				x[i].style.display = "none";  
  				}
  				document.getElementById(menu).style.display = "block";  
			}
			function editOn() {
			  	var x = document.getElementById("edit-rate");
			 	var y = document.getElementById("edit");
  				x.style.display = "block";
    			y.style.display = "none";
  			
			}
		</script>
		
		</body>
		</html>

<?php
}
?>