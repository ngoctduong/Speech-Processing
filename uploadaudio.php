<?php 
	$_POST  = array();
	parse_str(file_get_contents('php://input'), $_POST);
	
	if ($_POST['p'])
	{
		echo 'have data';
		//file_put_contents('data.txt',$_POST[data]);
		$file = 'data.bin';	
		//echo $_POST['p'];
		unlink($file);
		file_put_contents($file ,$_POST['p'], FILE_APPEND | LOCK_EX);
	} else {
		echo 'Post form is NULL!';
	}
	
?>

<p>
</p>

-- <br />
