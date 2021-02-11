<?php
$con = mysqli_connect("localhost","root","","chatbot");

$msg = mysqli_real_escape_string($con, $_POST['msg']);

$sql="select replies from chat where queries LIKE '%$msg%' ";
$run_query=mysqli_query($con, $sql);
if(mysqli_num_rows($run_query)>0){
  $data=  mysqli_fetch_assoc($run_query);
  echo  $data['replies'];
}else{
	echo "Sorry can't be able to understand you!";
}
?>