<?php
	// Create connection
		$con=mysqli_connect("localhost","root","root","test");
	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	//use $sql to make the item content dynamic
		$sql = "SELECT projects_id FROM projects WHERE item='".$pageCurrent."'";
		$result_current = mysqli_query($con,$sql);
	
	$result_max = mysqli_query($con,"SELECT MAX(projects_id) FROM projects;");

	// Numeric array
	$row_current=mysqli_fetch_array($result_current,MYSQLI_NUM);

	$row_max=mysqli_fetch_array($result_max,MYSQLI_NUM);

	$result_previous = mysqli_query($con,"SELECT item FROM projects WHERE projects_id=$row_current[0]-1");
	$result_next = mysqli_query($con,"SELECT item FROM projects WHERE projects_id=$row_current[0]+1");
	// Associative array
	$row_previous=mysqli_fetch_array($result_previous,MYSQLI_ASSOC);
	$row_next=mysqli_fetch_array($result_next,MYSQLI_ASSOC);

	$previous = $row_previous["item"].".php";
	$next = $row_next["item"].".php";
	if ($row_current[0]==$row_max[0]){
		$next = null;
	}

	if ($row_current[0]==1){
		$previous = null;
	}

	mysqli_close($con);
?>
<ul class="PreNext">
<a href="<?php echo $previous;?>"><i class="fa fa-chevron-circle-left"></i></a>
<a href="<?php echo $next;?>"><i class="fa fa-chevron-circle-right"></i></a>
</ul>