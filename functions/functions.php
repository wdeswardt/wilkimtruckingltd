<?php
	//Including this file where all the paths to the different files are recorded in.
	require_once 'paths.php';

	function addNewRole($shortTitle, $longTitle, $jobDescription, $jobResponsibilities, $jobRequirements, $UID){
		//Adding roles to the database by using the addNewRole method in the roles class
		return $roleAdded = roles::addNewRole($shortTitle, $longTitle, $jobDescription, $jobResponsibilities, $jobRequirements, $UID);	
    }
		



?>