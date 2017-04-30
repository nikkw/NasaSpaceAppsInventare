<?php 

if($_POST){
	$msg = $_POST['msg'];

	//TODO implements checkboxes

	$link = mysqli_connect('localhost', 'root', '', 'test');

	if($link){

		$sql = "SELECT * FROM subs";

		$emails = array();

		if($result = mysqli_query($link, $sql)){
			
			while ($row=mysqli_fetch_row($result)){

				$emails[] = $row[3];
		    }		     		    
		}

		mysqli_close($link);

		if(!empty($emails)){
			foreach ($emails as $key => $value) {
				$msg = wordwrap($msg, 70);
				
				mail($value, 'Alarm!', $msg);
			}
		}
	}
}

?>