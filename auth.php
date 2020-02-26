<?php
session_start();

$auth=array();

	 
require("library.php");

LoadFromFile();


if (isset($_POST['submit'])){
			$id =$_POST['id'];
	      $password=$_POST['password'];
	      foreach($auth as $v){
	      if($_POST["id"]==$v["i"] && md5($_POST["password"])==$v["pass"]){
	     
	      header("location: home.php");	      

	  }

	 }
	}


		if (isset($_POST['submit'])){
			$id =$_POST['id'];
	      $password=$_POST['password'];
	      if(empty($id) and empty($password))
	      {
	      	echo "null submission";
	      }

	}



	if (isset($_POST['submit'])){
			$id =$_POST['id'];
	      $password=$_POST['password'];
	      foreach($auth as $v){

	      if($_POST["id"]==$v["i"] and empty($password))
	      {
	      	echo "Password field id Empty";
	      }

	}
}



