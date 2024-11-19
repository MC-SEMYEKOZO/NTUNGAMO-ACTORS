<?php
$servsrname='localhost';
$username='root';
$passwoar='';
$dname='Ntungamo_United_Actors';

$conn=mysqli_connect($servsrname,$username,$passwoar,$dname);
if (!$conn) {
	die("connection failed:".mysqli_connect_error());
}

$SUR_NAME=$_POST['SUR_NAME'];
$GIVEN_NAME=$_POST['GIVEN_NAME'];
$SEX=$_POST['SEX'];
$LEVEL_OF_EDUCATION=$_POST['LEVEL_OF_EDUCATION'];
$CHARCTER=$_POST['CHARCTER'];
$MALITAL_STATUS=$_POST['MALITAL_STATUS'];
$TYPE_OF_JOB=$_POST['TYPE_OF_JOB'];
$AGE=$_POST['AGE'];
$HOME_DISTRICT=$_POST['HOME_DISTRICT'];
$MOBILE_CONTACT=$_POST['MOBILE_CONTACT'];
$WATCHED_CONTENT=$_POST['WATCHED_CONTENT'];
$MEMBERSHIP_CODE=$_POST['MEMBERSHIP_CODE'];
$RECEIVED_BY=$_POST['RECEIVED_BY'];
$YEAR=$_POST['YEAR'];


$sql="insert into Actors values('$SUR_NAME','$GIVEN_NAME','$SEX','$LEVEL_OF_EDUCATION','$CHARCTER','$MALITAL_STATUS','$TYPE_OF_JOB','$AGE','$HOME_DISTRICT','$MOBILE_CONTACT','$WATCHED_CONTENT','$MEMBERSHIP_CODE','$RECEIVED_BY','$YEAR')";



if (mysqli_query($conn, $sql)) {
	echo "NEW RECORD ADDED.";
}else{
	echo "error" .$sql .mysqli_error($conn);
}











?>