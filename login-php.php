<?php include "db.php"; ob_start(); ?>
<?php session_start(); ?>
<?php 

if (isset($_POST['login']) ) {
	//echo "hello";
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM sign_in WHERE USERNAME = '$username'";
	$select_user = mysqli_query($connection,$query);

	if (!$select_user) {
		die("Query Failed" . mysqli_error($connection));
	}

	while ($row = mysqli_fetch_assoc($select_user)) {
		$db_user_id = $row['CID'];
		$db_username = $row['USERNAME'];
		$db_user_password = $row['PASSWORD'];
		$db_user_role = $row['role'];

		if($username === $db_username && $password === $db_user_password) {

			$_SESSION['s_username'] = $db_username;
			$_SESSION['s_id'] = $db_user_id;

			if ($db_user_role == 'admin') {
				header("Location: ./admin");
				exit;			
			}
			else if ($db_user_role == 'user') {
				header("Location: ./home.php");
				exit;			
			}
		}
		else {
			header("Location: ./login.php");
			exit;
		}
		
	}

}
?>