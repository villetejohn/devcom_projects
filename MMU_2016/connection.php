<?php
  $conn = mysqli_connect("localhost","root","localhost@@","mmu2016v2");

	$nameq = "select * from judges where id='".$_SESSION['judge_id']."'";
	$namer = mysqli_query($conn,$nameq);
	$row = mysqli_fetch_assoc($namer);
	$fullname = $row['first_name']." ".$row['last_name'];
?>