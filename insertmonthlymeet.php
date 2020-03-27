<?php
//echo "this is page";
require_once "config.php";
if($_POST['action']=='insertmeetdata'){
	$beltno=$_POST['beltno'];
	$attendance=$_POST['att'];
	
	$sql = "INSERT INTO monthly_meet (BELT_NO, NAME_ENGLISH,CONTACT_NO,DOB,CATEGORY,RANK, ATTEDANCE)
			select BELT_NO,NAME_ENGLISH,CONTACT_NO, DOB, CATEGORY, RANK, '".$attendance."'
			from volunteers_list as b WHERE b.BELT_NO='".$beltno."'";
	//$result = mysqli_query($link, $sql);
	if($result = mysqli_query($link, $sql)){
		echo "yes";
	}
	else{
		echo "no";
	}
}

if($_POST['action']=='editdetails'){
	//print_r($_POST);die;
	$checkpoint=$_POST['checkpoint'];
	$beltno=$_POST['beltno'];
	$tot_present=$_POST['tot_present'];
	$tot_days=$_POST['tot_days'];
	$bill_no=$_POST['bill_no'];
	
	$sql = "Update monthly_meet set CHECKPOINT='".$checkpoint."',TOTAL_PRESENT='".$tot_present."',TOTAL_DAYS='".$tot_days."',
				BILL_NUMBER='".$bill_no."' WHERE BELT_NO='".$beltno."'";
	//$result = mysqli_query($link, $sql);
	if($result = mysqli_query($link, $sql)){
		echo "yes";
	}
	else{
		echo "no";
	}
}
?>