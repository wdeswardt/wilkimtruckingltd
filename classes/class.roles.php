<?php

	class roles{
	
		public function addNewRole($shortTitle, $longTitle, $roleDescription, $roleResponsibilities, $roleRequirements, $UID){
			
			try {
				$db = database::databaseConnect();
				$stmt = $db->prepare('INSERT INTO companyroles (shortTitle, longTitle, roleDescription, roleResponsibilities, roleRequirements, createdBy, creationDate) VALUES (:shortTitle, :longTitle, :roleDescription, :roleResponsibilities, :roleRequirements, :UID, NOW())');
				$stmt->bindParam(':shortTitle', $shortTitle, PDO::PARAM_STR);
				$stmt->bindParam(':longTitle', $longTitle, PDO::PARAM_STR);
				$stmt->bindParam(':roleDescription', $roleDescription, PDO::PARAM_STR);
				$stmt->bindParam(':roleResponsibilities', $roleResponsibilities, PDO::PARAM_STR);
				$stmt->bindParam(':roleRequirements', $roleRequirements, PDO::PARAM_STR);
				$stmt->bindParam(':UID', $UID, PDO::PARAM_INT);
				$addRole = $stmt->execute();

				if ($addRole){
					$roleAdded = true;
				}

				$db = null;

			} catch (PDOException $e) {
				$roleAdded = false;
			}
        return $roleAdded;
		}
	}


?>