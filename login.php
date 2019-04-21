<?php

$servername = "sql206.byethost.com";
			$username = "b5_23097898";
			$password = "xV7sMVwyfl9c5Y";
			$dbname = "b5_23097898_SweetByNature";
if (isset($_POST['psw']) && isset($_POST['uname'])) {
	$conn = new mysqli($servername, $username, $password, $dbname);
	$result = $conn->query("SELECT * FROM `Users` WHERE `Username`='" . $_POST["uname"] . "' and `Password` = '". $_POST["psw"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
				  echo "<script>
alert('The username or password is incorrect.');
window.location.href='index.html';
</script>";
	} else {
		
          if (!session_id())
              session_start();
              $_SESSION = array();
          $_SESSION['logon'] = true;

          header('Location: sales.html');
die();
         
      }
}
	
?>

		