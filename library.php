<?php
function LoadFromFile(){
	global $auth;
	$myfile=fopen("Database.txt","r") or die("File Not Found");
	while($line=fgets($myfile)){
		$line=trim($line);
		$cr=explode(" ",$line);
		$auth[]=array("i"=>$cr[3],"pass"=>$cr[5]);
	}
	fclose($myfile);
	
}

?>