<?php 

define('HOST','localhost');
	define('USER','cre_jobportal');
	define('PASS','7792803988');
	define('DB','cre_jobportal');
	
	$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

//$sql = "SELECT * FROM user ORDER BY id DESC AND email  NOT In (SELECT email FROM user where email='007saurabhgoyal@gmail.com'); ";
$sql= "SELECT * 
FROM user ORDER BY id DESC
";	
	
	
	$r = mysqli_query($con,$sql);
	
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		array_push($result,array(
'id'=>$row['id'],
			'username'=>$row['username'],
'email'=>$row['email'],
'token'=>$row['token'],


		
		));
	}
	




	echo json_encode(array_reverse($result));
	
	mysqli_close($con); ?>