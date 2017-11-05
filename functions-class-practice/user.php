<?php
//CONNECTING TO DATABASE
require "db.php";

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
					  </tr>";
			}

			echo"<br><br>";
			
			
		}else{
		    echo '0 results';
		}
	}

	public function insertUser($id, $email, $fname, $lname, $phone, $birthday, $gender, $password){

		try{
			$sql = "INSERT IGNORE INTO accounts VALUES(42, 'dora-the-explorer@nick.com','Dora', 'Theexplorer', '111', '1809-12-25','female','dora123'); SELECT * FROM accounts;";
			$results = runQuery($sql);

			// $sql->bindparam(":id",$id);
			// $sql->bindparam(":email",$email);
			// $sql->bindparam(":fname",$fname);
			// $sql->bindparam(":lname",$lname);
			// $sql->bindparam(":phone",$phone);
			// $sql->bindparam(":birthday",$birthday);
			// $sql->bindparam(":gender",$gender);
			// $sql->bindparam(":password",$password);

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

				echo"<br><br>";
				
				
			}else{
			    echo '0 results insert';
			}

			return true;
		}

		catch(PDOException $e){
			echo $e->getMessage(); 
   			return false;
		}
	}

	public function deleteUser($id){

		$sql = "
		DELETE FROM accounts WHERE id=42;
		SELECT * FROM accounts;";
		$results = runQuery($sql);

		return $result->fetchFirst(PDO::FETCH_ASSOC);
		 // if(count($results) > 0)
			// 	{
			// 		echo "<table border=\"1\">
			// 		    			<tr>
			// 		    				<th>ID</th>
			// 		    				<th>Email</th>
			// 		    				<th>First Name</th>
			// 		    				<th>Last Name</th>
			// 		    				<th>Phone</th>
			// 		    				<th>Birthday</th>
			// 		    				<th>Gender</th>
			// 		    				<th>Password</th>
			// 	    				</tr>";
						
			// 		foreach ($results as $row) {
			// 			echo "<tr>
			// 					<td>" . $row["id"] . "</td>
			// 					<td>" . $row["email"]  . "</td>
			// 					<td>" . $row["fname"]  . "</td>
			// 					<td>" . $row["lname"]  . "</td>
			// 					<td>" . $row["phone"]  . "</td>
			// 					<td>" . $row["birthday"]  . "</td>
			// 					<td>" . $row["gender"]  . "</td>
			// 					<td>" . $row["password"]  . "</td>
			// 				  </tr>";
			// 		}

			// 		echo"<br><br>";
					
					
			// 	}else{
			// 	    echo '0 results delete user';
			// 	}

	}		

}//END CLASS



//CREATE A NEW OBJECT
$user = new User; 
//GET THE VALUE
echo $user->displayUsers();
echo $user->insertUser();
echo $user->displayUsers();
echo $user->deleteUser();
echo $user->displayUsers();






?>