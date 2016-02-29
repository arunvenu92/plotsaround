<?php
   session_start();
   include_once "connectPAdb.php";
   $searchKey = $_POST['searchDb'];
   $file = fopen("../json/output.json", "w") or die("Unable to open file!");
   $resultRows = array();
   echo $searchKey;
   if($searchKey != null)
   {
	   $sql = "select dev_name,builder_name,progress,isApproved from developer where dev_name like '%$searchKey%'";
	   $result = mysqli_query($conn,$sql);
	   $_SESSION['rowcount']=mysqli_num_rows($result);
    	if (mysqli_num_rows($result) > 0) 
		{
			while($row = mysqli_fetch_assoc($result)) 
			{
			  $resultRows = $row;
			  $json_file=json_encode($resultRows);
			}
			//$_SESSION['result']=$resultRows;
			fwrite($file,$json_file);
		}
	   header('Location:../search.php');
   }
   else
   {
	 //  write javascript to show message
   }
?> 
