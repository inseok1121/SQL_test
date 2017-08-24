<?php
require("db.php");
$id = $_POST['user_id'];
$pw = $_POST['user_pwd'];

$conn = db_init();
$sql = "SELECT * FROM Users where email='".$id."' and pw = '".$pw."'";
$result = mysqli_query($conn, $sql);
if($result->num_rows != 0){
	echo "<script>alert(\"Hello World.\");</script>";
	echo "<script>location.replace('./board_list.php');</script>";
}else{
	echo "<script>alert(\"Wrong.\");</script>";
        echo "<script>history.go(-1);</script>";
}

?>



