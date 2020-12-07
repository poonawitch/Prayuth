<?php 

	class userClass{

		public function login($username, $password){
			$password = md5($password);
			$db = db();
			$stmt = $db->prepare('SELECT userRole FROM auth WHERE userID = :userID AND password = :password');

			$stmt->bindParam("userID", $username,PDO::PARAM_STR);
			$stmt->bindParam("password", $password,PDO::PARAM_STR);

			$stmt->execute();

			// $stmt = $db->query("SELECT firstName FROM studentInfo WHERE studentID = '$username' AND password = '$password' ");

			$count = $stmt->rowCount();

			if($count){
				$data = $stmt->fetch(PDO::FETCH_OBJ);
				session_start();
				$_SESSION['user'] = $data->userRole;
				if ($_SESSION['user'] == "Student") {
					$stmt = $db->prepare('SELECT * FROM studentInfo WHERE studentID = :userID');
					$stmt->bindParam("userID", $username,PDO::PARAM_STR);
					$stmt->execute();

					$data = $stmt->fetch(PDO::FETCH_OBJ);
					$_SESSION['userID'] = $data->studentID;
					$_SESSION['firstName'] = $data->firstName;
					$_SESSION['lastName'] =  $data->lastName;
					$_SESSION['department'] = $data->department;
					$_SESSION['faculty'] = $data->faculty;
					$_SESSION['year'] = $data->year;

				}
				if ($_SESSION['user'] == "Lecturer") {
					$stmt = $db->prepare('SELECT * FROM lecturerInfo WHERE lecturerID = :userID');
					$stmt->bindParam("userID", $username,PDO::PARAM_STR);
					$stmt->execute();

					$data = $stmt->fetch(PDO::FETCH_OBJ);
					$_SESSION['userID'] = $data->lecturerID;

					$_SESSION['name'] = $data->firstName . " " . $data->lastName;
				}
				session_write_close();
				return $_SESSION['user'];
			}else{
				return "Error";
			}
		}
		
	}
?>