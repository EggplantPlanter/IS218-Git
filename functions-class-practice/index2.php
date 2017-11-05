<?php
require 'db.php'; 

class User{

	function getAllUsers(){
		$sql = "SELECT id,email,fname,lname,phone,birthday,gender,password FROM accounts";
		

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
					  </tr>";
			}
			
		}else{
		    echo '0 results';
		}

		$results = runQuery($sql);
	}
}

?>