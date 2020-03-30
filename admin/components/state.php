<?php
  
    //get search term
    $searchTerm = $_GET['term'];
    
  	include('connect.php');  
    //get search term
    $searchTerm = $_GET['term'];
    
    //get matched data from skills table
    $query = $db->query("SELECT * FROM countries WHERE countryID LIKE '%".$searchTerm."%' ORDER BY skill ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['countryID'];
    }
    
    //return json data
    echo json_encode($data);
?>