<?php

	function addNewRole($shortTitle, $longTitle, $jobDescription, $jobResponsibilities, $jobRequirements){
		
		try {
			$db = database::databaseConnect();

            $stmt = $db->prepare('SELECT username FROM users WHERE username=:username');
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->execute();

            if ($stmt->rowCount() == 1){
                $userExists = true;
            }

            $db = null;

        } catch (PDOException $e) {
            $userExists = false;
        }
        return $userExists;
    }
		



?>