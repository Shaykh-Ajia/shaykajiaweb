<?php
  //functions
     function confirm_query($result_set)
	 {
	   if(!$result_set)
	   {
	     die("Query failed");
	   }
	 }
	 
	 function get_login($username, $hashed_password)
	 {
	    global $conStr;
	    $query =  "SELECT * ";
		$query .= "FROM user ";
		$query .= "WHERE username= '{$username}' ";
		$query .= " AND password= '{$hashed_password}' ";
		$query .= "LIMIT 1";
		$result_set = mysql_query($query);
		confirm_query($result_set);
		return $result_set;
	 }
	 function redirect_to($location = NULL)
	 { 
	    if($location != NULL)
		{
	       header("Location: {$location}");
		   exit;
		}
	 }
?>