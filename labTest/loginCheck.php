<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null){

			$file = fopen('users.txt', 'r');
			while(!feof($file)){

				$user = fgets($file);
				$userArry = explode('|', $user);
				
				if(trim($userArry[1]) == $username && trim($userArry[3]) == $password){
					$_SESSION['status'] = true;
                    $_SESSION['current_user'] = $userArry;
                    setcookie('status', trim($userArry[1]), time()+3600, '/');

                    header('location: searchManagement.php');
				}
			}
            
			echo "invalid username/password";

		}else{
			echo "null submission";
		}
	}
?>