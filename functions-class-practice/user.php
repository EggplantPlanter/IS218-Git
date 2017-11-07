<?php require "db.php"; ?>

<?php

class User{

	public function displayUsers(){

		$sql = "SELECT * FROM accounts";
		$results = runQuery($sql);

		if(count($results) > 0)
		{
			echo "<table border=\"1\">
	    			<tr>
	    				<th>ID</th>
	    				<th>Email</th>
	    				<th>First Name</th>
	    				<th>Last Name</th>
	    				<th>Phone</th>
	    				<th>Birthday</th>
	    				<th>Gender</th>
	    				<th>Password</th>
    				</tr>";
				
			foreach ($results as $row) {
				echo "<tr>
						<td>" . $row["id"] . "</td>
						<td>" . $row["email"]  . "</td>
						<td>" . $row["fname"]  . "</td>
						<td>" . $row["lname"]  . "</td>
						<td>" . $row["phone"]  . "</td>
						<td>" . $row["birthday"]  . "</td>
						<td>" . $row["gender"]  . "</td>
						<td>" . $row["password"]  . "</td>
					  </tr> ";
			}
			
			
		}else{
		    echo '0 results';
		}
	}


	public function deleteUser(){

		$sql = "DELETE FROM accounts WHERE id=42;";
		$results = runQuery($sql);
		
	}	

	public function insertUser(){

		$sql = "INSERT IGNORE INTO accounts VALUES(42, 'dora-the-explorer@nick.com','Dora', 'Theexplorer', '111', '1809-12-25','female','dora123')";
		$results = runQuery($sql);

	}

	public function updateUser(){

		$sql = "UPDATE accounts SET password='password123' WHERE id=14";
		$results = runQuery($sql);
		
	}	

}//END CLASS

$user = new User; 
?>


<html>
<head>
	<title>Functions and Class</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<style>
		table, td, th, tr{
			padding: .25em;
		}

	</style>
</head>
<body>

	<div class="container">

	    <div class="row">
	        <h1 style="color:black">WK9 HW: Functions & Class Practice</h1>
	    </div>

	    <div class="row">
        	<?php $user->displayUsers();?>
	    </div>

	    <div class="row">
        	<?php $user->insertUser();?>
	    </div>

	    <div class="row"> 
        	<?php $user->deleteUser();?>
	    </div>


    </div>


</body>
</html>







