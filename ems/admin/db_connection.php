<?php
	$connect = new mysqli("localhost", "root", "", "ems");
		if($connect-> connect_errno){
			die('Could not connect: ' . $connect->connect_errno);
			}		
?>