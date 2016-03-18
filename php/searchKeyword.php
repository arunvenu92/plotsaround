<?php
   session_start();
   $searchKey = $_POST['searchDb'];
   $price = $_POST['price'];
   $locality = $_POST['locality'];
   $file = fopen("../json/output.json", "w") or die("Unable to open file!");
   $resultRows = array();   
   echo "\n";
   if($price !=0)
   {
	list($low,$high) = preg_split('[-]', $price);
   }  
   echo $low;
   echo $high;
   if($searchKey != null && $price!= null && $locality !=null)
   {
	   $server="localhost";
	   $username ="root";
	   $password="arun";
       $database="plots";
	   $conn = mysqli_connect($server,$username,$password,$database);
       $sql = "select dev_name,builder_name,progress,price,locality,isApproved from developer where dev_name like '%$searchKey%' and locality='$locality' and price between $low and $high";
	   $result = mysqli_query($conn,$sql);
	   $_SESSION['rowcount']=mysqli_num_rows($result);
       echo 'The value fetched'.$_SESSION['rowcount'];
      if(mysqli_num_rows($result) > 0)
	  {		  
	   while($row = mysqli_fetch_assoc($result)) 
		{
		  $devname=$row['dev_name'];
		  $buildername=$row['builder_name'];
		  $progress=$row['progress'];
		  $approved=$row['isApproved'];
    	  $price=$row['price'];
		  $locality=$row['locality'];
		  $resultRows[] = array('dev_name'=> $devname, 'builder_name'=> $buildername,'progress'=>$progress,'price'=>$price,'locality'=>$locality,'isApproved'=>$approved);
		}
		$response['resultRows'] = $resultRows;
		$json_file=json_encode($resultRows);
		fwrite($file,$json_file);
		header('Location:../search.php');
	  }
	 }
   else if($searchKey == null && $price!=null && $locality !=null)
   {
	   $server="localhost";
	   $username ="root";
	   $password="arun";
       $database="plots";
	   $conn = mysqli_connect($server,$username,$password,$database);
    
	   $sql = "select dev_name,builder_name,progress,price,locality,isApproved from developer where locality=$locality and price between $low and $high";
      $result = mysqli_query($conn,$sql);
	    if (mysqli_num_rows($result) > 0) 
		{
			echo 'Inside if';
			while($row = mysqli_fetch_assoc($result)) 
			{
			  $devname=$row['dev_name'];
			  $buildername=$row['builder_name'];
			  $progress=$row['progress'];
			  $approved=$row['isApproved'];
			  $price=$row['price'];
			  $locality=$row['locality'];
			  $resultRows[] = array('dev_name'=> $devname, 'builder_name'=> $buildername,'progress'=>$progress,'price'=>$price,'locality'=>$locality,'isApproved'=>$approved);
			}
			$response['resultRows'] = $resultRows;
			$json_file=json_encode($resultRows);
			fwrite($file,$json_file);
			header('Location:../search.php');
		}
		else
		{
			echo 'Inside else';
		}
   }
        
?> 
