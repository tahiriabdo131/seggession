<?php 	
	$conn = new mysqli("localhost", "root", "", "skills");

	//Get search term
	$searchTerm = $_GET['term'];

	//Get Matched data from skill table
	$query = $conn->query("SELECT * FROM skill WHERE name_skill LIKE '%".$searchTerm."%'") ;
	//Generate skill data array

	if($query->num_rows > 0){
		while ($row = $query->fetch_assoc()) {
			$data[] = $row['name_skill'];
		}
	}
	//return results as json encoded array
	echo json_encode($data);
?>